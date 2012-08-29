<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');
JHtml::_('behavior.tooltip');
?>

<form
	action="<?php echo JRoute::_('index.php?option=com_jclan&layout=edit&player_id='. (int)$this->item->player_id); ?>"
	method="post" name="adminForm" id="player_edit-form">

	<div class="col100">
		<fieldset class="adminform">
			<legend>
				<?php echo JText::_( 'COM_JCLAN_EDIT_PLAYER_DETAILS' ); ?>
			</legend>
			<table class="admintable">
				<tr>
					<td width="100" class="key"><label for="nickname"> <?php echo JText::_( 'COM_JCLAN_NICKNAME' ); ?>:
					</label>
					</td>
					<td width="100" class="key"><label for="steam_id"> <?php echo JText::_( 'COM_JCLAN_STEAM_ID' ); ?>:
					</label>
					</td>
					<td width="100" class="key"><label for="team_id"> <?php echo JText::_( 'COM_JCLAN_TEAM_ID' ); ?>:
					</label>
					</td>

				</tr>
				<tr>
					<td><input class="text_area" type="text" name="nickname"
						id="nickname" size="32" maxlength="250"
						value="<?php echo $this->item->nickname;?>" />
					</td>
					<td><input class="text_area" type="text" name="steam_id"
						id="steam_id" size="32" maxlength="250"
						value="<?php echo $this->item->steam_id;?>" />
					</td>
					<td><select class="text_area" type="text" name="team_id"
						id="team_id">
						<option><?php echo JText::_('COM_JCLAN_SELECT_CLAN');?></option>
						<?php foreach($this->teams as $i => $item): ?>
						<?php //Pre-Select clan
						$selected ='';
						if ($item == $this->item->team_id) {
							$selected = 'selected';
						}?>
						<option <?php echo $selected;?>><?php echo $item;?></option>
						<?php endforeach;?>
						</select>
					</td>
				</tr>
			</table>
		</fieldset>
	</div>

	<div class="clr">
		<input type="hidden" name="option" value="com_jclan" /> 
		<input
			type="hidden" name="player_id"
			value="<?php echo $this->item->player_id; ?>" /> 
			<input type="hidden"
			name="task" value="edit_player" /> 
			
		<?php echo JHtml::_('form.token'); ?>
	</div>



</form>
