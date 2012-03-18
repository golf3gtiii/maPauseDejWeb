<h1>
<table width="100%">
    <tr>
        <td><span class="vert">Mes plats</span> du jour</td>
        <td align="right"><?php echo $this->Html->link('Ajouter', array('controller' => 'plats', 'action' => 'add'), array('id' => 'add_plat')); ?></td>
    </tr>
</table>
</h1>
<div class="plats index">
	
    
        
        <br/>
	<table cellpadding="0" cellspacing="0">
	<tr>
                <th><?php echo $this->Paginator->sort('name', 'Nom du plat');?></th>
                <th><?php echo $this->Paginator->sort('date_debut');?></th>
                <th><?php echo $this->Paginator->sort('date_fin');?></th>
                <th>Editer</th>
                <th>Supprimer</th>
	</tr>
	<?php
        $i = 0;
	foreach ($plats as $plat): 
        
        ?>
	<tr <?php echo $i%2 == 0 ? 'class="colore"' : 'nocolor';$i++;     ?>>
		<td><?php echo h($plat['Plat']['name']); ?>&nbsp;</td>
		<td><?php echo h($plat['Plat']['date_debut']); ?>&nbsp;</td>
		<td><?php echo h($plat['Plat']['date_fin']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('editer.png', array('alt' => __('Editer'), 'url' => array('action' => 'edit', $plat['Plat']['id']))); ?></td>
                <td><?php echo $this->Html->image('supprimer.png', array('alt' => __('Supprimer'), 'url' => array('action' => 'delete', $plat['Plat']['id']), null, __('Etes vous sur de vouloir supprimer le plat  %s?', $plat['Plat']['name']))); ?></td>
			
			
	</tr>
<?php endforeach; ?>
	</table>

	
</div>