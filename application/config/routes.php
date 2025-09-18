<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'Error_Controller';
$route['translate_uri_dashes'] = FALSE;

// ================= Pages ================= //
$route['aboutus']     = 'PagesControllers/aboutus';
$route['allcourse']   = 'PagesControllers/allcourse';
$route['blog']        = 'PagesControllers/blog';
$route['contactus']   = 'PagesControllers/contactus';
$route['event']       = 'PagesControllers/event';
$route['gallery']     = 'PagesControllers/gallery';
$route['instructor']  = 'PagesControllers/instructor';
$route['joinNow']     = 'PagesControllers/joinNow';
$route['organizer']   = 'PagesControllers/organizer';
$route['page_not_found'] = 'PagesControllers/page_not_found';
$route['result']      = 'PagesControllers/result';

// ================= Courses ================= //
$route['category1'] = 'PagesControllers/course_one';
$route['category2'] = 'PagesControllers/course_two';
$route['category3'] = 'PagesControllers/course_three';
$route['category4'] = 'PagesControllers/course_four';
$route['category5'] = 'PagesControllers/course_five';
$route['category6'] = 'PagesControllers/course_six';
$route['category7'] = 'PagesControllers/course_seven';
$route['category8'] = 'PagesControllers/course_eight';
$route['category9'] = 'PagesControllers/course_nine';

// ================= Developer Login & Dashboard ================= //
$route['developer']             = 'PagesControllers/developer';
$route['developer_dashboard']   = 'DeveloperController/developerDashboard';
$route['developer_profile']     = 'DeveloperController/developerProfile';
$route['developer_setting']     = 'DeveloperController/developerSetting';
$route['developer_enrollAdmin'] = 'DeveloperController/createAdmin';

// ================= Auth ================= //
$route['developerAuth']   = 'DeveloperController/developerAuth';
$route['developerLogout'] = 'DeveloperController/devLogout';
