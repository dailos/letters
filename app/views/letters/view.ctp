<div class="letters view">
	<h2><?php echo $letter['Letter']['id'];?></h2>
	<div class="header">
	<h3><?php echo $letter['Letter']['ref']. " <> ".$letter['Letter']['date']; ?> </h3>
	</div>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Situation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php 
			switch ($letter['Letter']['situation']){
				case 1: echo $this->Html->Image('incoming.png');break; 
				case 2: echo $this->Html->Image('outcoming.png');break;
			} 
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($letter['Letter']['fax']) echo $this->Html->Image('fax_icon.png');
			if($letter['Letter']['email']) echo $this->Html->Image('email_icon.png');
			if($letter['Letter']['letter']) echo $this->Html->Image('letter_icon.png');
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letter['Letter']['subject']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php  foreach ($letter['Project'] as $project)echo $project['name']."; "; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php  foreach ($letter['Company'] as $company)echo $company['shortname']."; "; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('File N.'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letter['Letter']['filenumber']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Related'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letter['Letter']['related']; ?>
			&nbsp;
		</dd>	
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letter['User']['name']; ?>
			&nbsp;
		</dd>									
	</dl>
</div>
<div class="actions">
	<ul>				
		<li><?php echo $this->Html->link(__('Back', true), array('action' => 'index')); ?> </li>		
	</ul>
</div>
<div class="related">
<?php 
if (!empty($letter['Attachment'])){
	foreach ($letter['Attachment'] as $attachment){	
		$ext = strtolower(substr(strrchr($attachment['path'], '.'), 1));	
		$name = substr(strrchr($attachment['path'], DS), 1); ?>
		<div class="attachheader">
			<div class="attachtitle">
			<?php echo "Title: ".$attachment['name']; ?>
			</div>
			<div class="attachactions">
			<?php echo $this->Html->link($this->Html->image('download.png'), array('controller' => 'attachments', 'action' => 'download', $attachment['id']), array( 'escape' => false) );?>		
		 	</div>
		</div>
		<div class="attach">
			<?php 
			if ($ext == 'jpg' || $ext == 'png' || $ext == 'bmp' || $ext == 'gif')echo $this->Html->image('/files/'.$name,array('width'=>'1000px'));
			else if ($ext == 'pdf')echo '<embed src="/files/'.$name.'" width="1200" height="1200"></embed>';					
			else echo 'File type not supported'; ?>
		</div>
		<?php 
	}
}
?>

</div>
