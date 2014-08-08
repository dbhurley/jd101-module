<?php
/**
 * @package     Joomla.Site
 * @subpackage  Module.mod_smartwelcome
 *
 * @copyright   Copyright (C) 2013 David Hurley. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for Smart Welcome Module
 *
 * @package Joomla.Site
 * @subpackage Module.mod_smartwelcome
 * @since  3.0
 */
class ModSmartWelcomeHelper
{
	public static function show($params)
	{
		$app 	= JFactory::getApplication();
		$secret = $app->getCfg('secret');
		$cookie	= $app->input->cookie->get('JSW_'.$secret);

		if (!$cookie)
		{
			$app->input->cookie->set('JSW_'.$secret, '1');
			return true;
		} elseif ($cookie < $params->get('visit_count', '5'))
		{
			$app->input->cookie->set('JSW_'.$secret, $cookie + 1);
			return true;
		} else 
		{
			return false;
		}
	}
}