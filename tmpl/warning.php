<?php
/**
 * @package     Joomla.Site
 * @subpackage  Module.mod_smartwelcome
 *
 * @copyright   Copyright (C) 2013 David Hurley. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="alert alert-warning">
	<i class="icon icon-warning"></i>
	<?php echo $params->get('welcome_message'); ?>
</div>