<div class="sheets form">
<?php echo $this->Form->create('Sheet');?>
	<fieldset>
		<legend><?php __('Add Sheet'); ?></legend>
	<?php
		echo $this->Form->hidden('user_id',array('value'=>"{$user['User']['id']}"));
                echo $this->Form->input('hospital_id');
		echo $this->Form->input('trialdate');
		echo $this->Form->radio('gender',array('male'=>'男性','female'=>'女性'));
		echo $this->Form->input('age');
		echo $this->Form->input('weight');
		echo $this->Form->input('adaptation_id',array('empty'=>true));
		echo $this->Form->input('other_adaptation');
                for ($i=0; $i<5; $i++) {
                    
                    $num = $i+1;
                    echo $this->Form->hidden("Trial.{$i}.sheet_id");
                    echo $this->Form->hidden("Trial.{$i}.trialnumber",array('value'=>"{$num}"));
                    echo $this->Form->hidden("Trial.{$i}.comment");
                    
                    // 試行１〜５入力欄を表形式で表示するための配列を準備
                    $tc[$i][0] = $num;
                    $tc[$i][1] = $this->Form->input("Trial.{$i}.trialer_pgy").$this->Form->radio("Trial.{$i}.erphysician",array('yes'=>'はい','no'=>'いいえ'));
                    $tc[$i][2] = $this->Form->radio("Trial.{$i}.changed",array('yes'=>'はい','no'=>'いいえ'));
                    $tc[$i][3] = $this->Form->input("Trial.{$i}.method_id",array('empty'=>true)).$this->Form->input("Trial.{$i}.other_method");
                    $tc[$i][4] = $this->Form->input("Trial.{$i}.device_id",array('empty'=>true)).$this->Form->input("Trial.{$i}.other_device");
                    $tc[$i][5] = $this->Form->input("Trial.{$i}.premed_id",array('empty'=>true)).$this->Form->input("Trial.{$i}.other_premed").$this->Form->input("Trial.{$i}.premeddose");
                    $tc[$i][6] = $this->Form->input("Trial.{$i}.sedative_id",array('empty'=>true)).$this->Form->input("Trial.{$i}.other_sedative").$this->Form->input("Trial.{$i}.sedativedose");
                    $tc[$i][7] = $this->Form->input("Trial.{$i}.relaxant_id",array('empty'=>true)).$this->Form->input("Trial.{$i}.other_relaxant").$this->Form->input("Trial.{$i}.relaxantdose");
                };
                echo '<table>';
                echo $this->Html->tableCells($tc);
                echo '</table>';
		echo $this->Form->input('nomoretrialreason');
		echo $this->Form->input('Complication');
                echo $this->Form->input('other_complication');
		echo $this->Form->input('comment');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sheets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adaptations', true), array('controller' => 'adaptations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adaptation', true), array('controller' => 'adaptations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trials', true), array('controller' => 'trials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trial', true), array('controller' => 'trials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complications', true), array('controller' => 'complications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complication', true), array('controller' => 'complications', 'action' => 'add')); ?> </li>
	</ul>
</div>