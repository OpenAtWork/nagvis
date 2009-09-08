<?PHP
/*****************************************************************************
 *
 * index.php - Main page of NagVis
 *
 * Copyright (c) 2004-2009 NagVis Project (Contact: info@nagvis.org)
 *
 * License:
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2 as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 *
 *****************************************************************************/

// Include global defines
require('../../server/core/defines/global.php');
require('../../server/core/defines/matches.php');

// Include frontend related defines
require('defines/nagvis-js.php');

// Include functions
require('../../server/core/functions/autoload.php');
require('../../server/core/functions/debug.php');
require("../../server/core/functions/getuser.php");
require('../../server/core/functions/oldPhpVersionFixes.php');

// This defines whether the GlobalFrontendMessage prints HTML or ajax error messages
define('CONST_AJAX' , FALSE);

$controller = new GlobalController();

if (!$controller->isValid()) {
	new GlobalFrontendMessage('ERROR', $controller->getMessage());
}
?>