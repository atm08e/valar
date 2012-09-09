<?php

if (!defined('PUN')) exit;
define('PUN_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?>				<form id="qjump" method="get" action="viewforum.php">
					<div><label><span><?php echo $lang_common['Jump to'] ?><br /></span>
					<select name="id" onchange="window.location=('viewforum.php?id='+this.options[this.selectedIndex].value)">
						<optgroup label="The Outfit">
							<option value="1"<?php echo ($forum_id == 1) ? ' selected="selected"' : '' ?>>Welcome</option>
							<option value="2"<?php echo ($forum_id == 2) ? ' selected="selected"' : '' ?>>Rules</option>
						</optgroup>
						<optgroup label="Recruits">
							<option value="3"<?php echo ($forum_id == 3) ? ' selected="selected"' : '' ?>>Read Me</option>
						</optgroup>
					</select>
					<input type="submit" value="<?php echo $lang_common['Go'] ?>" accesskey="g" />
					</label></div>
				</form>
