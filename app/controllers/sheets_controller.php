<?php
class SheetsController extends AppController {

	var $name = 'Sheets';
        var $uses = array('Sheet','Trial','Complication','User');

	function index() {
		$this->Sheet->recursive = 0;
		$this->set('sheets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sheet', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sheet', $this->Sheet->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {

                    $sheetsaved = false;
                    $trialssaved = false;
                    
                    // Sheetデータの保存を行う
                    $this->Sheet->create();
                    if ($this->Sheet->save($this->data)) {
                        
                        // Sheetデータの保存が成功したら、
                        // フラグをセットし
                        $sheetsaved = true;
                        // sheet_idを得る
                        $sheetid = $this->Sheet->getLastInsertID();
                            
                        // 続いてTrialsデータの保存を行う
                        $trials=$this->data['Trial'];
                        foreach ($trials as $trial) {
                            // 次のTrialデータが空でなければ
                            if (!empty($trial['trialer_pgy'])) {
                                // sheet_idに親シートのIDをセット
                                $trial['sheet_id']=$sheetid;
                                $this->Trial->create();
                                if ($this->Trial->save(array('Trial'=>$trial))) {
                                    
                                    // Trialデータの保存が成功したら、
                                    // フラグをセットしループを継続
                                    $trialssaved = true;
                                    continue;
                                    
                                } else {
                                    
                                    // もしTrialデータの保存に失敗したら、
                                    // フラグをセットしループを離脱
                                    $trialssaved = false;
                                    break;
                                }      
                            }
                        }
                    }
                        
                    if ($sheetsaved && $trialssaved) {
                            
                        // SheetもTrialsも保存に成功したらメッセージを表示してリダイレクト
                        $this->Session->setFlash(__('The sheet has been saved', true));
                        $this->redirect(array('action' => 'index'));
			
                    } else {
                            
                        // もしどちらかの保存に失敗したら再入力を促す
                        $this->Session->setFlash(__('The sheet could not be saved properly. Please, try again.', true));
			
                    }
                }    
                        
			
                // 認証ユーザーの情報をセット
                $user = $this->Auth->user();
                // 認証ユーザーの所属病院をセット
                $userdata = $this->User->read(null,$this->Auth->user('id'));
                $hospitaldata = $userdata['Hospital'];
                for($i=0; $i<count($hospitaldata); $i++) {
                    $hospitals[$hospitaldata[$i]['id']]=$hospitaldata[$i]['name'];
                };
                // 表示・選択用データをセット
                $adaptations = $this->Sheet->Adaptation->find('list');
                $methods = $this->Trial->Method->find('list');
                $devices = $this->Trial->Device->find('list');
                $premeds = $this->Trial->Premed->find('list');
                $sedatives = $this->Trial->Sedative->find('list');
                $relaxants = $this->Trial->Relaxant->find('list');
                $complications = $this->Sheet->Complication->find('list');
                $this->set(compact('user', 'hospitals', 'adaptations', 'methods' , 'devices' , 'premeds' , 'sedatives' , 'relaxants' , 'complications'));
        }

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sheet', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sheet->save($this->data)) {
				$this->Session->setFlash(__('The sheet has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sheet could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sheet->read(null, $id);
		}
		$users = $this->Sheet->User->find('list');
		$adaptations = $this->Sheet->Adaptation->find('list');
		$complications = $this->Sheet->Complication->find('list');
		$this->set(compact('users', 'adaptations', 'complications'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sheet', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sheet->delete($id)) {
			$this->Session->setFlash(__('Sheet deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sheet was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
