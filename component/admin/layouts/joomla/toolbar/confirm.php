<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

JHtml::_('behavior.core');

$class      = $displayData['class'];
$btnClass   = isset($displayData['btnClass']) ? $displayData['btnClass'] : "";
$text       = $displayData['text'];
$doTask     = $displayData['doTask'];
$dataTarget = isset($displayData['data-target']) ? $displayData['data-target'] : "";

if (!empty($dataTarget))
{
	$dataTarget = " data-target='#" . $dataTarget . "' data-toggle='modal' ";
}
?>
<button onclick="<?php echo $doTask; ?>" class="<?php echo $btnClass; ?>" <?php echo $dataTarget;?> >
    <span class="<?php echo $class; ?>" aria-hidden="true"></span>
	<?php echo $text; ?>
</button>