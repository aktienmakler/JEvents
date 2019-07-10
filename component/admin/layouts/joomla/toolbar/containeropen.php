<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
$registry = JRegistry::getInstance('yoursites');
$registry->set("toolbarid" , $displayData['id']);

if ($displayData['id'] == "toolbar" || $displayData['id'] == "toolbar2")
{
    return;
	?>
<div class="btn-toolbar" role="toolbar" aria-label="<?php echo JText::_('JTOOLBAR'); ?>"
     id="<?php echo $displayData['id']; ?>">
	<?php
}
else
{
	?>
    <div class="nav-collapse collapse">
    <div class="nav" aria-label="<?php echo JText::_('JTOOLBAR'); ?>"  id="<?php echo $displayData['id']; ?>">
<?php
}