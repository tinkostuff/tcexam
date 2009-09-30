<?php
//============================================================+
// File name   : tce_config.php
// Begin       : 2001-09-02
// Last Update : 2009-09-30
// 
// Description : Configuration file for administration section.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com S.r.l.
//               Via della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//
// License: 
//    Copyright (C) 2004-2009  Nicola Asuni - Tecnick.com S.r.l.
//    
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//    
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//    
//    You should have received a copy of the GNU General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
//     
//    Additionally, you can't remove the original TCExam logo, copyrights statements
//    and links to Tecnick.com and TCExam websites.
//    
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * Configuration file for administration section.
 * @package com.tecnick.tcexam.admin
 * @author Nicola Asuni
 * @copyright Copyright &copy; 2004-2009, Nicola Asuni - Tecnick.com S.r.l. - ITALY - www.tecnick.com - info@tecnick.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link www.tecnick.com
 * @since 2001-09-02
 */

/**
 */

// -- INCLUDE files -- 
require_once('../config/tce_auth.php');
require_once('../../shared/config/tce_config.php');

// -- Options / COSTANTS --

/**
 * max memory limit
 */
define ('K_MAX_MEMORY_LIMIT', '512M');

/**
 * max number of rows to display in tables
 */
define ('K_MAX_ROWS_PER_PAGE', 50);

/**
 * max size to be uploaded in bytes
 */
define ('K_MAX_UPLOAD_SIZE', 10000000);

// -- DEFAULT META and BODY Tags --

/**
 * TCExam title
 */
define ('K_TCEXAM_TITLE', 'TCExam');

/**
 * TCExam description
 */
define ('K_TCEXAM_DESCRIPTION', 'TCExam by Tecnick.com');

/**
 * TCExam Author
 */
define ('K_TCEXAM_AUTHOR', 'Nicola Asuni - Tecnick.com s.r.l.');

/**
 * reply-to meta tag
 */
define ('K_TCEXAM_REPLY_TO', '');

/**
 * default html meta keywords
 */
define ('K_TCEXAM_KEYWORDS', 'TCExam, eExam, e-exam, web, exam');

/**
 * relative path to html icon
 */
define ('K_TCEXAM_ICON', '../../favicon.ico');

/**
 * full path to CSS stylesheet
 */
define ('K_TCEXAM_STYLE', K_PATH_STYLE_SHEETS.'default.css');

/**
 * full path to CSS stylesheet for RTL languages
 */
define ('K_TCEXAM_STYLE_RTL', K_PATH_STYLE_SHEETS.'default_rtl.css');

/**
 * full path to CSS stylesheet for help file
 */
define ('K_TCEXAM_HELP_STYLE', K_PATH_STYLE_SHEETS.'help.css');

/**
 * if true display admin clock in UTC (GMT)
 */
define ('K_CLOCK_IN_UTC', false);

/**
 * max number of chars to display on a selection box
 */
define ('K_SELECT_SUBSTRING', 40);

/**
 * if true display an additional button to print only the TEXT answers on all users' results 
 */
define ('K_DISPLAY_PDFTEXT_BUTTON', false);

/**
 * name of the option to import questions using a custom format (file: admin/code/tce_import_custom.php)
 */
define ('K_ENABLE_CUSTOM_IMPORT', 'Custom XML format');

/**
 * name of the button to export results in custom format (file: admin/code/tce_export_custom.php)
 */
define ('K_ENABLE_CUSTOM_EXPORT', 'CUSTOM');

// -- INCLUDE files -- 
require_once('../../shared/config/tce_db_config.php');
require_once('../../shared/code/tce_db_connect.php');
require_once('../../shared/code/tce_functions_general.php');

ini_set('memory_limit', K_MAX_MEMORY_LIMIT); // set PHPmemory limit
ini_set('upload_max_filesize', K_MAX_UPLOAD_SIZE); // set max upload size
ini_set('post_max_size', K_MAX_UPLOAD_SIZE); // set max post size
ini_set('session.use_trans_sid', 0); // if =1 use PHPSESSID 

//============================================================+
// END OF FILE                                                 
//============================================================+
?>
