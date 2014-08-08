<?php
/**
 * @package     Joomla.Site
 * @subpackage  Module.mod_smartwelcome
 *
 * @copyright   Copyright (C) 2013 David Hurley. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the helper file
require_once __DIR__ . '/helper/helper.php';

$show = ModSmartWelcomeHelper::show($params);

if ($show)
{
	require JModuleHelper::getLayoutPath('mod_smartwelcome', $params->get('layout', 'default'));
}