<?php
/**
 * Exposition Galllery Module Entry Point
 * 
 * @package    PASTMI.ExpositionGallery
 * @subpackage Modules
 * @license    MIT
 * mod_exposition_gallery is free software.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

require JModuleHelper::getLayoutPath('mod_exposition_gallery');