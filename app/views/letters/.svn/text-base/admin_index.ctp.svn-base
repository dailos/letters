<?php if(!$filtered):?>
<div class="letters index">		
	<div id="filter">
	<fieldset>
	<legend><?php __('Filter'); ?></legend>
	<table cellpadding="0" cellspacing="0">
		<tr>	
			<?php echo $this->Form->create('Letter'); ?>
			<th class="filter"><?php echo $this->Form->input('numberfilter', array('label'=>'Number',"style" => "width:40px;height:4px;"));
				echo $ajax->observeField('LetterNumberfilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>		
			<th class="filter" ><?php echo $this->Form->input('situationfilter',array('empty' => ' ','label'=>'Situation', 'options'=> $situations));
				echo $ajax->observeField('LetterSituationfilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>
			<th class="filter" ><?php echo $this->Form->input('reffilter', array('label'=>'Ref',"style" => "width:40px;height:4px;"));
				echo $ajax->observeField('LetterReffilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>
			<th class="filter" ><?php echo $this->Form->input('datefilter', array('label'=>'Date',"style" => "width:40px;height:4px;"));
				echo $ajax->observeField('LetterDatefilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>
			<th class="filter" ><?php echo $this->Form->input( 'companyfilter',array('empty'=>' ', 'label'=> 'Company','options'=>$companies));
				echo $ajax->observeField('LetterCompanyfilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>
			<th class="filter" ><?php echo $this->Form->input('filenumberfilter', array('label'=>'File n.',"style" => "width:40px;height:4px;"));
				echo $ajax->observeField('LetterFilenumberfilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>
			<th class="filter" ><?php echo $this->Form->input('userfilter',array('label'=> 'User', 'empty' => ' ',  'options'=>$users));
				echo $ajax->observeField('LetterUserfilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>
			<th class="filter" ><?php echo $this->Form->input( 'projectfilter',array('empty'=>' ', 'label'=> 'Project','options'=>$projects));
				echo $ajax->observeField('LetterProjectfilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>
			<th class="filter" style="width:275px;"><?php echo $this->Form->input('subjectfilter', array('label'=>'Subject',"style" => "height:4px;"));
				echo $ajax->observeField('LetterSubjectfilter', array('update'=>'main', 'url' => array( 'action' => 'index' ),'frequency' => 1) ); 
			?></th>			
			<th class="filter"><?php echo $this->Html->link($html->image("del.png"), array( 'action' => 'resetfilter'), array( 'escape' => false) ); ?></th>	
		</tr>
	</table>
	</fieldset>
	</div>

<?php endif;?>	
	<div id="main">
	<table cellpadding="0" cellspacing="0">
		<tr>	
		<?php if($filtered) $class = 'class="filter"';
		else $class = "";
		?>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('N.', 'id');?></th>		
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('In/Out','situation');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('ref');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('date');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('letter');?></th>	
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('email');?></th>	
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('fax');?></th>			
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('company_id');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('Related','letter_id');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('F. N.','filenumber');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('user_id');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('project');?></th>
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('attachments');?></th>	
			<th  <?php echo $class;?>><?php echo $this->Paginator->sort('restricted');?></th>		
			<th <?php echo $class;?>><?php echo $this->Paginator->sort('subject');?></th>	
		</tr>		
	<?php
	$i = 0;
	foreach ($letters as $letter):	
		$class = null;
		if ($i % 2 == 0) $class = "altrow";		
	
		$onclick = "onclick=\"location.href='". $html->url(array('action' => 'view', $letter['Letter']['id'])) . "';\" ";
		echo "<tr class = '$class' $onclick   onmouseover=\"this.className='selrow';\" onmouseout=\"this.className='$class';\"".">";	
	?>
	
		<td style="width:40px;"><?php echo $letter['Letter']['id']; ?></td>	
		<td style="width:10px;">
		<?php switch ($letter['Letter']['situation']){
			case 1: echo $this->Html->Image('incoming.png');break; 
			case 2: echo $this->Html->Image('outcoming.png');break;
		}
		 
		?>&nbsp;</td>
		<td style="width:10px;"><?php echo $letter['Letter']['ref']; ?>&nbsp;</td>
		<td style="width:80px;"><?php echo date('d-M-Y', strtotime ($letter['Letter']['date']));?>&nbsp;</td>
		<td style="width:40px;">
			<?php 			 
			if($letter['Letter']['letter']) echo $this->Html->Image('letter_icon.png');
			else echo $this->Html->Image('empty.png');
			?>		
		</td>	
		<td style="width:40px;">
			<?php 			 
			if($letter['Letter']['email']) echo $this->Html->Image('email_icon.png');
			else echo $this->Html->Image('empty.png');
			?>		
		</td>
		<td style="width:40px;">
			<?php 			 
			if($letter['Letter']['fax']) echo $this->Html->Image('fax_icon.png');
			else echo $this->Html->Image('empty.png');
			?>		
		</td>	
		<td style="width:40px;"><?php foreach ($letter['Company'] as $company)echo $company['shortname']."; ";?></td>	
		<td style="width:50px;">
			<?php 
			if($letter['Letter']['related']) echo $letter['Letter']['related'];
			else echo $this->Html->Image('empty.png');
			?>
		</td>
		<td style="width:40px;"><?php echo $letter['Letter']['filenumber']; ?>&nbsp;</td>
		<td style="width:40px;">
			<?php 			 
			if($letter['User']['initial']) echo $letter['User']['initial'];
			else echo $this->Html->Image('empty.png');
			?>		</td>	
		<td style="width:40px;"><?php foreach ($letter['Project'] as $project)echo $project['name']."; ";?></td>
		<td style="width:40px;"><?php echo count($letter['Attachment']); ?></td>
		<td style="width:40px;"><?php 			 
			if($letter['Letter']['restricted']) echo $this->Html->Image('locked.png');
			else echo " ";
			?>	</td>
		<td><?php echo $letter['Letter']['subject']; ?>&nbsp;</td>	
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->element('pagination'); ?>	
</div>
</div>
<?php if(!$filtered):?>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Letter', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>					
		<li><?php echo $this->Html->link(__('Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Html->link(__('Log out', true), array('controller' => 'users', 'action' => 'logout')); ?> </li>				
	</ul>
</div>
<?php endif;?>