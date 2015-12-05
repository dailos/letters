<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('initial');
		echo $this->Form->input('position');
		echo $this->Form->input('degree');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Back', true), array('controller' => 'letters', 'action' => 'index')); ?> </li>
	</ul>
</div>