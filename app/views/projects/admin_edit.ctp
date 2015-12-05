<div class="projects form">
<?php echo $this->Form->create('Project');?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<ul>		
		<li><?php echo $this->Html->link(__('Back', true), array('controller' => 'letters', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete',$this->Form->value('Project.id'))); ?> </li>
	</ul>
</div>