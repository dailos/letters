<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('shortname');
		echo $this->Form->input('address');
		echo $this->Form->input('telephone');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Back', true), array('controller' => 'letters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$this->Form->value('Company.id'))); ?> </li>
	</ul>
</div>