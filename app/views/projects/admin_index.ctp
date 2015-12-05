<div class="projects index">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>			
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $project):
		$class = null;
		if ($i % 2 == 0) $class = "altrow";		
	
		$onclick = "onclick=\"location.href='". $html->url(array('action' => 'edit', $project['Project']['id'])) . "';\" ";
		echo "<tr class = '$class' $onclick   onmouseover=\"this.className='selrow';\" onmouseout=\"this.className='$class';\"".">";
	?>
		<td><?php echo $project['Project']['name']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['description']; ?>&nbsp;</td>		
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->element('pagination'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back', true), array('controller' => 'letters', 'action' => 'index')); ?> </li>
	</ul>
</div>