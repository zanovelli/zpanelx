<?php

/**
 *
 * ZPanel - A Cross-Platform Open-Source Web Hosting Control panel.
 * 
 * @package ZPanel
 * @version $Id$
 * @author Bobby Allen - ballen@zpanelcp.com
 * @copyright (c) 2008-2011 ZPanel Group - http://www.zpanelcp.com/
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License v3
 *
 * This program (ZPanel) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
 
class module_controller {

	function getZpanelUpdates() {
    	$updateurl = ctrl_options::GetOption('update_url') . "?sv=" . ctrl_options::GetOption('dbversion') . "";
    	$handle = @file_get_contents($updateurl);
    	$content = $handle;
    	if ($content == '') {
        	$content = "Unable to connect to the ZPanel Version Checker Service at this time.";
    	} else {
        	$content = "<iframe allowtransparency=\"\" src=\"".$updateurl."\" frameborder=\"0\" width=\"100%\" height=\"300\"></iframe>";
    	}
    return $content;
	}
}

?>