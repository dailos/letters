<div class="users index">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('initial');?></th>
			<th><?php echo $this->Paginator->sort('position');?></th>
			<th><?php echo $this->Paginator->sort('degree');?></th>			
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i % 2 == 0) $class = "altrow";		
	
		$onclick = "onclick=\"location.href='". $html->url(array('action' => 'edit', $user['User']['id'])) . "';\" ";
		echo "<tr class = '$class' $onclick   onmouseover=\"this.className='selrow';\" onmouseout=\"this.className='$class';\"".">";
	?>	
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['initial']; ?>&nbsp;</td>
		<td><?php echo $user['User']['position']; ?>&nbsp;</td>
		<td><?php echo $user['User']['degree']; ?>&nbsp;</td>		
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->element('pagination'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back', true), array('controller' => 'letters', 'action' => 'index')); ?> </li>
	</ul>
</div>