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
$route['default_controller'] = 'welcome';
$route['welcome_page'] = 'welcome/welcome_page';
$route['home'] = 'welcome/home';
$route['admin'] = 'admin/addplace';
$route['touristplace'] = 'welcome/touristplace';
$route['admin']='admin/adminSignUp';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['adminpanel']='admin/adminSignUp';
$route['manageuser']='admin/manageuser';
$route['usersignup']='user/usersignup';
$route['adminsignup']='admin/adminSignUp';
$route['touristplace']='admin/touristplace';
$route['addplace']='admin/addplace';
$route['editplace/(:num)']='place_controller/edit/1';
$route['deploy']='admin/deploy';
$route['newdeploy']='admin/newdeploy';
$route['add_deploy']='admin/add_deploy';
$route['admin/edit_deploy/add_deploy']='admin/add_deploy';
$route['security_service']='user/add_security_service';
$route['search_places']='user/search_places';
$route['manage_officers']='Manage_Officers_CI/manage_officers';
$route['add_officer']='Manage_Officers_CI/add_officer';
$route['search_officers']='user/search_officers';
$route['touristArea']='user/touristArea';
$route['user_login']='user/user_login';
$route['user_logout']='user/user_logout';
$route['admin_signin']='admin/admin_signin';
$route['hotelmanage']='hotel_admin/addhotel';
$route['insert_hotel']='hotel_admin/insert_hotel';
//$route['edit_hotel']='hotel_admin/edit_hotel';
$route['edit_hotel/(:num)']='hotel_admin/edit_hotel';
$route['delete/(:num)']='hotel_admin/delete';
$route['user_hotel_controller']='user_hotel_controller/index';






