<div class="letters form">
<?php echo $this->Form->create('Letter');?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		$options=array('1'=>'Incoming','2'=>'Outcoming');				
		echo $this->Form->radio('situation',$options);			
		echo $this->Form->input('restricted');
		echo $this->Form->input('ref');
		echo $this->Form->input('date',array('dateFormat'=> 'DMY','timeFormat'=> null));			
		echo $this->Form->input('letter');	
		echo $this->Form->input('email');
		echo $this->Form->input('fax');
		echo $this->Form->input('subject',array('type'=>'textarea'));
		echo $this->Form->input('Company',array('size' =>7,'style' =>'width:220px'));
		echo $this->Form->input('filenumber',array('label'=> 'File Number'));
		echo $this->Form->input('related',array('label'=> 'Related Letter'));
		echo $this->Form->hidden('user_id');
		echo $this->Form->input('Project',array('size' =>7,'style' =>'width:220px'));		 		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Back', true), array('action' => 'index'));?></li>
	</ul>
</div>
