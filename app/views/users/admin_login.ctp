<div class="login">
<?php echo $this->Form->create('User', array('action' => 'login'));
 	echo $this->Session->flash('auth');
    echo $this->Form->input('username',array('label' => 'User'));
    echo "<br>";
    echo $this->Form->input('password',array('label' => 'Password'));
    echo "<br>";
	echo $this->Form->end('Sign in');
	echo $this->Html->link(__('Back', true), array('controller' => 'letters', 'action' => 'index'));
	?>

</div>

