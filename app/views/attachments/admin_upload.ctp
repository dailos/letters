<div class="letters form">
<?php echo $this->Form->create('Attachment',array('type'=>'file'));?>
	<fieldset>
	<?php
		echo $this->Form->hidden('letter_id',array('value'=>$letter_id));		
		echo $this->Form->file('file');		
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Upload', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Back', true), array('controller'=> 'letters', 'action' => 'index'));?></li>		
	</ul>
</div>