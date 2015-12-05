<div class="companies index">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('shortname');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>				
	</tr>
	<?php
	$i = 0;
	foreach ($companies as $company):
		$class = null;
		if ($i % 2 == 0) $class = "altrow";		
	
		$onclick = "onclick=\"location.href='". $html->url(array('action' => 'edit', $company['Company']['id'])) . "';\" ";
		echo "<tr class = '$class' $onclick   onmouseover=\"this.className='selrow';\" onmouseout=\"this.className='$class';\"".">";
	?>
		<td><?php echo $company['Company']['name']; ?>&nbsp;</td>
		<td><?php echo $company['Company']['shortname']; ?>&nbsp;</td>
		<td><?php echo $company['Company']['address']; ?>&nbsp;</td>
		<td><?php echo $company['Company']['telephone']; ?>&nbsp;</td>
		<td><?php echo $company['Company']['email']; ?>&nbsp;</td>		
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->element('pagination'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Company', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back', true), array('controller' => 'letters', 'action' => 'index')); ?> </li>
	</ul>
</div>