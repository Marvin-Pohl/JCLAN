<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2; ?>">
                <td>
                        <?php echo JHtml::_('grid.id', $i, $item->team_name); ?>
                </td>
                <td>
                        <?php echo $item->team_name; ?>
                </td>
                
                <td>
                        <?php echo $item->entry_date; ?>
                </td>
                <td>
                        <?php echo $item->homepage; ?>
                </td>
        </tr>
<?php endforeach; ?>