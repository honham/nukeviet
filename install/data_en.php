<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 31/05/2010, 00:36
 */

if( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modules' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modules (title, module_file, module_data, module_upload, custom_title, admin_title, set_time, main_file, admin_file, theme, mobile, description, keywords, groups_view, weight, act, admins, rss, gid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)' );
$sth->execute( array('about', 'page', 'about', 'about', 'About', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 1, 1, '', 1, 0) );
$sth->execute( array('news', 'news', 'news', 'news', 'News', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 2, 1, '', 1, 0) );
$sth->execute( array('users', 'users', 'users', 'users', 'users', 'Users', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 3, 1, '', 0, 0) );
$sth->execute( array('contact', 'contact', 'contact', 'contact', 'Contact', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 4, 1, '', 0, 0) );
$sth->execute( array('statistics', 'statistics', 'statistics', 'statistics', 'Statistics', '', NV_CURRENTTIME, 1, 1, '', '', '', 'online, statistics', '2', 5, 1, '', 0, 0) );
$sth->execute( array('voting', 'voting', 'voting', 'voting', 'Voting', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 6, 1, '', 1, 0) );
$sth->execute( array('banners', 'banners', 'banners', 'banners', 'Banners', '', NV_CURRENTTIME, 1, 1 , '', '', '', '', '6', 7, 1, '', 0, 0) );
$sth->execute( array('seek', 'seek', 'seek', 'seek', 'Search', '', NV_CURRENTTIME, 1, 0, '', '', '', '', '6', 8, 1, '', 0, 0) );
$sth->execute( array('menu', 'menu', 'menu', 'menu', 'Menu Site', '', NV_CURRENTTIME, 0, 1, '', '', '', '', '6', 9, 1, '', 0, 0) );
$sth->execute( array('feeds', 'feeds', 'feeds', 'feeds', 'Rss Feeds', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 10, 1, '', 0, 0) );
$sth->execute( array('page', 'page', 'page', 'page', 'Page', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 11, 1, '', 1, 0) );
$sth->execute( array('comment', 'comment', 'comment', 'comment', 'Comment', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 12, 1, '', 0, 0) );
$sth->execute( array('siteterms', 'page', 'siteterms', 'siteterms', 'Terms & Conditions', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 13, 1, '', 1, 0) );
$sth->execute( array('freecontent', 'freecontent', 'freecontent', 'freecontent', 'Freecontent', '', NV_CURRENTTIME, 0, 1, '', '', '', '', '6', 14, 1, '', 0, 0) );

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs (func_id, func_name, alias, func_custom_name, in_module, show_func, in_submenu, subweight, setting) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)' );
$sth->execute( array(1, 'sitemap', 'sitemap', 'Sitemap', 'about', 0, 0, 0, '') );
$sth->execute( array(2, 'main', 'main', 'Main', 'about', 1, 0, 1, '') );
$sth->execute( array(3, 'sitemap', 'sitemap', 'Sitemap', 'news', 0, 0, 0, '') );
$sth->execute( array(5, 'content', 'content', 'Content', 'news', 1, 1, 3, '') );
$sth->execute( array(6, 'detail', 'detail', 'Detail', 'news', 1, 0, 4, '') );
$sth->execute( array(7, 'main', 'main', 'Main', 'news', 1, 0, 5, '') );
$sth->execute( array(9, 'print', 'print', 'Print', 'news', 0, 0, 0, '') );
$sth->execute( array(10, 'rating', 'rating', 'Rating', 'news', 0, 0, 0, '') );
$sth->execute( array(11, 'rss', 'rss', 'Rss', 'news', 1, 1, 1, '') );
$sth->execute( array(12, 'savefile', 'savefile', 'Savefile', 'news', 0, 0, 0, '') );
$sth->execute( array(13, 'search', 'search', 'Search', 'news', 1, 1, 6, '') );
$sth->execute( array(14, 'sendmail', 'sendmail', 'Sendmail', 'news', 0, 0, 0, '') );
$sth->execute( array(15, 'topic', 'topic', 'Topic', 'news', 1, 0, 7, '') );
$sth->execute( array(16, 'viewcat', 'viewcat', 'Viewcat', 'news', 1, 0, 8, '') );
$sth->execute( array(17, 'active', 'active', 'Active', 'users', 1, 1, 8, '') );
$sth->execute( array(18, 'changepass', 'changepass', 'Changepass', 'users', 1, 1, 6, '') );
$sth->execute( array(19, 'editinfo', 'editinfo', 'Editinfo', 'users', 1, 0, 10, '') );
$sth->execute( array(20, 'login', 'login', 'Login', 'users', 1, 1, 2, '') );
$sth->execute( array(21, 'logout', 'logout', 'Logout', 'users', 1, 1, 3, '') );
$sth->execute( array(22, 'lostactivelink', 'lostactivelink', 'Lostactivelink', 'users', 1, 0, 9, '') );
$sth->execute( array(23, 'lostpass', 'lostpass', 'Lostpass', 'users', 1, 1, 5, '') );
$sth->execute( array(24, 'main', 'main', 'Main', 'users', 1, 0, 1, '') );
$sth->execute( array(25, 'openid', 'openid', 'Openid', 'users', 1, 1, 7, '') );
$sth->execute( array(26, 'register', 'register', 'Tegister', 'users', 1, 1, 4, '') );
$sth->execute( array(27, 'main', 'main', 'Main', 'contact', 1, 0, 1, '') );
$sth->execute( array(28, 'allbots', 'allbots', 'Bots', 'statistics', 1, 1, 6, '') );
$sth->execute( array(29, 'allbrowsers', 'allbrowsers', 'Browsers', 'statistics', 1, 1, 4, '') );
$sth->execute( array(30, 'allcountries', 'allcountries', 'countries', 'statistics', 1, 1, 3, '') );
$sth->execute( array(31, 'allos', 'allos', 'OS', 'statistics', 1, 1, 5, '') );
$sth->execute( array(32, 'allreferers', 'allreferers', 'All Referers', 'statistics', 1, 1, 2, '') );
$sth->execute( array(33, 'main', 'main', 'Main', 'statistics', 1, 0, 1, '') );
$sth->execute( array(34, 'referer', 'referer', 'refererg', 'statistics', 1, 0, 7, '') );
$sth->execute( array(35, 'main', 'main', 'Main', 'voting', 1, 0, 1, '') );
$sth->execute( array(36, 'addads', 'addads', 'Addads', 'banners', 1, 0, 1, '') );
$sth->execute( array(37, 'cledit', 'cledit', 'Cledit', 'banners', 0, 0, 0, '') );
$sth->execute( array(38, 'click', 'click', 'Click', 'banners', 0, 0, 0, '') );
$sth->execute( array(39, 'clientinfo', 'clientinfo', 'Clientinfo', 'banners', 1, 0, 2, '') );
$sth->execute( array(40, 'clinfo', 'clinfo', 'Clinfo', 'banners', 0, 0, 0, '') );
$sth->execute( array(41, 'logininfo', 'logininfo', 'Logininfo', 'banners', 0, 0, 0, '') );
$sth->execute( array(42, 'main', 'main', 'Main', 'banners', 1, 0, 3, '') );
$sth->execute( array(43, 'stats', 'stats', 'Stats', 'banners', 1, 0, 4, '') );
$sth->execute( array(44, 'viewmap', 'viewmap', 'Viewmap', 'banners', 0, 0, 0, '') );
$sth->execute( array(46, 'main', 'main', 'Main', 'seek', 1, 0, 1, '') );
$sth->execute( array(47, 'main', 'main', 'Main', 'feeds', 1, 0, 1, '') );
$sth->execute( array(48, 'regroups', 'regroups', 'Register Groups', 'users', 1, 0, 11, '') );
$sth->execute( array(50, 'memberlist', 'memberlist', 'Memberlist', 'users', 1, 1, 12, '') );
$sth->execute( array(51, 'groups', 'groups', 'Groups', 'news', 1, 0, 9, '') );
$sth->execute( array(52, 'tag', 'tag', 'Tag', 'news', 1, 0, 2, '') );
$sth->execute( array(53, 'main', 'main', 'Main', 'page', 1, 0, 1, '') );
$sth->execute( array(54, 'main', 'main', 'main', 'comment', 1, 0, 1, '') );
$sth->execute( array(55, 'post', 'post', 'post', 'comment', 1, 0, 2, '') );
$sth->execute( array(56, 'like', 'like', 'Like', 'comment', 1, 0, 3, '') );
$sth->execute( array(57, 'delete', 'delete', 'Delete', 'comment', 1, 0, 4, '') );
$sth->execute( array(58, 'avatar', 'avatar', 'Avatar', 'users', 1, 0, 13, '') );
$sth->execute( array(59, 'oauth', 'oauth', 'Oauth', 'users', 0, 0, 0, '') );
$sth->execute( array(60, 'sitemap', 'sitemap', 'Sitemap', 'page', 0, 0, 0, '') );
$sth->execute( array(61, 'rss', 'rss', 'Rss', 'page', 0, 0, 0, '') );
$sth->execute( array(62, 'rss', 'rss', 'Rss', 'about', 0, 0, 0, '') );
$sth->execute( array(63, 'changequestion', 'changequestion', 'Change Question', 'users', 1, 1, 14, '') );
$sth->execute( array(64, 'main', 'main', 'Main', 'siteterms', 1, 0, 1, '') );
$sth->execute( array(65, 'rss', 'rss', 'Rss', 'siteterms', 1, 0, 2, '') );
$sth->execute( array(66, 'sitemap', 'sitemap', 'Sitemap', 'siteterms', 0, 0, 0, ''));

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modthemes' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modthemes (func_id, layout, theme) VALUES (?, ?, ?)' );
$sth->execute( array(0, 'left-body-right', 'default') );
$sth->execute( array(2, 'left-body-right', 'default') );
$sth->execute( array(5, 'left-body-right', 'default') );
$sth->execute( array(6, 'left-body-right', 'default') );
$sth->execute( array(7, 'left-body-right', 'default') );
$sth->execute( array(11, 'left-body-right', 'default') );
$sth->execute( array(13, 'left-body-right', 'default') );
$sth->execute( array(15, 'left-body-right', 'default') );
$sth->execute( array(16, 'left-body-right', 'default') );
$sth->execute( array(17, 'left-body-right', 'default') );
$sth->execute( array(18, 'left-body-right', 'default') );
$sth->execute( array(19, 'left-body-right', 'default') );
$sth->execute( array(20, 'left-body-right', 'default') );
$sth->execute( array(21, 'left-body-right', 'default') );
$sth->execute( array(22, 'left-body-right', 'default') );
$sth->execute( array(23, 'left-body-right', 'default') );
$sth->execute( array(24, 'left-body-right', 'default') );
$sth->execute( array(25, 'left-body-right', 'default') );
$sth->execute( array(26, 'left-body-right', 'default') );
$sth->execute( array(27, 'left-body-right', 'default') );
$sth->execute( array(28, 'left-body', 'default') );
$sth->execute( array(29, 'left-body', 'default') );
$sth->execute( array(30, 'left-body', 'default') );
$sth->execute( array(31, 'left-body', 'default') );
$sth->execute( array(32, 'left-body', 'default') );
$sth->execute( array(33, 'left-body', 'default') );
$sth->execute( array(34, 'left-body', 'default') );
$sth->execute( array(36, 'left-body-right', 'default') );
$sth->execute( array(39, 'left-body-right', 'default') );
$sth->execute( array(42, 'left-body-right', 'default') );
$sth->execute( array(43, 'left-body-right', 'default') );
$sth->execute( array(46, 'left-body-right', 'default') );
$sth->execute( array(47, 'left-body-right', 'default') );
$sth->execute( array(48, 'left-body-right', 'default') );
$sth->execute( array(35, 'left-body-right', 'default') );
$sth->execute( array(50, 'left-body-right', 'default') );
$sth->execute( array(51, 'left-body-right', 'default') );
$sth->execute( array(52, 'left-body-right', 'default') );
$sth->execute( array(53, 'body', 'default') );
$sth->execute( array(54, 'left-body-right', 'default') );
$sth->execute( array(55, 'left-body-right', 'default') );
$sth->execute( array(56, 'left-body-right', 'default') );
$sth->execute( array(57, 'left-body-right', 'default') );
$sth->execute( array(58, 'left-body-right', 'default') );
$sth->execute( array(63, 'left-body-right', 'default') );
$sth->execute( array(64, 'left-body-right', 'default') );
$sth->execute( array(65, 'left-body-right', 'default') );

$sth->execute( array(0, 'body', 'mobile_default') );
$sth->execute( array(2, 'body', 'mobile_default') );
$sth->execute( array(5, 'body', 'mobile_default') );
$sth->execute( array(6, 'body', 'mobile_default') );
$sth->execute( array(7, 'body', 'mobile_default') );
$sth->execute( array(13, 'body', 'mobile_default') );
$sth->execute( array(15, 'body', 'mobile_default') );
$sth->execute( array(16, 'body', 'mobile_default') );
$sth->execute( array(17, 'body', 'mobile_default') );
$sth->execute( array(18, 'body', 'mobile_default') );
$sth->execute( array(19, 'body', 'mobile_default') );
$sth->execute( array(20, 'body', 'mobile_default') );
$sth->execute( array(21, 'body', 'mobile_default') );
$sth->execute( array(22, 'body', 'mobile_default') );
$sth->execute( array(23, 'body', 'mobile_default') );
$sth->execute( array(24, 'body', 'mobile_default') );
$sth->execute( array(25, 'body', 'mobile_default') );
$sth->execute( array(26, 'body', 'mobile_default') );
$sth->execute( array(27, 'body', 'mobile_default') );
$sth->execute( array(28, 'body', 'mobile_default') );
$sth->execute( array(29, 'body', 'mobile_default') );
$sth->execute( array(30, 'body', 'mobile_default') );
$sth->execute( array(31, 'body', 'mobile_default') );
$sth->execute( array(32, 'body', 'mobile_default') );
$sth->execute( array(33, 'body', 'mobile_default') );
$sth->execute( array(34, 'body', 'mobile_default') );
$sth->execute( array(35, 'body', 'mobile_default') );
$sth->execute( array(36, 'body', 'mobile_default') );
$sth->execute( array(39, 'body', 'mobile_default') );
$sth->execute( array(42, 'body', 'mobile_default') );
$sth->execute( array(43, 'body', 'mobile_default') );
$sth->execute( array(46, 'body', 'mobile_default') );
$sth->execute( array(47, 'body', 'mobile_default') );
$sth->execute( array(48, 'body', 'mobile_default') );
$sth->execute( array(50, 'body', 'mobile_default') );
$sth->execute( array(51, 'body', 'mobile_default') );
$sth->execute( array(52, 'body', 'mobile_default') );
$sth->execute( array(53, 'body', 'mobile_default') );
$sth->execute( array(54, 'body', 'mobile_default') );
$sth->execute( array(55, 'body', 'mobile_default') );
$sth->execute( array(56, 'body', 'mobile_default') );
$sth->execute( array(57, 'body', 'mobile_default') );
$sth->execute( array(63, 'body', 'mobile_default') );
$sth->execute( array(64, 'body', 'mobile_default') );
$sth->execute( array(65, 'body', 'mobile_default') );

$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups' );
$sth = $db->prepare( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups (bid, theme, module, file_name, title, link, template, position, exp_time, active, hide_device, groups_view, all_func, weight, config) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)' );
$sth->execute( array(1, 'default', 'news', 'global.block_category.php', 'category', '', 'no_title', '[LEFT]', 0, 1, 0, '6', 1, 1, 'a:2:{s:5:"catid";i:0;s:12:"title_length";i:25;}') );
$sth->execute( array(2, 'default', 'statistics', 'global.counter_button.php', 'Online button', '', 'no_title', '[QR_CODE]', 0, 1, 0, '6', 1, 2, '') );
$sth->execute( array(3, 'default', 'banners', 'global.banners.php', 'Left Banner', '', 'no_title', '[LEFT]', 0, 1, 0, '6', 1, 3, 'a:1:{s:12:"idplanbanner";i:2;}') );
$sth->execute( array(4, 'default', 'about', 'global.about.php', 'About', '', 'border', '[RIGHT]', 0, 1, 0, '6', 1, 1, '') );
$sth->execute( array(5, 'default', 'users', 'global.user_button.php', 'Login site', '', 'no_title', '[PERSONALAREA]', 0, 1, 0, '6', 1, 1, '') );
$sth->execute( array(6, 'default', 'voting', 'global.voting_random.php', 'voting', '', 'primary', '[RIGHT]', 0, 1, 0, '6', 1, 3, '') );
$sth->execute( array(7, 'default', 'news', 'module.block_newscenter.php', 'News', '', 'no_title', '[TOP]', 0, 1, 0, '6', 0, 1, 'a:5:{s:11:"showtooltip";i:1;s:16:"tooltip_position";s:6:"bottom";s:14:"tooltip_length";s:3:"150";s:5:"width";s:3:"400";s:6:"height";s:0:"";}') );
$sth->execute( array(8, 'default', 'banners', 'global.banners.php', 'Center Banner', '', 'no_title', '[TOP]', 0, 1, 0, '6', 1, 2, 'a:1:{s:12:"idplanbanner";i:1;}') );
$sth->execute( array(9, 'default', 'theme', 'global.company_info.php', 'Company Info', '', 'simple', '[COMPANY_INFO]', 0, 1, 0, '6', 1, 1, 'a:11:{s:12:"company_name";s:58:"Công ty cổ phần phát triển nguồn mở Việt Nam";s:16:"company_sortname";s:12:"VINADES.,JSC";s:15:"company_regcode";s:0:"";s:16:"company_regplace";s:0:"";s:21:"company_licensenumber";s:0:"";s:22:"company_responsibility";s:0:"";s:15:"company_address";s:72:"Phòng 2004 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội";s:13:"company_phone";s:14:"+84-4-85872007";s:11:"company_fax";s:14:"+84-4-35500914";s:13:"company_email";s:18:"contact@vinades.vn";s:15:"company_website";s:17:"http://vinades.vn";}') );
$sth->execute( array(10, 'default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[QR_CODE]', 0, 1, 0, '6', 1, 1, 'a:3:{s:5:"level";s:1:"M";s:15:"pixel_per_point";i:4;s:11:"outer_frame";i:1;}') );
$sth->execute( array(17, 'default', 'menu', 'global.bootstrap.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, 1, 0, '6', 1, 1, 'a:2:{s:6:"menuid";i:1;s:12:"title_length";i:20;}') );
$sth->execute( array(18, 'default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[CONTACT_DEFAULT]', 0, 1, 0, '6', 1, 1, '') );
$sth->execute( array(19, 'default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, 1, 0, '6', 1, 1, 'a:5:{s:12:"copyright_by";s:0:"";s:13:"copyright_url";s:0:"";s:9:"design_by";s:12:"VINADES.,JSC";s:10:"design_url";s:18:"http://vinades.vn/";s:13:"siteterms_url";s:'. ( 38 + strlen( NV_BASE_SITEURL ) ).':"' . NV_BASE_SITEURL . 'index.php?language=' . $lang_data . '&amp;nv=siteterms";}') );
$sth->execute( array(21, 'default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, 1, 0, '6', 1, 1, 'a:4:{s:8:"facebook";s:32:"http://www.facebook.com/nukeviet";s:11:"google_plus";s:32:"https://www.google.com/+nukeviet";s:7:"youtube";s:37:"https://www.youtube.com/user/nukeviet";s:7:"twitter";s:28:"https://twitter.com/nukeviet";}') );
$sth->execute( array(22, 'default', 'theme', 'global.menu_footer.php', 'Main categories', '', 'simple', '[MENU_FOOTER]', 0, 1, 0, '6', 1, 1, 'a:1:{s:14:"module_in_menu";a:8:{i:0;s:5:"about";i:1;s:4:"news";i:2;s:5:"users";i:3;s:7:"contact";i:4;s:6:"voting";i:5;s:7:"banners";i:6;s:4:"seek";i:7;s:5:"feeds";}}') );
$sth->execute( array(24, 'default', 'freecontent', 'global.free_content.php', 'Product', '', 'no_title', '[FEATURED_PRODUCT]', 0, 1, 0, '6', 1, 1, 'a:2:{s:7:"blockid";i:1;s:7:"numrows";i:2;}') );
$sth->execute( array(20, 'mobile_default', 'menu', 'global.metismenu.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, 1, 0, '6', 1, 1, 'a:2:{s:6:"menuid";i:1;s:12:"title_length";i:0;}') );
$sth->execute( array(23, 'mobile_default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, 1, 0, '6', 1, 1, 'a:5:{s:12:"copyright_by";s:0:"";s:13:"copyright_url";s:0:"";s:9:"design_by";s:12:"VINADES.,JSC";s:10:"design_url";s:18:"http://vinades.vn/";s:13:"siteterms_url";s:35:"/index.php?language=en&nv=siteterms";}') );
$sth->execute( array(25, 'mobile_default', 'users', 'global.user_button.php', 'Sign In', '', 'no_title', '[MENU_SITE]', 0, 1, 0, '6', 1, 1, '') );
$sth->execute( array(26, 'mobile_default', 'theme', 'global.menu_footer.php', 'Categories', '', 'primary', '[MENU_FOOTER]', 0, 1, 0, '6', 1, 1, 'a:1:{s:14:"module_in_menu";a:9:{i:0;s:5:"about";i:1;s:4:"news";i:2;s:5:"users";i:3;s:7:"contact";i:4;s:6:"voting";i:5;s:7:"banners";i:6;s:4:"seek";i:7;s:5:"feeds";i:8;s:9:"siteterms";}}') );
$sth->execute( array(27, 'mobile_default', 'theme', 'global.company_info.php', 'Company Info', '', 'primary', '[COMPANY_INFO]', 0, 1, 0, '6', 1, 1, 'a:11:{s:12:"company_name";s:58:"Công ty cổ phần phát triển nguồn mở Việt Nam";s:16:"company_sortname";s:12:"VINADES.,JSC";s:15:"company_regcode";s:0:"";s:16:"company_regplace";s:0:"";s:21:"company_licensenumber";s:0:"";s:22:"company_responsibility";s:0:"";s:15:"company_address";s:72:"Phòng 2004 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội";s:13:"company_phone";s:14:"+84-4-85872007";s:11:"company_fax";s:14:"+84-4-35500914";s:13:"company_email";s:18:"contact@vinades.vn";s:15:"company_website";s:17:"http://vinades.vn";}') );
$sth->execute( array(28, 'mobile_default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[SOCIAL_ICONS]', 0, 1, 0, '6', 1, 1, '') );
$sth->execute( array(29, 'mobile_default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, 1, 0, '6', 1, 2, 'a:4:{s:8:"facebook";s:32:"http://www.facebook.com/nukeviet";s:11:"google_plus";s:32:"https://www.google.com/+nukeviet";s:7:"youtube";s:37:"https://www.youtube.com/user/nukeviet";s:7:"twitter";s:28:"https://twitter.com/nukeviet";}') );
$sth->execute( array(30, 'mobile_default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[SOCIAL_ICONS]', 0, 1, 0, '6', 1, 3, 'a:3:{s:5:"level";s:1:"L";s:15:"pixel_per_point";i:4;s:11:"outer_frame";i:1;}') );

//
// Thiết lập Block
$db->query( 'TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_weight' );

$array_funcid = array();
$array_funcid_mod = array();
$array_weight_block = array();

$func_result = $db->query( 'SELECT func_id, func_name, in_module FROM ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs WHERE show_func = 1 ORDER BY in_module ASC, subweight ASC' );
while( list( $func_id_i, $func_name, $in_module ) = $func_result->fetch( 3 ) )
{
	$array_funcid[] = $func_id_i;
	$array_funcid_mod[$in_module][$func_name] = $func_id_i;
}

$func_result = $db->query( 'SELECT * FROM ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups ORDER BY theme ASC, position ASC, weight ASC' );
while( $row = $func_result->fetch() )
{
	if( $row['all_func']==1 )
	{
		$array_funcid_i = $array_funcid;
	}
	else
	{
		$array_funcid_i = $array_funcid_mod[$row['module']];

		$xml = simplexml_load_file( NV_ROOTDIR . '/themes/' . $row['theme'] . '/config.ini' );
		$blocks = $xml->xpath( 'setblocks/block' );
		for( $i = 0, $count = sizeof( $blocks ); $i < $count; ++$i )
		{
			$rowini = (array)$blocks[$i];
			if( $rowini['module'] == $row['module'] AND $rowini['file_name'] == $row['file_name'] )
			{
				$array_funcid_i = array();
				if( ! is_array( $rowini['funcs'] ) )
				{
					$rowini['funcs'] = array( $rowini['funcs'] );
				}
				foreach( $rowini['funcs'] as $_funcs_list )
				{
					list( $mod, $func_list ) = explode( ':', $_funcs_list );
					$func_array = explode( ',', $func_list );
					foreach( $func_array as $_func )
					{
						if( isset( $array_funcid_mod[$row['module']][$_func] ))
						{
							$array_funcid_i[] = $array_funcid_mod[$row['module']][$_func];
						}
					}
				}
				break;
			}
		}
	}

	foreach( $array_funcid_i as $func_id )
	{
		if( isset($array_weight_block[$row['theme']][$row['position']][$func_id]) )
		{
			$weight = $array_weight_block[$row['theme']][$row['position']][$func_id] + 1;
		}
		else
		{
			$weight = 1;
		}
		$array_weight_block[$row['theme']][$row['position']][$func_id] = $weight;

		$db->query( 'INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_weight (bid, func_id, weight) VALUES (' . $row['bid'] . ', ' . $func_id . ', ' . $weight . ')' );
	}
}

$disable_site_content = 'For technical reasons Web site temporary not available. we are very sorry for that inconvenience!';

$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = " . $db->quote( $disable_site_content ) . " WHERE module = 'global' AND config_name = 'disable_site_content' AND lang='" . $lang_data . "'" );

$array_cron_name = array();
$array_cron_name['cron_online_expired_del'] = 'Delete expired online status';
$array_cron_name['cron_dump_autobackup'] = 'Automatic backup database';
$array_cron_name['cron_auto_del_temp_download'] = 'Empty temporary files';
$array_cron_name['cron_del_ip_logs'] = 'Delete IP log files';
$array_cron_name['cron_auto_del_error_log'] = 'Delete expired error_log log files';
$array_cron_name['cron_auto_sendmail_error_log'] = 'Send error logs to admin';
$array_cron_name['cron_ref_expired_del'] = 'Delete expired referer';
$array_cron_name['cron_siteDiagnostic_update'] = 'Update site diagnostic';
$array_cron_name['cron_auto_check_version'] = 'Check NukeViet version';
$array_cron_name['cron_notification_autodel'] = 'Delete old notification';

$result = $db->query( "SELECT id, run_func FROM " . $db_config['prefix'] . "_cronjobs ORDER BY id ASC" );
while( list( $id, $run_func ) = $result->fetch( 3 ) )
{
	$cron_name = ( isset( $array_cron_name[$run_func] ) ) ? $array_cron_name[$run_func] : $run_func;
	$db->query( 'UPDATE ' . $db_config['prefix'] . '_cronjobs SET ' . $lang_data . '_cron_name = ' . $db->quote( $cron_name ) . ' WHERE id=' . $id );
}

$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = '" . $global_config['site_theme'] . "' WHERE lang = 'vi' AND module = 'global' AND config_name = 'site_theme'" );

$result = $db->query( "SELECT COUNT(*) FROM " . $db_config['prefix'] . "_" . $lang_data . "_modules where title='" . $global_config['site_home_module'] . "'" );
if( $result->fetchColumn() )
{
	$db->query( "UPDATE " . $db_config['prefix'] . "_config SET config_value = '" . $global_config['site_home_module'] . "' WHERE module = 'global' AND config_name = 'site_home_module' AND lang='" . $lang_data . "'" );
}

$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu (id, title) VALUES (1, 'Top Menu')");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (1, 0, 1, 'About', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=about', '', '', 1, 1, 0, '2,3', '6', 'about', '', 1, '', 1, 1)" );
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (4, 0, 1, 'News', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news', '', '', 2, 4, 0, '5,6,7,8,30,31,32', '6', 'news', '', 1, '', 1, 1)" );
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (9, 0, 1, 'Users', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users', '', '', 3, 12, 0, '10,11,12,13,14,15,16', '6', 'users', '', 1, '', 1, 1)" );
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (10, 9, 1, 'Login', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users&op=login', '', '', 1, 13, 1, '', '5', 'users', 'login', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (11, 9, 1, 'Logout', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users&op=logout', '', '', 2, 14, 1, '', '4', 'users', 'logout', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (12, 9, 1, 'Register', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users&op=register', '', '', 3, 15, 1, '', '5', 'users', 'register', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (13, 9, 1, 'Lostpass', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users&op=lostpass', '', '', 4, 16, 1, '', '5', 'users', 'lostpass', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (14, 9, 1, 'Changepass', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users&op=changepass', '', '', 5, 17, 1, '', '4', 'users', 'changepass', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (15, 9, 1, 'Openid', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users&op=openid', '', '', 6, 18, 1, '', '4', 'users', 'openid', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (16, 9, 1, 'Memberlist', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users&op=memberlist', '', '', 7, 19, 1, '', '4', 'users', 'memberlist', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (17, 0, 1, 'Contact', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=contact', '', '', 7, 28, 0, '18', '6', 'contact', '', 1, '', 1, 1)" );
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (19, 0, 1, 'Statistics', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=statistics', '', '', 4, 20, 0, '20,21,22,23,24', '2', 'statistics', '', 1, '', 1, 1)" );
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (20, 19, 1, 'Referers', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=statistics&amp;op=allreferers', '', '', 1, 21, 1, '', '2', 'statistics', 'allreferers', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (21, 19, 1, 'Countries', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=statistics&amp;op=allcountries', '', '', 2, 22, 1, '', '2', 'statistics', 'allcountries', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (22, 19, 1, 'Browsers', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=statistics&amp;op=allbrowsers', '', '', 3, 23, 1, '', '2', 'statistics', 'allbrowsers', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (23, 19, 1, 'OS', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=statistics&amp;op=allos', '', '', 4, 24, 1, '', '2', 'statistics', 'allos', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (24, 19, 1, 'Bots', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=statistics&amp;op=allbots', '', '', 5, 25, 1, '', '2', 'statistics', 'allbots', 1, '', 1, 1) ");
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (25, 0, 1, 'Voting', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=voting', '', '', 5, 26, 0, '', '6', 'voting', '', 1, '', 1, 1)" );
$result = $db->query( "INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES (27, 0, 1, 'Search', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=seek', '', '', 6, 27, 0, '', '6', 'seek', '', 1, '', 1, 1) ");