<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><?php echo JHtml::_('grid.id', $i, $item->game_id); ?>
	</td>
	<td><?php echo $item->game_id; ?>
	</td>
	<td><?php echo $item->game_name; ?>
	</td>
	<td><?php echo JHTML::image($item->image,JText::_('COM_JCLAN_GAME_IMAGE_ALT'));	?>
	</td>
	<td><?php 
	$attribs['target'] ='_blank';
	echo JHTML::link($item->homepage,JText::_('COM_JCLAN_GAME_HOMEPAGE_LINK'),$attribs); ?>
	</td>
</tr>
<?php endforeach; ?>