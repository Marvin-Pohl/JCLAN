<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_jclan&layout=edit&player_lineup_id='.(int)$this->item->player_lineup_id); ?>"
      method="post" name="adminForm" id="jclan-form">
        <fieldset class="adminform">
                <legend><?php echo JText::_( 'COM_JCLAN_player_lineup_DETAILS' ); ?></legend>
                <ul class="adminformlist">
<?php foreach($this->form->getFieldset() as $field): ?>
                        <li><?php echo $field->label;echo $field->input;?></li>
<?php endforeach; ?>
                </ul>
        </fieldset>
        <div>
                <input type="hidden" name="task" value="player_lineup.edit" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>