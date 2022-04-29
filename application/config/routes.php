<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']  	= 'homeController';
$route['admin']                 = 'adminController/admin';
$route['userList']              = 'adminController/userList';

$route['index']              	= 'homeController/index';
$route['registration']        	= 'homeController/registration';
$route['login']               	= 'homeController/login';
$route['community']           	= 'homeController/community';
$route['profile']             	= 'homeController/profile';
$route['edit_profile']        	= 'homeController/edit_profile';
$route['update_profile']      	= 'homeController/update_profile';
$route['form_validation']      	= 'homeController/form_validation';


$route['edit_image']          	= 'homeController/edit_image';
$route['update_image']          = 'homeController/update_image';
$route['settings']       	    = 'homeController/settings';

$route['edit_password']       	= 'homeController/edit_password';
$route['create_event']          = 'homeController/create_event';
$route['event_submit']          = 'homeController/event_submit';
$route['event_details/(:num)']  = 'homeController/event_details/$1';
$route['search_event']          = 'homeController/search_event';
$route['submit_search']         = 'homeController/submit_search';


$route['submit_registration'] 	= 'homeController/submit_registration';
$route['submit_login']        	= 'homeController/submit_login';
$route['admin_login']        	= 'adminController/admin_login';


$route['logout']        		= 'homeController/logout';
$route['create_post'] 	        = 'homeController/create_post';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



