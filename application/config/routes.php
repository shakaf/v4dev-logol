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
$route['default_controller'] 					        = 'login';
$route['login-attempt']['POST'] 				        = 'login/setCallBackDoLogin';
$route['logout']['GET'] 	        			        = 'login/doLogout';
$route['set-register']['POST'] 					        = 'register/setRegister';
$route['forgot-password']['POST'] 				        = 'forgot/doForgotPassword';
$route['forgot-new-password']['GET'] 			        = 'forgot/newPassword';
$route['forgot-new-password/(:any)']['GET']		        = 'forgot/newPassword/$1';
$route['set-new-password/(:any)']['POST'] 		        = 'forgot/doNewPassword/$1';
/*
 * after login 
 */
$route['new-registrant']['GET']                         = 'customer/newRegistrant';
$route['my-company-profile']['GET']                     = 'profile/getCompanyProfile';
$route['welcome-registrant-profile']['POST']            = 'profile/getWelcomeRegistrantProfile';
$route['my-company-info-edit']['POST']                  = 'profile/getCompanyProfileInfoEdit';
$route['my-company-profile-edit-post']['POST']          = 'profile/setCallBackProfileInfoEditPost';
$route['my-company-change-photo']['POST']               = 'profile/getCompanyChangePhoto';
$route['my-company-address-info']['POST']               = 'profile/getCompanyAddressInfo';
$route['my-company-billing-info']['POST']               = 'profile/getCompanyBillingInfo';
$route['my-company-profile-user-store']['POST']         = 'profile/setCallBackProfileUserStore';
$route['my-company-delete-onbehalf']['POST']            = 'profile/setCallBackDeleteOnBehalf';
$route['my-company-edit-onbehalf']['POST']              = 'profile/setCallBackEditOnBehalf';
$route['my-company-edit-onbehalf-store']['POST']        = 'profile/setCallBackEditOnBehalfStore';
$route['my-company-photo-profile']['POST']              = 'profile/setCallBackCompanyPhotoProfile';
$route['my-company-delete-driver']['POST']              = 'profile/setCallBackDeleteDriver';
$route['my-company-edit-driver']['POST']                = 'profile/setCallBackEditDriver';
$route['my-company-edit-driver-store']['POST']          = 'profile/setCallBackEditDriverStore';
$route['my-company-delete-vehicle']['POST']             = 'profile/setCallBackDeleteVehicle';
$route['my-company-edit-vehicle']['POST']               = 'profile/setCallBackEditVehicle';
$route['my-company-edit-vecicle-store']['POST']         = 'profile/setCallBackEditVehicleStore';
$route['my-company-delete-onbehalf-customer']['POST']             = 'profile/setCallBackDeleteOnBehalfCustomer';
$route['my-company-edit-onbehalf-customer']['POST']               = 'profile/setCallBackEditOnBehalfCustomer';
$route['my-company-edit-onbehalf-customer-store']['POST']         = 'profile/setCallBackEditOnBehalfCustomerStore';
$route['my-company-delete-factory']['POST']             = 'profile/setCallBackDeleteFactory';
$route['my-company-edit-factory']['POST']               = 'profile/setCallBackEditFactory';
$route['my-company-edit-factory-store']['POST']         = 'profile/setCallBackEditFactoryStore';
$route['my-company-delete-garage']['POST']             = 'profile/setCallBackDeleteGarage';
$route['my-company-edit-garage']['POST']               = 'profile/setCallBackEditGarage';
$route['my-company-edit-garage-store']['POST']         = 'profile/setCallBackEditGarageStore';
$route['my-company-additional-stamp']['POST']           = 'profile/setCallBackAdditionalStamp';
$route['my-company-delete-digistamp']['POST']           = 'profile/setCallBackDeleteStamp';



$route['my-order']['GET']                 		        = 'order/allOrder';
$route['order-list/(:any)']['POST']                 	= 'order/contentOrder/$1';
$route['order-request/(:any)']['POST']                 	= 'order/orderRequest/$1';

$route['create-order']['GET']                 	        = 'order';
$route['create-order-depo']['GET']                      = 'order/depoRequest';
$route['create-order-depo/(:any)']['GET']               = 'order/depoRequest/$1';
$route['create-order-depo-cart']['GET']                 = 'order/depoCart';
$route['create-order-depo-cart/(:any)']['GET']          = 'order/depoCart/$1';
$route['create-order-gatepass']['GET']   		        = 'order/gatepassRequest';
$route['create-order-gatepass/(:any)']['GET']           = 'order/gatepassRequest/$1';
$route['create-order-gatepass-cart']['GET']             = 'order/gatepassCart';
$route['create-order-gatepass-cart/(:any)']['GET']      = 'order/gatepassCart/$1';

#$route['all-order']['GET']                      = 'order/allOrder';
#$route['detail-order']['GET']                   = 'order/detailOrder';

$route['set-rating']['POST']      				        = 'profile/setRating';
$route['e-gatepass']['GET']                             = 'home/getEGatepass';
$route['e-depo']['GET']                                 = 'home/getEDepo';
$route['e-depo-admin']['GET']                           = 'home/getEDepo';
$route['cart']['GET']                                   = 'home/getCart';
$route['payment']['GET']                                = 'home/getPay';
$route['payment-va/(:any)']['GET']                      = 'home/getPaymentVA/$1';
$route['payment-detail']['GET']                         = 'home/getPayDetail';
$route['payment-finance']['GET']                        = 'home/getPayFinance';
$route['payment-confirmation']['GET']                   = 'home/getPayConf';
$route['vessel-schedule']['GET']                        = 'home/vesselSchedule';
$route['verification-list']['GET']                      = 'verification/listData';
$route['set-verification/(:any)']['POST']               = 'verification/doVerify/$1';
        
$route['nle-register']['GET']                 	        = 'nle/register';
/*
* end after login
*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
