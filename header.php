<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * xmcontent module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author          Mage Gregory (AKA Mage)
 */
 use Xmf\Module\Helper;

include dirname(dirname(__DIR__)) . '/mainfile.php';
require_once dirname(__DIR__) . '/system/include/functions.php';
XoopsLoad::load('XoopsRequest');
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
$helper = Helper::getHelper('xmcontent');

// Load language files
$helper->loadLanguage('admin');

// Config
$nb_limit = $xoopsModuleConfig['index_perpage'];
$url_logo   = XOOPS_UPLOAD_URL . '/xmcontent/images/';

// Get handler
$contentHandler = xoops_getModuleHandler('xmcontent_content', 'xmcontent');
