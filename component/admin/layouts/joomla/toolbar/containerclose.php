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
$toolbarid = $registry->get("toolbarid" , "");
if ($toolbarid == "toolbar" || $toolbarid == "toolbar2" )
{
    return;
	?>
    </div>
	<?php
}
else
{
	?>
    </div>
    </div>
	<?php
}