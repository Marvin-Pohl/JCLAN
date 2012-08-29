<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2; ?>">
                <td>
                       <?php echo JHtml::_('grid.id', $i, $item->player_id); ?>
                </td>
                <td>
                        <?php echo $item->player_id; ?>
                </td>
                
                <td>
                        <?php echo $item->nickname; ?>
                </td>
                <td>
                        <?php echo $item->steam_id; ?>
                </td>
                <td>
                        <?php echo $item->team_id; ?>
                </td>
        </tr>
<?php endforeach; ?>