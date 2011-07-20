<h2>JEAN Study Online DB：ログイン</h2>
<?php

    if ($session->check('Message.auth')) {
        echo $session->flash('auth');
    }
    echo $form->create('User',array('action'=>'login'));
    echo $form->input('username');
    echo $form->input('password');
    echo $form->end('Login');

?>