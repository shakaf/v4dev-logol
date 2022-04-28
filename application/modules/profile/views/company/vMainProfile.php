<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
$companyAttribute = $this->newsession->userdata('companyAttribute');
if(is_array($profile))
{ 
    if(array_key_exists('USER_INFO', $profile)) 
    {
        $companyInfoAttribute = $profile['COMPANY_INFO'][0];
    }
}

?>
<div class="page-content">
    <div class="container-fluid" style="margin-top: 32px;">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div style="display: flex; flex-direction: column; align-items: center; background: #FFFFFF; border-radius: 8px;">
                    <div style="width: 118px; height: 118px; margin-top: 31px; margin-bottom: 24px;">
                        <img id="my-pict-profile" src="<?= (trim($this->newsession->userdata('picProfilePicture')) == "" ? base_url().'assets/images/profile_null.png' : base_url().'assets/images/profile_null.png'); ?>" style="cursor: pointer;" class="v4-href-dialog company-change-pic-profile" data-url="<?= site_url('my-company-change-photo'); ?>" data-title="Change photo company" data-width="751px;">
                    </div>
                    <div class="alert alert-warning" role="alert" style="margin-left: 24px; margin-right: 24px; margin-bottom: 31px; width:280px; height: 56px; display: flex; flex-direction: column;"><span><img src="<?= base_url(); ?>assets/images/v4-icon-info-alert-circle.png"></span><span style="display: flex; text-align: justify; margin-left: 32px; margin-bottom: 12px; margin-right: 24px; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #4A4A68; position: absolute;">Profile photo is possible for your media client to recognize you</span></div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <div style="display: flex; flex-direction: column; padding: 12px 24px; background: #FFFFFF; border-radius: 8px;">
                    <div class="d-flex flex-wrap align-items-center mb-4">
                        <h5 class="card-title me-2" style="font-size: 16px;">Company Info <span style="position: absolute; right: 34px; float:right; font-size: 12px;"><a id="<?= rand(); ?>" class="v4-href-dialog company-profile-edit" href="javascript:void(0);" data-url="<?= site_url('my-company-info-edit'); ?>" data-title="Company Info" data-width="677px"><i class="fas fa-edit"></i>  EDIT</span></a></h5>
                    </div>
                    <div class="row" style="margin-bottom: 40px;">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div style="font-style: normal; font-weight: 600; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2; margin-bottom: 4px;">Company Name</div>
                            <div style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 16px; letter-spacing: 0.02em; color: ##4A4A68;"><?= strtoupper($companyInfoAttribute['COMPANY_NAME']); ?></div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div style="font-style: normal; font-weight: 600; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2; margin-bottom: 4px;">Office Phone</div>
                            <div style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 16px; letter-spacing: 0.02em; color: ##4A4A68;"><?= $companyInfoAttribute['OFFICE_PHONE']; ?></div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 74px;">
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div style="font-style: normal; font-weight: 600; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2; margin-bottom: 4px;">No. NPWP</div>
                            <div style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 16px; letter-spacing: 0.02em; color: ##4A4A68;"><?= $companyInfoAttribute['COMPANY_NPWP']; ?></div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div style="font-style: normal; font-weight: 600; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2; margin-bottom: 4px;">File Attachment NPWP</div>
                            <div style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 16px; letter-spacing: 0.02em; color: ##4A4A68;"><?= (trim($companyInfoAttribute['COMPANY_NPWP_FILE']) == "" ? '-' : '<a href="'. $companyInfoAttribute['COMPANY_NPWP_FILE'].'">NPWP FILE</a>'); ?></div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div style="font-style: normal; font-weight: 600; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2; margin-bottom: 4px;">No. SIUP/NIB</div>
                            <div style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 16px; letter-spacing: 0.02em; color: ##4A4A68;"><?= $companyInfoAttribute['COMPANY_SIUP']; ?></div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div style="font-style: normal; font-weight: 600; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2; margin-bottom: 4px;">File Attachment SIUP/NIB</div>
                            <div style="font-style: normal; font-weight: 500; font-size: 14px; line-height: 16px; letter-spacing: 0.02em; color: ##4A4A68;"><?= (trim($companyInfoAttribute['COMPANY_SIUP_FILE']) == "" ? '-' : '<a href="'. $companyInfoAttribute['COMPANY_SIUP_FILE'].'">NPWP FILE</a>'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 24px;">&nbsp;</div>
        <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <div style="display: flex; flex-direction: column; padding: 12px 24px; background: #FFFFFF; border-radius: 8px;">
                    <ul class="nav nav-pills" role="tablist" style="background-color:white !important;">
                        <?php
                            if(is_array($companyAttribute))
                            {
                                if(strtolower($companyAttribute['company_type_name']) == 'customer')
                                {
                                    ?>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#users-wrapper" role="tab" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Users</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#address-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Address Info</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#factory-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Factory</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#additional-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Additional Info</span>   
                                            </a>
                                        </li>
                                    <?php
                                }
                                else if(strtolower($companyAttribute['company_type_name']) == 'customerff')
                                {
                                    ?>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#users-wrapper" role="tab" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Users</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#address-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Address Info</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#onbehalft-cust-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Onbehalf Cust.</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#factory-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Factory</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#additional-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Additional Info</span>   
                                            </a>
                                        </li>
                                    <?php
                                }
                                else if (strtolower($companyAttribute['company_type_name']) == 'truckerff')
                                {
                                    ?>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#users-wrapper" role="tab" aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Users</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#address-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Address Info</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#driver-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Driver Info</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#vehicle-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Vehicle Info</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#onbehalft-cust-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Onbehalf Cust.</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#factory-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Factory</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#garage-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Garage</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#additional-info-wrapper" role="tab" aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Additional Info</span>   
                                            </a>
                                        </li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                    <?php
                        if(!empty($profile)) 
                        {
                            if(array_key_exists('COMPANY_INFO', $profile)) 
                            { 
                                if($profile['COMPANY_INFO'][0]['HAVE_REFER_TRUCKER'] == 0)
                                {
                                    ?>
                                        <span class="wrapper-switch-have-trucker">
                                            <span>Have refer trucker ? Yes </span>
                                            <span class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input v4-toggle-check-custom" id="switch-have-trucker" data-url="<?= site_url('profile/referHaveTrucker'); ?>" data-serial="<?= (trim($this->newsession->userdata('companyNpwp')) == "" ? '' : $this->newsession->userdata('companyNpwp')); ?>" data-confirm-type="confirm" data-confirm-title="Confirmation refer trucker" data-confirm-messages="After you click agree, please contact your trucker unit to register on our platform, then we will verify and add to your ticket list. <p><p></p><b>Note:</b> during the verification process by our team, temporarily if the order you make will use current data</p><p>More information</p><p class='v4-p-popover-email'><img src='<?= base_url(); ?>assets/images/v4-mail-popover.png'> commercial@logol.co.id</p><p class='v4-popover-hunting'><img src='<?= base_url(); ?>assets/images/v4-phone-popover.png'> (021) Hunt 29375245</p>" data-confirm-buttons="Cancel" data-confirm-submit="Agree" data-confirm-attribute="<?= (trim($this->newsession->userdata('companyNpwp')) == "" ? '' : $this->newsession->userdata('companyNpwp')); ?>">
                                                <label class="form-check-label" for="switch-have-trucker">No</label>
                                            </span>
                                        </span>
                                    <?php
                                }
                            }
                        }
                    ?>
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="users-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <?php
                                    if(is_array($profile))
                                    {
                                        if(array_key_exists('USER_INFO', $profile)) 
                                        {
                                            if($profile['USER_INFO']['IS_MAIN_USER'] == 1) 
                                            {
                                                $currentNumberOfUser = $companyInfoAttribute['CURRENT_NUMBER_USER'];
                                                ?>
                                                    <div class="card" style="border:none; margin-bottom: 0px !important;">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Users</h5>
                                                            <div class="d-flex flex-wrap" style="align-items: center;">
                                                                <div class="v4-user-max-left">
                                                                    <span class="v4-max-active-wrap"><img src="<?= base_url(); ?>assets/images/v4-maximum-active.png" style="vertical-align: sub;"> Now Maximum <?= $companyInfoAttribute['REQ_NUMBER_USER']; ?></span>
                                                                    <span class="v4-max-used-wrap"><img src="<?= base_url(); ?>assets/images/v4-maximum-used.png" style="vertical-align: sub;"> Used <?= $companyInfoAttribute['CURRENT_NUMBER_USER']; ?></span>
                                                                </div>
                                                                <div class="v4-user-max-right">
                                                                    <button class="btn-container-dialog btn-primary-custom v4-fl-r-24 v4-href-dialog" data-url="<?= site_url('profile/getInfoMaxUser'); ?>" data-title="Choose your request max user" data-width="880px;" id="<?= rand(); ?>">Request add maximum users</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        }
                                    }
                                ?>
                                <div class="card" style="border:none;">
                                    <div class="card-body">
                                        <?php
                                            if(is_array($profile))
                                            {
                                                $currentNumberUser = $profile['COMPANY_INFO'][0]['CURRENT_NUMBER_USER'];
                                                $totalNumberUserActivated = count($profile['USER_LIST']);
                                                $alertBeforeDialog = TRUE;
                                                if($totalNumberUserActivated < $currentNumberUser) {
                                                    $alertBeforeDialog = FALSE;
                                                }
                                                if(array_key_exists('USER_INFO', $profile)) 
                                                {
                                                    if($profile['USER_INFO']['IS_MAIN_USER'] == 1) 
                                                    {
                                                        ?>

                                                            <div style="display:flex; flex-direction: row; margin-bottom: 8px;">
                                                                <div style="width: 50%; float: leftt">&nbsp;</div>
                                                                <div style="width: 50%; float: right">
                                                                    <span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" <?= ($alertBeforeDialog) ? 'data-validation=true data-confirm-type="info" data-confirm-icons="icons-max-user" data-confirm-title="The user reaches the maximum limit" data-confirm-messages="If you want to increase the maximum user limit, change the maximum user limit then click <b>Request add maximum users</b>" data-confirm-buttons="Ok, understand"' : ''; ?> data-url="<?= site_url('profile/getUserInfo'); ?>" data-title="Add User" data-width="677px;"><img src="<?= base_url(); ?>assets/images/v4-add-icons.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">ADD</span></a></span>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                        <div class="clearfix"></div>
                                        <div class="table-responsive">
                                            <table class="table mb-0 v4-bes-table" id="v4-user-info">
                                                <thead>
                                                    <tr>
                                                        <th class="col-p0 v4-th-f-12 v4-grey-old">Name</th>
                                                        <th class="col-p0 v4-th-f-12 v4-grey-old">Phone Number</th>
                                                        <th class="col-p0 v4-th-f-12 v4-grey-old">Email</th>
                                                        <th class="col-p0 v4-th-f-12 v4-grey-old">Role</th>
                                                        <th class="col-p0 v4-th-f-12 v4-grey-old">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="v4-list-user-active">
                                                    <?php
                                                        if(is_array($profile))
                                                        {
                                                            if(array_key_exists('USER_LIST', $profile))
                                                            {
                                                                $countUserList = count($profile['USER_LIST']);
                                                                if($countUserList > 0)
                                                                {
                                                                    $sesUserAttribute = $this->newsession->userdata('userAttribute');
                                                                    for($u = 0; $u < $countUserList; $u++)
                                                                    {
                                                                        ?>
                                                                            <tr id="<?= $profile['USER_LIST'][$u]['USER_ID']; ?>" v-attribute="<?= $profile['USER_LIST'][$u]['USER_ID'] .'|'. $profile['USER_LIST'][$u]['PIC_NAME'].'|'.$profile['USER_LIST'][$u]['ROLE_ID'] . '|' . $profile['USER_LIST'][$u]['PIC_MOBILE_PHONE'] . '|' . $profile['USER_LIST'][$u]['USER_EMAIL'] . '|' . $profile['USER_LIST'][$u]['IS_MAIN_USER']; ?>">
                                                                                <td class="col-p0"><?= $profile['USER_LIST'][$u]['PIC_NAME']; ?></td>
                                                                                <td class="col-p0"><?= $profile['USER_LIST'][$u]['PIC_MOBILE_PHONE']; ?></td>
                                                                                <td class="col-p0"><?= $profile['USER_LIST'][$u]['USER_EMAIL']; ?></td>
                                                                                <td class="col-p0"><?= ($profile['USER_LIST'][$u]['IS_MAIN_USER']) == 1 ? "Admin <span class=\"v4-img-info-cirle\"><img src=\"". base_url()."assets/images/v4-icon-info-circle.png\"><span class=\"v4-popover-content\"><p class=\"v4-p-popover-header\">Change Admin ?</p><p class=\"v4-p-popover-desc\">To change admin please contact our customer service</p><p class=\"v4-p-popover-email\"><img src=\"". base_url()."assets/images/v4-mail-popover.png\"> commercial@logol.co.id</p><p class=\"v4-popover-hunting\"><img src=\"". base_url()."assets/images/v4-phone-popover.png\"> (021) Hunt 29375245</p></span></span>" : "Staff"; ?></td>
                                                                                <td class="col-p0">
                                                                                    <span class="v4-hr-btn v4-btn-grey">
                                                                                        <a href="javascript:void(0);" class="v4-edit-attribute" data-url="<?= site_url('my-company-edit-onbehalf'); ?>" data-title="Edit Onbehalf of Customer" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-edit-icon.png"></a>
                                                                                    </span>
                                                                                    <?php
                                                                                        if($sesUserAttribute['is_main_user'] != $profile['USER_LIST'][$u]['IS_MAIN_USER'])
                                                                                        {
                                                                                            ?>
                                                                                                <span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8">
                                                                                                    <a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="<?= site_url('my-company-delete-onbehalf'); ?>" data-floating-header="Remove User?" data-floating-message="Are you sure to delete this user?" id="<?= rand(); ?>"><img src="<?= base_url(); ?>assets/images/v4-delete-icon.png"></a>
                                                                                                </span>
                                                                                            <?php
                                                                                        }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>
                                                                        <?php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="v4-nav-pagination">
                                                <div class="v4-nav-pagination-left">
                                                    <ul class="v4-pagination" id="v4-list-user-active-page"></ul>
                                                </div>
                                                <div class="v4-nav-pagination-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="address-info-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <div class="card" style="border:none;">
                                    <?php
                                        $addressInfo = $profile['ADDRESS'];
                                        if(!empty($addressInfo))
                                        {
                                            ?>
                                                <div class="card-body">
                                                    <h5 class="card-title">Office Address<span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-element-attribute-to-div" id="<?= (!empty($addressInfo) ? $addressInfo[0]['ADDRESS_MAPPING_ID'] : ''); ?>" v-attribute="<?= !empty($addressInfo[0]) ? $addressInfo[0]['ADDRESS_DETAIL'] .'|'. $addressInfo[0]['PROVINCE_ID'] . '|' . $addressInfo[0]['CITY_ID'] . '|' . $addressInfo[0]['DISTRICT_ID'] . '|' . $addressInfo[0]['AREA_ID'] . '|' . $addressInfo[0]['POSTAL_CODE']: ''; ?>" data-url="<?= site_url('my-company-address-info'); ?>" data-title="Address Info" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-pin-location.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">EDIT LOCATION</span></a></span></h5>
                                                    <div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-p0">
                                                            <div class="v4-label-10 v4-grey">Address</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[0]['ADDRESS_DETAIL']) ? $addressInfo[0]['ADDRESS_DETAIL'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">Province</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[0]['PROVINCE_ID']) ? $addressInfo[0]['PROVINCE_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">City</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[0]['CITY_ID']) ? $addressInfo[0]['CITY_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">District</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[0]['DISTRICT_ID']) ? $addressInfo[0]['DISTRICT_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">Area</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[0]['AREA_ID']) ? $addressInfo[0]['AREA_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">Postal Code</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[0]['POSTAL_CODE']) ? $addressInfo[0]['POSTAL_CODE'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>!-->
                                                </div>
                                            </div>
                                            <div class="card" style="border:none;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Billing Address<span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-element-attribute-to-div" id="<?= (!empty($addressInfo) ? $addressInfo[1]['ADDRESS_MAPPING_ID'] : ''); ?>" v-attribute="<?= !empty($addressInfo[1]) ? $addressInfo[1]['ADDRESS_DETAIL'] .'|'. $addressInfo[1]['PROVINCE_ID'] . '|' . $addressInfo[1]['CITY_ID'] . '|' . $addressInfo[1]['DISTRICT_ID'] . '|' . $addressInfo[1]['AREA_ID'] . '|' . $addressInfo[1]['POSTAL_CODE']: ''; ?>" data-url="<?= site_url('my-company-billing-info'); ?>" data-title="Billing Addres" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-pin-location.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">EDIT LOCATION</span></a></span></h5>
                                                    <div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-p0">
                                                            <div class="v4-label-10 v4-grey">Address</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[1]['ADDRESS_DETAIL']) ? $addressInfo[1]['ADDRESS_DETAIL'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">Province</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[1]['PROVINCE_ID']) ? $addressInfo[1]['PROVINCE_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">City</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[1]['CITY_ID']) ? $addressInfo[1]['CITY_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">District</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[1]['DISTRICT_ID']) ? $addressInfo[1]['DISTRICT_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">Area</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[1]['AREA_ID']) ? $addressInfo[1]['AREA_ID'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="row v4-pb-24">
                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                            <div class="v4-label-10 v4-grey">Postal Code</div>
                                                            <div class="v4-label-14 v4-grey-old"><?= (!empty($addressInfo) ? (!empty($addressInfo[1]['POSTAL_CODE']) ? $addressInfo[1]['POSTAL_CODE'] : '-') : '-'); ?></div>
                                                        </div>
                                                    </div>!-->
                                                </div>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                                <p>No address Info</p>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="driver-info-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <div class="card" style="border:none;">
                                    <div class="card-body">
                                        <?php
                                            if(is_array($profile))
                                            {
                                                if(array_key_exists('DRIVER_INFO', $profile))
                                                {
                                                    $countDriverList = count($profile['DRIVER_INFO']);
                                                    if($countDriverList > 0)
                                                    {
                                                        ?>
                                                            <h5 class="card-title">Driver Info<span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="<?= site_url('profile/getDriverInfo'); ?>" data-title="Add Driver" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-add-icons.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">ADD</span></a></span></h5>
                                                            <div>&nbsp;</div>
                                                            <div class="table-responsive">
                                                                <table class="table mb-0" id="v4-driver-info">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Driver Name</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Phone Number</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Email</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="v4-list-driver-active">
                                                                        <?php
                                                                            $sesUserAttribute = $this->newsession->userdata('userAttribute');
                                                                            for($v = 0; $v < $countDriverList; $v++)
                                                                            {
                                                                                ?>
                                                                                    <tr id="<?= $profile['DRIVER_INFO'][$v]['USER_ID']; ?>" v-attribute="<?= $profile['DRIVER_INFO'][$v]['USER_ID'] .'|'. $profile['DRIVER_INFO'][$v]['PIC_NAME'].'|'.$profile['DRIVER_INFO'][$v]['ROLE_ID'] . '|' . $profile['DRIVER_INFO'][$v]['PIC_MOBILE_PHONE'] . '|' . $profile['DRIVER_INFO'][$v]['USER_EMAIL']; ?>">
                                                                                        <td class="col-p0"><?= $profile['DRIVER_INFO'][$v]['PIC_NAME']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['DRIVER_INFO'][$v]['PIC_MOBILE_PHONE']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['DRIVER_INFO'][$v]['USER_EMAIL']; ?></td>
                                                                                        <td class="col-p0">
                                                                                            <span class="v4-hr-btn v4-btn-grey">
                                                                                                <a href="javascript:void(0);" class="v4-edit-attribute" data-url="<?= site_url('my-company-edit-driver'); ?>" data-title="Edit Driver" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-edit-icon.png"></a>
                                                                                            </span>
                                                                                            <span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8">
                                                                                                <a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="<?= site_url('my-company-delete-driver'); ?>" data-floating-header="Remove User?" data-floating-message="Are you sure to delete this driver?" id="<?= rand(); ?>"><img src="<?= base_url(); ?>assets/images/v4-delete-icon.png"></a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                                <div class="v4-nav-pagination">
                                                                    <div class="v4-nav-pagination-left">
                                                                        <ul class="v4-pagination" id="v4-list-driver-active-page"></ul>
                                                                    </div>
                                                                    <div class="v4-nav-pagination-right"></div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <div class="v4-no-data-wrapper">
                                                                <div class="v4-no-data-image"><img src="<?= base_url(); ?>assets/images/2ldpi.png"></div>
                                                                <div class="v4-no-data-label">No Data to Display</div>
                                                                <div class="v4-no-data-instructions">Please complete the following data, to start your journey using our digital platform</div>
                                                                <div class="v4-no-data-wrapper-button">
                                                                    <button class="btn-container-dialog btn-dialog-submit v4-href-dialog" id="<?= rand(); ?>" data-url="<?= site_url('profile/getDriverInfo'); ?>" data-title="Add Driver" data-width="683px;">Complete the Data</button>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="vehicle-info-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <div class="card" style="border:none;">
                                    <div class="card-body">
                                        <?php
                                            if(is_array($profile))
                                            {
                                                if(array_key_exists('VEHICLE_INFO', $profile))
                                                {
                                                    $countVechicleList = count($profile['VEHICLE_INFO']);
                                                    if($countVechicleList > 0)
                                                    {
                                                        ?>
                                                            <h5 class="card-title">Vehicle Info<span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="<?= site_url('profile/getVehicleInfo'); ?>" data-title="Add Vehicle" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-add-icons.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">ADD</span></a></span></h5>
                                                            <div>&nbsp;</div>
                                                            <div class="table-responsive">
                                                                <table class="table mb-0" id="v4-vehicle-info">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Vehicle Name</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Brand</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Vehicle Type</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">No. STNK</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Exp Date STNK</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">No. TID</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Year Of Assambly</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="v4-list-vehicle-active">
                                                                        <?php
                                                                            $sesUserAttribute = $this->newsession->userdata('userAttribute');
                                                                            for($t = 0; $t < $countVechicleList; $t++)
                                                                            {
                                                                                ?>
                                                                                    <tr id="<?= $profile['VEHICLE_INFO'][$t]['VEHICLE_ID']; ?>" v-attribute="<?= $profile['VEHICLE_INFO'][$t]['VEHICLE_ID'] .'|'. $profile['VEHICLE_INFO'][$t]['FLEET_TYPE_NAME'].'|'.$profile['VEHICLE_INFO'][$t]['VEHICLE_NUMBER'] . '|' . $profile['VEHICLE_INFO'][$t]['VEHICLE_BRAND'] . '|' . $profile['VEHICLE_INFO'][$t]['STNK_NUMBER'] . '|' . $profile['VEHICLE_INFO'][$t]['STNK_EXP_DATE']. '|' . $profile['VEHICLE_INFO'][$t]['YEAR_OF_ASSEMBLE']; ?>">
                                                                                        <td class="col-p0"><?= $profile['VEHICLE_INFO'][$t]['VEHICLE_NUMBER']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['VEHICLE_INFO'][$t]['VEHICLE_BRAND']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['VEHICLE_INFO'][$t]['FLEET_TYPE_NAME']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['VEHICLE_INFO'][$t]['STNK_NUMBER']; ?></td>
                                                                                        <td class="col-p0"><?= date("d/m/Y", strtotime($profile['VEHICLE_INFO'][$t]['STNK_EXP_DATE'])); ?></td>
                                                                                        <td class="col-p0"></td>
                                                                                        <td class="col-p0"><?= $profile['VEHICLE_INFO'][$t]['YEAR_OF_ASSEMBLE']; ?></td>
                                                                                        <td class="col-p0">
                                                                                            <span class="v4-hr-btn v4-btn-grey">
                                                                                                <a href="javascript:void(0);" class="v4-edit-attribute" data-url="<?= site_url('my-company-edit-vehicle'); ?>" data-title="Edit Vehicle" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-edit-icon.png"></a>
                                                                                            </span>
                                                                                            <span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8">
                                                                                                <a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="<?= site_url('my-company-delete-vehicle'); ?>" data-floating-header="Remove Vehicle?" data-floating-message="Are you sure to delete this vehicle?" id="<?= rand(); ?>"><img src="<?= base_url(); ?>assets/images/v4-delete-icon.png"></a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                                <div class="v4-nav-pagination">
                                                                    <div class="v4-nav-pagination-left">
                                                                        <ul class="v4-pagination" id="v4-list-vehicle-active-page"></ul>
                                                                    </div>
                                                                    <div class="v4-nav-pagination-right"></div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <div class="v4-no-data-wrapper">
                                                                <div class="v4-no-data-image"><img src="<?= base_url(); ?>assets/images/2ldpi.png"></div>
                                                                <div class="v4-no-data-label">No Data to Display</div>
                                                                <div class="v4-no-data-instructions">Please complete the following data, to start your journey using our digital platform</div>
                                                                <div class="v4-no-data-wrapper-button">
                                                                    <button class="btn-container-dialog btn-dialog-submit v4-href-dialog" id="<?= rand(); ?>" data-url="<?= site_url('profile/getVehicleInfo'); ?>" data-title="Add Vehicle" data-width="683px;">Complete the Data</button>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="onbehalft-cust-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <div class="card" style="border:none;">
                                    <div class="card-body">
                                        <?php
                                            if(is_array($profile))
                                            {
                                                if(array_key_exists('ONBEHALF_INFO', $profile))
                                                {
                                                    $countOnBehalfCustomer = count($profile['ONBEHALF_INFO']);
                                                    if($countOnBehalfCustomer > 0)
                                                    {
                                                        ?>
                                                            <h5 class="card-title">OnBehalf Of Customer<span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="<?= site_url('profile/getOnbehalfCustomer'); ?>" data-title="Add Onbehalf of Customer" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-add-icons.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">ADD</span></a></span></h5>
                                                            <div>&nbsp;</div>
                                                            <div class="table-responsive">
                                                                <table class="table mb-0" id="v4-list-onbehalf-info">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Onbehalf NPWP Number</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Onbehalf NPWP Name</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old" style="width: 300px;">Onbehalf NPWP Address</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Attachment</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="v4-list-onbehalf-customer-active">
                                                                        <?php
                                                                            $sesUserAttribute = $this->newsession->userdata('userAttribute');
                                                                            for($o = 0; $o < $countOnBehalfCustomer; $o++)
                                                                            {
                                                                                ?>
                                                                                    <tr id="<?= $profile['ONBEHALF_INFO'][$o]['ONBEHALF_ID']; ?>" v-attribute="<?= $profile['ONBEHALF_INFO'][$o]['ONBEHALF_ID'] .'|'. $profile['ONBEHALF_INFO'][$o]['ONBEHALF_NAME'] .'|'. $profile['ONBEHALF_INFO'][$o]['ONBEHALF_NPWP'].'|'.$profile['ONBEHALF_INFO'][$o]['ONBEHALF_NPWP_FILE'] . '|' . $profile['ONBEHALF_INFO'][$o]['PROVINCE_ID'] . '|' . $profile['ONBEHALF_INFO'][$o]['CITY_ID'] . '|' . $profile['ONBEHALF_INFO'][$o]['DISTRICT_ID']. '|' . $profile['ONBEHALF_INFO'][$o]['AREA_ID']. '|' . $profile['ONBEHALF_INFO'][$o]['POSTAL_CODE']. '|' . $profile['ONBEHALF_INFO'][$o]['ONBEHALF_ADDRESS']; ?>">
                                                                                        <td class="col-p0"><?= $profile['ONBEHALF_INFO'][$o]['ONBEHALF_NPWP']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['ONBEHALF_INFO'][$o]['ONBEHALF_NAME']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['ONBEHALF_INFO'][$o]['ONBEHALF_ADDRESS']; ?></td>
                                                                                        <td class="col-p0"><a href="<?= $profile['ONBEHALF_INFO'][$o]['ONBEHALF_NPWP_FILE']; ?>" target="_blank">NPWP File</a></td>
                                                                                        <td class="col-p0">
                                                                                            <span class="v4-hr-btn v4-btn-grey">
                                                                                                <a href="javascript:void(0);" class="v4-edit-attribute" data-url="<?= site_url('my-company-edit-onbehalf-customer'); ?>" data-title="Edit On Behalf Customer" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-edit-icon.png"></a>
                                                                                            </span>
                                                                                            <span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8">
                                                                                                <a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="<?= site_url('my-company-delete-onbehalf-customer'); ?>" data-floating-header="Remove On Behalf Customer?" data-floating-message="Are you sure to delete this on behalf customer?" id="<?= rand(); ?>"><img src="<?= base_url(); ?>assets/images/v4-delete-icon.png"></a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                                <div class="v4-nav-pagination">
                                                                    <div class="v4-nav-pagination-left">
                                                                        <ul class="v4-pagination" id="v4-list-onbehalf-active-page"></ul>
                                                                    </div>
                                                                    <div class="v4-nav-pagination-right"></div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <div class="v4-no-data-wrapper">
                                                                <div class="v4-no-data-image"><img src="<?= base_url(); ?>assets/images/2ldpi.png"></div>
                                                                <div class="v4-no-data-label">No Data to Display</div>
                                                                <div class="v4-no-data-instructions">Please complete the following data, to start your journey using our digital platform</div>
                                                                <div class="v4-no-data-wrapper-button">
                                                                    <button class="btn-container-dialog btn-dialog-submit v4-href-dialog" id="<?= rand(); ?>" data-url="<?= site_url('profile/getOnbehalfCustomer'); ?>" data-title="Add Onbehalf of Customer" data-width="683px;">Complete the Data</button>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="factory-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <div class="card" style="border:none;">
                                    <div class="card-body">
                                        <?php
                                            if(is_array($profile))
                                            {
                                                if(array_key_exists('FACTORY_INFO', $profile))
                                                { 
                                                    $countFactory = count($profile['FACTORY_INFO']);
                                                    if($countFactory > 0)
                                                    {
                                                        ?>
                                                            <h5 class="card-title">Factory<span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="<?= site_url('profile/getFactoryInfo'); ?>" data-title="Add Factory" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-add-icons.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">ADD</span></a></span></h5>
                                                            <div>&nbsp;</div>
                                                            <div class="table-responsive">
                                                                <table class="table mb-0" id="v4-list-factory-info">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Factory Name</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">PIC Name</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Office Phone</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Mobile Phone</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old" style="width: 300px;">Address</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="v4-list-factory-active">
                                                                        <?php 
                                                                            $sesUserAttribute = $this->newsession->userdata('userAttribute');
                                                                            for($f = 0; $f < $countFactory; $f++)
                                                                            {
                                                                                ?>
                                                                                    <tr id="<?= $profile['FACTORY_INFO'][$f]['FACTORY_ID']; ?>" v-attribute="<?= $profile['FACTORY_INFO'][$f]['FACTORY_ID'] .'|'. $profile['FACTORY_INFO'][$f]['FACTORY_NAME'] .'|'. $profile['FACTORY_INFO'][$f]['FACTORY_PIC_NAME'].'|'.$profile['FACTORY_INFO'][$f]['FACTORY_OFFICE_PHONE'] . '|' . $profile['FACTORY_INFO'][$f]['PROVINCE_ID'] . '|' . $profile['FACTORY_INFO'][$f]['CITY_ID'] . '|' . $profile['FACTORY_INFO'][$f]['DISTRICT_ID']. '|' . $profile['FACTORY_INFO'][$f]['AREA_ID']. '|' . $profile['FACTORY_INFO'][$f]['POSTAL_CODE']. '|' . $profile['FACTORY_INFO'][$f]['FACTORY_ADDRESS']; ?>">
                                                                                        <td class="col-p0"><?= $profile['FACTORY_INFO'][$f]['FACTORY_NAME']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['FACTORY_INFO'][$f]['FACTORY_PIC_NAME']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['FACTORY_INFO'][$f]['FACTORY_OFFICE_PHONE']; ?></td>
                                                                                        <td class="col-p0"></td>
                                                                                        <td class="col-p0"><?= $profile['FACTORY_INFO'][$f]['FACTORY_ADDRESS']; ?></td>
                                                                                        <td class="col-p0">
                                                                                            <span class="v4-hr-btn v4-btn-grey">
                                                                                                <a href="javascript:void(0);" class="v4-edit-attribute" data-url="<?= site_url('my-company-edit-factory'); ?>" data-title="Edit Factory" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-edit-icon.png"></a>
                                                                                            </span>
                                                                                            <span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8">
                                                                                                <a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="<?= site_url('my-company-delete-factory'); ?>" data-floating-header="Remove Factory?" data-floating-message="Are you sure to delete this factory?" id="<?= rand(); ?>"><img src="<?= base_url(); ?>assets/images/v4-delete-icon.png"></a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                                <div class="v4-nav-pagination">
                                                                    <div class="v4-nav-pagination-left">
                                                                        <ul class="v4-pagination" id="v4-list-factory-active-page"></ul>
                                                                    </div>
                                                                    <div class="v4-nav-pagination-right"></div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <div class="v4-no-data-wrapper">
                                                                <div class="v4-no-data-image"><img src="<?= base_url(); ?>assets/images/2ldpi.png"></div>
                                                                <div class="v4-no-data-label">No Data to Display</div>
                                                                <div class="v4-no-data-instructions">Please complete the following data, to start your journey using our digital platform</div>
                                                                <div class="v4-no-data-wrapper-button">
                                                                    <button class="btn-container-dialog btn-dialog-submit v4-href-dialog" id="<?= rand(); ?>" data-url="<?= site_url('profile/getFactoryInfo'); ?>" data-title="Add Factory" data-width="683px;" data-title="Add Factory">Complete the Data</button>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="garage-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <div class="card" style="border:none;">
                                    <div class="card-body">
                                        <?php
                                            if(is_array($profile))
                                            {
                                                if(array_key_exists('GARAGE_INFO', $profile))
                                                {
                                                    $countGarageInfo = count($profile['GARAGE_INFO']);
                                                    if($countGarageInfo > 0)
                                                    {
                                                        ?>
                                                            <h5 class="card-title">Garage<span class="v4-fl-r-24 v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="<?= site_url('profile/getGarageInfo'); ?>" data-title="Add Garage" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-add-icons.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">ADD</span></a></span></h5>
                                                            <div>&nbsp;</div>
                                                            <div class="table-responsive">
                                                                <table class="table mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Garage Name</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">PIC Name</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Office Phone</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Mobile Phone</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old" style="width: 300px;">Address</th>
                                                                            <th class="col-p0 v4-th-f-12 v4-grey-old">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="v4-list-garage-active">
                                                                        <?php
                                                                            for($g = 0; $g < $countGarageInfo; $g++)
                                                                            {
                                                                                ?>
                                                                                    <tr id="<?= $profile['GARAGE_INFO'][$g]['GARAGE_ID']; ?>" v-attribute="<?= $profile['GARAGE_INFO'][$g]['GARAGE_ID'] .'|'. $profile['GARAGE_INFO'][$g]['GARAGE_NAME'] .'|'. $profile['GARAGE_INFO'][$g]['GARAGE_PIC_NAME'].'|'.$profile['GARAGE_INFO'][$g]['GARAGE_OFFICE_PHONE'] . '|' . $profile['GARAGE_INFO'][$g]['PROVINCE_ID'] . '|' . $profile['GARAGE_INFO'][$g]['CITY_ID'] . '|' . $profile['GARAGE_INFO'][$g]['DISTRICT_ID']. '|' . $profile['GARAGE_INFO'][$g]['AREA_ID']. '|' . $profile['GARAGE_INFO'][$g]['POSTAL_CODE']. '|' . $profile['GARAGE_INFO'][$g]['GARAGE_ADDRESS']; ?>">
                                                                                        <td class="col-p0"><?= $profile['GARAGE_INFO'][$g]['GARAGE_NAME']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['GARAGE_INFO'][$g]['GARAGE_PIC_NAME']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['GARAGE_INFO'][$g]['GARAGE_OFFICE_PHONE']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['GARAGE_INFO'][$g]['GARAGE_MOBILE_PHONE']; ?></td>
                                                                                        <td class="col-p0"><?= $profile['GARAGE_INFO'][$g]['GARAGE_ADDRESS']; ?></td>
                                                                                        <td class="col-p0">
                                                                                            <span class="v4-hr-btn v4-btn-grey">
                                                                                                <a href="javascript:void(0);" class="v4-edit-attribute" data-url="<?= site_url('my-company-edit-garage'); ?>" data-title="Edit On Behalf Customer" data-width="683px;"><img src="<?= base_url(); ?>assets/images/v4-edit-icon.png"></a>
                                                                                            </span>
                                                                                            <span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8">
                                                                                                <a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="<?= site_url('my-company-delete-garage'); ?>" data-floating-header="Remove Garage?" data-floating-message="Are you sure to delete this garage?" id="<?= rand(); ?>"><img src="<?= base_url(); ?>assets/images/v4-delete-icon.png"></a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                                <div class="v4-nav-pagination">
                                                                    <div class="v4-nav-pagination-left">
                                                                        <ul class="v4-pagination" id="v4-list-garage-active-page"></ul>
                                                                    </div>
                                                                    <div class="v4-nav-pagination-right"></div>
                                                                </div>
                                                            </div>
                                                        <?php 
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <div class="v4-no-data-wrapper">
                                                                <div class="v4-no-data-image"><img src="<?= base_url(); ?>assets/images/2ldpi.png"></div>
                                                                <div class="v4-no-data-label">No Data to Display</div>
                                                                <div class="v4-no-data-instructions">Please complete the following data, to start your journey using our digital platform</div>
                                                                <div class="v4-no-data-wrapper-button">
                                                                    <button class="btn-container-dialog btn-dialog-submit v4-href-dialog" id="<?= rand(); ?>" data-url="<?= site_url('profile/getGarageInfo'); ?>" data-title="Add Garage" data-width="683px;">>Complete the Data</button>
                                                                </div>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="additional-info-wrapper" role="tabpanel">
                            <div class="mb-0">
                                <form class="" action="<?= site_url('my-company-additional-stamp'); ?>" autocomplete="off" method="post" id="v4-company-digi-stamp" name="v4-company-digi-stamp" enctype="multipart/form-data">
                                    <div class="card" style="border:none;">
                                        <div class="card-body">
                                            <h5 class="card-title">Additional Info</h5>
                                            <div>&nbsp;</div>
                                            <div class="row v4-pb-24">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <div class="v4-label-14 v4-grey-old">Digital Stamp</div>
                                                    <div class="v4-label-12 v4-lh-15 v4-grey">1. Must in .png file format</div>
                                                    <div class="v4-label-12 v4-lh-15 v4-grey">2. Image must have no background</div>
                                                    <div class="v4-label-12 v4-lh-15 v4-grey">3. Image size below 1 MB</div>
                                                </div>
                                            </div>

                                            <?php
                                                if(is_array($profile))
                                                {
                                                    if(array_key_exists('ADDITIONAL_INFO', $profile)) 
                                                    {
                                                        $addInfo = $profile['ADDITIONAL_INFO'];
                                                        if(count($addInfo) > 0)
                                                        {
                                                            ?>
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                        <span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8 v4-btn-abs-r v4-btn-r-16 v4-btn-t-8">
                                                                            <a href="javascript:void(0);" class="v4-confirm-floating-single" data-floating-type="confirm" data-floating-url="<?= site_url('my-company-delete-digistamp'); ?>" data-floating-header="Remove Digital Stamp?" data-floating-message="Are you sure to delete this digital stamp?" id="<?= $addInfo[0]['ADD_INFO_ID'] ; ?>"><img src="<?= base_url(); ?>assets/images/v4-delete-icon.png"></a>
                                                                        </span>
                                                                        <div class="drop" style="width: 100% !important; height: 232px; background-size: 8% !important;">
                                                                            <div class="uploader">
                                                                                <input type="file" class="v4-image-upload" id="digitalStamp" name="digitalStamp" accept="image/*" wajib="yes">
                                                                                <div id="image-preview" style="background-color: #FFF !important; width: 192px; height: 192px; margin: 0 auto; top: 16px;">
                                                                                    <img id="my-pict-digistamp" src="<?= $addInfo[0]['ADD_INFO_FILE'] ; ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="digiStampId" value="<?= $addInfo[0]['ADD_INFO_ID']; ?>" wajib="yes" readonly>
                                                                <input type="hidden" name="action" value="update" wajib="yes">
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                        <div class="drop" style="width: 100% !important; height: 74px; background-size: 8% !important;">
                                                                            <div class="uploader">
                                                                                <input type="file" class="v4-image-upload" id="digitalStamp" name="digitalStamp" accept="image/*" wajib="yes">
                                                                                <div id="image-preview" style="background-color: #FFF !important;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="action" value="insert" wajib="yes">
                                                            <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                            <div style="height: 36px;">&nbsp;</div>
                                            <div class="row btn-additional-stamp">
                                                <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
                                                    <button class="btn-container-dialog btn-dialog-submit" id="<?= rand(); ?>" onclick="v4DoPost('v4-company-digi-stamp', $(this)); return false;">Upload Photo/Image</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div style="padding: 12px 24px; background: #FFFFFF; border-radius: 8px;">
                    <div class="d-flex flex-wrap mb-4">
                        <div style="display: flex; flex-direction: row; height: 86.99px; width: 100%;">
                            <h5 style="font-size: 16px; font-weight: 700; color: #002985;"><span style="display: flex; flex-direction: column; align-items: flex-start; position: absolute; top: 51px;">All Data Requirement</span> <span style="position: absolute; right: 34px; margin-top: 16px;"><img src="<?= base_url(); ?>assets/images/v4-all-data-requirement.png"></h5>
                        </div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: <?= $isRequirement['percentage']; ?>%" aria-valuenow="<?= $isRequirement['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div><span style="font-size: 14px; font-weight: 700; color: #0D51F1;"><?= $isRequirement['percentage']; ?>%</span> <span style="font-size: 14px; font-weight: 700; color: #A5A5A5;">completed</span></div>
                    <div class="mt-4">
                        <?php
                            if(is_array($isRequirement['requirement']))
                            {
                                foreach($isRequirement['requirement'] as $key => $val)
                                {
                                    ?>
                                        <div style="height: 36px;"><?= $val['complete'] == 1 ? '<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 19.9912C14.9706 19.9912 19 15.9618 19 10.9912C19 6.02065 14.9706 1.99121 10 1.99121C5.02944 1.99121 1 6.02065 1 10.9912C1 15.9618 5.02944 19.9912 10 19.9912Z" stroke="#0D51F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 10.9907L9 12.9907L13 8.99072" stroke="#0D51F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> <span style="color: #0D51F1; font-size: 16px; padding-left: 16px;">' . ($key == 'SIUP_NIB' ? str_replace("_", " ", ucwords($key)) : str_replace("_", " ", ucwords(strtolower($key)))) . '</span>' : '<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 19.9912C14.9706 19.9912 19 15.9618 19 10.9912C19 6.02065 14.9706 1.99121 10 1.99121C5.02944 1.99121 1 6.02065 1 10.9912C1 15.9618 5.02944 19.9912 10 19.9912Z" stroke="#F44336" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8.99121L8 12.9912M8 8.99121L12 12.9912L8 8.99121Z" stroke="#F44336" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> <span style="color: #F77268; font-size: 16px; padding-left: 16px;"><a href="javascript:void(0);" class="v4-href-dialog not-completed" data-url="' . $val['url']. '" data-title="' . $val['title'] . '" data-width="' . $val['width']. '">' . ($key == 'SIUP_NIB' ? str_replace("_", " ", ucwords($key)) : str_replace("_", " ", ucwords(strtolower($key)))) . '</a></span>'; ?></div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
            </div>
			<?php if(!$isRequirement['showRating']): ?>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-3">
                <div style="padding: 12px 24px; background: #FFFFFF; border-radius: 8px;">
                    <div class="d-flex flex-wrap mb-4">
                        <div style="display: flex; flex-direction: row; height: 86.99px; width: 100%;">
                            <svg style="margin: 0 auto;" width="118" height="133" viewBox="0 0 118 133" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38.2512 126.041L15.7578 111.83C15.4056 111.6 15.1904 111.196 15.1904 110.74C15.1904 110.289 15.4017 109.877 15.7539 109.651L25.5746 103.262C26.4236 102.706 27.4839 102.706 28.3369 103.258L33.8459 106.812L33.5525 107.377L28.0435 103.822C27.3744 103.388 26.541 103.392 25.8719 103.826L16.0512 110.215C15.8791 110.328 15.7773 110.523 15.7773 110.745C15.7773 110.966 15.8791 111.161 16.0512 111.274L38.5446 125.486L38.2512 126.041Z" fill="#1C3E58"/>
                            <path d="M36.6581 129.459L15.6872 115.773C15.3194 115.534 15.1003 115.091 15.1238 114.614L15.206 110.651L15.7929 110.669L15.7107 114.64C15.6989 114.883 15.8007 115.096 15.9807 115.213L36.9516 128.899L36.6581 129.459Z" fill="#1C3E58"/>
                            <path d="M40.9343 126.597L51.1426 120.016C51.4948 119.786 51.71 119.383 51.71 118.927C51.71 118.476 51.4987 118.063 51.1465 117.838L41.3258 111.449C40.4768 110.893 40.8523 111.032 40.2024 111.032L40.6409 111.449L40.9343 112.013L41.2278 111.816C41.8969 111.382 40.3594 111.579 41.0285 112.013L50.8492 118.402C51.0213 118.515 51.1231 118.71 51.1231 118.931C51.1231 119.153 51.0213 119.348 50.8492 119.461L40.6409 126.041L40.9343 126.597Z" fill="#1C3E58"/>
                            <path d="M41.502 130.33L51.2132 123.961C51.581 123.723 51.8001 123.28 51.7766 122.803L51.6944 118.84L51.1075 118.857L51.1897 122.829C51.2014 123.072 51.0997 123.284 50.9197 123.401L41.2086 129.77L41.502 130.33Z" fill="#1C3E58"/>
                            <path d="M33.7884 101.869L33.0303 110.543L33.6144 110.606L34.3726 101.931L33.7884 101.869Z" fill="#1C3E58"/>
                            <path d="M40.3099 105.315L39.5518 113.989L40.1359 114.052L40.894 105.378L40.3099 105.315Z" fill="#1C3E58"/>
                            <path d="M81.8735 132.107C81.2906 132.107 80.6567 131.899 80.0111 131.487L73.7979 127.506L74.2869 126.569L80.5002 130.549C81.3101 131.07 82.0496 131.165 82.5856 130.827C83.1177 130.484 83.4112 129.724 83.4112 128.687V79.1064H84.3894V128.687C84.3894 130.132 83.9237 131.222 83.0747 131.769C82.7108 131.994 82.3039 132.107 81.8735 132.107Z" fill="#1C3E58"/>
                            <path d="M74.1556 127.697L4.34519 83.0313C2.20498 81.6597 0.463867 78.3134 0.463867 75.5703V8.52165C0.463867 7.07633 0.929465 5.98692 1.77851 5.44004C2.62755 4.89751 3.71527 4.99734 4.8421 5.71783L39.7682 28.0202L39.2791 28.9621L4.35303 6.65966C3.5392 6.13883 2.7997 6.04335 2.26759 6.38189C1.73547 6.72477 1.44203 7.48432 1.44203 8.52165V75.5703C1.44203 77.9271 2.99533 80.9132 4.83427 82.0894L74.6446 126.755L74.1556 127.697Z" fill="#1C3E58"/>
                            <path d="M79.6671 122.313C79.4636 122.313 79.2641 122.252 79.0802 122.135C77.5973 121.18 73.7277 118.698 73.5282 118.576C73.5125 118.567 11.3643 78.6238 11.3643 78.6238C11.3056 78.5848 11.2625 78.5284 11.2391 78.4632L4.50152 74.1403C3.55858 73.5327 2.97559 72.4086 2.97559 71.2063V12.5474C2.97559 11.8703 3.2925 11.2584 3.8207 10.9198C4.35282 10.5769 4.98668 10.5769 5.5188 10.9155C7.21688 12.0092 10.4487 14.0839 10.613 14.1837C10.6287 14.1924 39.778 31.8651 39.778 31.8651L39.4846 32.4294L10.3313 14.7566L10.347 14.7262C10.0614 14.5873 9.4197 14.175 7.77639 13.1203L5.22535 11.4797C4.87712 11.2584 4.46238 11.2584 4.11415 11.4797C3.76593 11.7011 3.55856 12.1004 3.55856 12.5431V71.2063C3.55856 72.1785 4.032 73.09 4.79105 73.5761L11.6538 77.9815C11.7125 78.0206 11.7555 78.077 11.779 78.1421L73.802 118.003L73.7864 118.034C74.0837 118.181 74.7763 118.624 76.5878 119.787L79.3697 121.571C79.5536 121.688 79.7727 121.692 79.9566 121.571C80.1405 121.454 80.2501 121.245 80.2501 121.011V77.5085H80.8369V121.015C80.8369 121.484 80.6178 121.905 80.2501 122.144C80.0701 122.257 79.8705 122.313 79.6671 122.313Z" fill="#1C3E58"/>
                            <path d="M39.4795 24.2355L8.04978 4.3733C7.27508 3.87417 6.53951 3.76132 5.98001 4.04778L2.5447 6.16149L2.07129 5.21097L5.53788 3.07989C6.42996 2.61982 7.48637 2.75003 8.54278 3.43145L39.9686 23.298L39.4795 24.2355Z" fill="#1C3E58"/>
                            <path d="M82.7224 131.939L82.2998 130.962C83.8883 130.116 86.3024 128.818 86.5685 128.662C86.5842 128.653 86.5998 128.64 86.6155 128.632C87.1828 128.315 87.4958 127.542 87.4958 126.461L87.531 82.0205H88.5092L88.474 126.461C88.474 127.95 87.9575 129.092 87.0576 129.599L87.0458 129.578C86.6624 129.838 85.6373 130.385 82.7224 131.939Z" fill="#1C3E58"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M37.2671 77.9973L9.44434 60.1544V41.374L37.2671 59.2169V77.9973Z" fill="#1627A1"/>
                            <path d="M37.2695 78.3241C37.2186 78.3241 37.1677 78.3111 37.1208 78.2807L9.302 60.4335C9.21201 60.3771 9.15332 60.2686 9.15332 60.1514V41.371C9.15332 41.2538 9.2081 41.1453 9.302 41.0889C9.39199 41.0281 9.50546 41.0325 9.59545 41.0889L37.4142 58.9361C37.5042 58.9925 37.5629 59.101 37.5629 59.2182V77.9986C37.5629 78.1158 37.5081 78.2243 37.4142 78.2807C37.3673 78.3111 37.3203 78.3241 37.2695 78.3241ZM9.74021 59.9691L36.9721 77.4387V59.4092L9.74021 41.9396V59.9691Z" fill="#1627A1"/>
                            <path d="M43.4534 89.5007C43.4026 89.5007 43.3517 89.4877 43.3048 89.4573L31.7899 82.0745L32.0833 81.5102L43.1561 88.6109V53.4416C43.1561 53.3244 43.2148 53.2159 43.3087 53.1552L46.4583 51.2194L44.9324 48.2941L41.1685 50.6204V83.9625C41.1685 84.0797 41.1137 84.1882 41.0198 84.2446C40.9298 84.301 40.8163 84.301 40.7263 84.2446L9.73825 64.3704V67.2784L13.4631 69.6656L13.1696 70.2298L9.29612 67.7472C9.20613 67.6908 9.14746 67.5823 9.14746 67.4651V63.8062C9.14746 63.689 9.20222 63.5805 9.29612 63.5241C9.38611 63.4677 9.49958 63.4677 9.58957 63.5241L40.5776 83.3982V50.4295C40.5776 50.3123 40.6363 50.2038 40.7263 50.143L44.8933 47.5692C45.0341 47.4824 45.2102 47.5388 45.2885 47.6907L47.1117 51.1803C47.1509 51.2541 47.1626 51.3453 47.1391 51.4321C47.1196 51.5145 47.0687 51.5883 46.9983 51.6317L43.7391 53.6369V89.1795C43.7391 89.2967 43.6843 89.4052 43.5904 89.4616C43.5552 89.4833 43.5043 89.5007 43.4534 89.5007Z" fill="#1C3E58"/>
                            <path d="M18.4002 72.9042L18.1064 73.4678L26.5744 78.8986L26.8681 78.3349L18.4002 72.9042Z" fill="#1C3E58"/>
                            <path d="M16.7712 77.3028C16.3643 77.3028 15.9222 77.1553 15.4683 76.8601C13.9658 75.8879 12.7451 73.5268 12.7451 71.5953C12.7451 70.5841 13.066 69.8245 13.6489 69.4513C14.2319 69.0823 14.9792 69.1561 15.7617 69.6596C17.2642 70.6318 18.4849 72.9929 18.4849 74.9244C18.4849 75.9356 18.1641 76.6952 17.5811 77.0685C17.3346 77.2247 17.0607 77.3028 16.7712 77.3028ZM14.4627 69.8679C14.271 69.8679 14.095 69.9157 13.9424 70.0111C13.5472 70.2629 13.332 70.8228 13.332 71.591C13.332 73.3184 14.4236 75.4278 15.7617 76.2959C16.3526 76.6778 16.8964 76.7516 17.2877 76.5042C17.6829 76.2525 17.8981 75.6926 17.8981 74.9244C17.8981 73.1969 16.8064 71.0875 15.4683 70.2195C15.1044 69.9851 14.7601 69.8679 14.4627 69.8679Z" fill="#1C3E58"/>
                            <path d="M30.6892 85.8731C30.2823 85.8731 29.8402 85.7255 29.3863 85.4304C27.8878 84.4582 26.6631 82.0971 26.6631 80.1657C26.6631 79.1544 26.9839 78.3948 27.5669 78.0216C28.146 77.6526 28.8972 77.7264 29.6797 78.2299C31.1822 79.2021 32.4029 81.5632 32.4029 83.4946C32.4029 84.5059 32.0821 85.2655 31.4991 85.6387C31.2526 85.795 30.9826 85.8731 30.6892 85.8731ZM28.3807 78.4382C28.189 78.4382 28.0129 78.486 27.8604 78.5815C27.4652 78.8332 27.25 79.3931 27.25 80.1613C27.25 81.8888 28.3416 83.9981 29.6797 84.8662C30.2706 85.2481 30.8144 85.3219 31.2057 85.0745C31.6008 84.8228 31.816 84.2629 31.816 83.4946C31.816 81.7672 30.7244 79.6578 29.3863 78.7898C29.0224 78.5598 28.682 78.4382 28.3807 78.4382Z" fill="#1C3E58"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.421 61.4248L21.8135 59.1158V49.3545L25.421 51.6635V61.4248Z" fill="white"/>
                            <path d="M25.4214 61.7496C25.3705 61.7496 25.3197 61.7365 25.2727 61.7062L21.6653 59.3971C21.5753 59.3407 21.5166 59.2322 21.5166 59.115V49.3537C21.5166 49.2365 21.5714 49.128 21.6653 49.0716C21.7553 49.0152 21.8687 49.0152 21.9587 49.0716L25.5662 51.3806C25.6562 51.4371 25.7149 51.5456 25.7149 51.6628V61.4241C25.7149 61.5412 25.6601 61.6497 25.5662 61.7062C25.5231 61.7365 25.4723 61.7496 25.4214 61.7496ZM22.1074 58.9284L25.128 60.8642V51.8537L22.1074 49.918V58.9284Z" fill="#1C3E58"/>
                            <path d="M56.7127 97.422L50.0651 93.1642C48.8444 92.383 47.8584 90.4906 47.8584 88.9368C47.8584 87.383 48.8483 86.7536 50.0651 87.5349L56.7127 91.7927C57.9334 92.5739 58.9194 94.4663 58.9194 96.0201C58.9194 97.5739 57.9334 98.2033 56.7127 97.422Z" fill="#1627A1"/>
                            <g clip-path="url(#clip0_724_38435)">
                            <path d="M95.195 60.7904L97.1276 61.2742L100.026 59.8229L101.089 58.6619L101.229 49.9544L100.873 47.0751L99.1259 44.3661L51.6803 16.8155V5.45312C51.8296 5.51019 51.9744 5.57876 52.1132 5.65824L106.578 37.1292C107.295 37.5984 107.891 38.2308 108.318 38.9746C108.744 39.7185 108.989 40.5528 109.032 41.4094V83.2481C109.032 83.2481 109.032 83.2713 109.032 83.283C108.882 83.2291 108.737 83.1604 108.6 83.0779L76.9047 64.7649L64.2422 72.1489V57.4429L54.1463 51.5876C53.4313 51.1212 52.8361 50.4928 52.409 49.7532C51.9819 49.0136 51.7349 48.1836 51.688 47.3305V35.438L95.195 60.7904Z" fill="white"/>
                            <path d="M117.416 35.6353L111.031 39.4085L111.058 82.8223L117.416 78.8826V77.5281V35.6353Z" fill="#002985"/>
                            <path d="M101.186 48.1162L98.4845 49.819L98.3028 60.33L99.5358 60.0668L101.09 58.662L101.186 48.1162Z" fill="#002985"/>
                            <path d="M90.8273 51.3824C90.9046 51.3399 90.8621 51.1619 90.7577 51.0845L88.4386 49.3507C88.3927 49.3147 88.3578 49.2664 88.3381 49.2114L87.2984 46.1734C87.252 46.0341 87.1128 45.9567 87.0665 46.038L86.0267 47.8762C86.0223 47.8845 86.0162 47.8918 86.0089 47.8976C86.0016 47.9035 85.9932 47.9078 85.9842 47.9104C85.9751 47.9129 85.9657 47.9136 85.9564 47.9124C85.9471 47.9111 85.9382 47.9081 85.9301 47.9033L83.611 46.9513C83.5027 46.9048 83.4602 47.0325 83.5375 47.1641L85.2227 50.0318C85.2523 50.0777 85.2659 50.1321 85.2614 50.1866L84.8749 52.6363C84.8749 52.7486 84.9676 52.9072 85.0643 52.9034L87.1438 52.8414C87.1679 52.8423 87.1915 52.8491 87.2124 52.8612C87.2333 52.8734 87.2509 52.8905 87.2636 52.9111L89.3199 55.3763C89.4165 55.4885 89.5247 55.4614 89.5093 55.326L89.1228 52.4196C89.1171 52.3992 89.1177 52.3775 89.1246 52.3575C89.1315 52.3374 89.1444 52.3199 89.1614 52.3074L90.8273 51.3824Z" fill="white"/>
                            <path d="M80.9247 45.8676C81.002 45.825 80.9594 45.647 80.8512 45.5696L78.5321 43.8358C78.4872 43.7996 78.4537 43.7512 78.4355 43.6965L77.3918 40.6585C77.3455 40.5192 77.2102 40.4418 77.1599 40.5231L76.1202 42.3613C76.1202 42.3961 76.0661 42.4039 76.0236 42.3884L73.7044 41.4364C73.6001 41.3899 73.5575 41.5177 73.6348 41.6492L75.3046 44.5053C75.3331 44.5516 75.3454 44.6061 75.3394 44.6601L74.9529 47.1098C74.9529 47.2221 75.0457 47.3807 75.1423 47.3769L77.2218 47.3149C77.2457 47.3167 77.2689 47.3239 77.2897 47.336C77.3104 47.348 77.3282 47.3647 77.3416 47.3846L79.4211 49.8498C79.5177 49.962 79.6298 49.9349 79.6105 49.7995L79.224 46.8931C79.2184 46.873 79.2187 46.8518 79.2248 46.8319C79.231 46.812 79.2428 46.7943 79.2587 46.7809L80.9247 45.8676Z" fill="white"/>
                            <path d="M70.7127 39.9659C70.79 39.9234 70.7475 39.7453 70.6393 39.6679L68.3202 37.9342C68.2753 37.8979 68.2418 37.8496 68.2235 37.7949L67.1799 34.7569C67.1335 34.6176 66.9983 34.5402 66.948 34.6215L65.9083 36.4597C65.9083 36.4945 65.8541 36.5023 65.8116 36.4868L63.4925 35.5348C63.3881 35.4883 63.3456 35.616 63.4229 35.7476L65.1082 38.6153C65.1367 38.6616 65.1489 38.7161 65.1429 38.7701L64.7564 41.2198C64.7564 41.3321 64.8492 41.4907 64.9458 41.4869L67.0253 41.4249C67.0493 41.4264 67.0727 41.4335 67.0935 41.4456C67.1143 41.4577 67.132 41.4744 67.1451 41.4946L69.2208 43.9598C69.3135 44.072 69.4256 44.0449 69.4063 43.9095L69.0198 41.0031C69.0141 40.9827 69.0147 40.961 69.0216 40.941C69.0285 40.9209 69.0414 40.9034 69.0584 40.8909L70.7127 39.9659Z" fill="white"/>
                            <path d="M60.5163 34.0139C60.5936 33.9713 60.5511 33.7972 60.4467 33.7159L58.1276 31.9821C58.0817 31.9476 58.0468 31.9006 58.0271 31.8467L56.9873 28.8049C56.9409 28.6694 56.8018 28.5881 56.7554 28.6733L55.6925 30.5115C55.6877 30.5195 55.6814 30.5264 55.674 30.5319C55.6665 30.5374 55.658 30.5413 55.649 30.5435C55.64 30.5456 55.6307 30.546 55.6216 30.5445C55.6124 30.543 55.6037 30.5397 55.5958 30.5347L53.2767 29.5827C53.1685 29.5402 53.126 29.6679 53.2033 29.7956L54.8885 32.6671C54.9189 32.7127 54.9326 32.7674 54.9272 32.8219L54.5406 35.2716C54.5406 35.3839 54.6334 35.5387 54.73 35.5387L56.8095 35.4729C56.8333 35.4754 56.8562 35.4829 56.8768 35.4949C56.8975 35.5069 56.9154 35.5232 56.9293 35.5425L59.0127 38.0116C59.1093 38.1238 59.2176 38.0929 59.2021 37.9613L58.8156 35.0511C58.8109 35.0306 58.812 35.0092 58.8189 34.9894C58.8257 34.9696 58.838 34.952 58.8542 34.9388L60.5163 34.0139Z" fill="white"/>
                            <path d="M52.1365 26.9357C52.21 26.8931 52.1674 26.7151 52.0631 26.6377L49.7439 24.9039C49.6991 24.8677 49.6656 24.8193 49.6473 24.7646L48.6037 21.7266C48.5573 21.5873 48.4182 21.5099 48.3718 21.5912L47.332 23.4294C47.3276 23.4377 47.3216 23.445 47.3142 23.4509C47.3069 23.4567 47.2985 23.4611 47.2895 23.4636C47.2805 23.4661 47.271 23.4668 47.2617 23.4656C47.2524 23.4644 47.2435 23.4613 47.2354 23.4565L44.9163 22.5045C44.8119 22.4619 44.7694 22.5858 44.8467 22.7174L46.5319 25.5889C46.5591 25.6343 46.5713 25.6871 46.5667 25.7398L46.1802 28.1934C46.1609 28.3018 46.273 28.4604 46.3657 28.4566L48.4491 28.3947C48.4728 28.3972 48.4958 28.4047 48.5164 28.4167C48.537 28.4287 48.5549 28.4449 48.5689 28.4643L50.6484 30.9295C50.745 31.0417 50.8571 31.0147 50.8378 30.8792L50.4513 27.9728C50.4513 27.9186 50.4513 27.8761 50.4861 27.8606L52.1365 26.9357Z" fill="#002985"/>
                            <path d="M110.219 83.8285L116.5 80.2758L116.558 80.2371C117.181 79.912 117.536 79.2116 117.536 78.3021V36.4479C117.49 35.526 117.225 34.6283 116.763 33.8294C116.302 33.0305 115.656 32.3534 114.881 31.8542L60.4197 0.387158C59.6467 -0.0578937 58.8736 -0.112074 58.2938 0.228487C58.2747 0.235153 58.2565 0.244258 58.2397 0.255577L51.8621 3.87017L52.2486 4.54355L58.5567 0.956049C58.588 0.945715 58.6179 0.931409 58.6456 0.913479C58.9896 0.685149 59.4843 0.735459 60.0332 1.0528L114.494 32.5083C115.151 32.9445 115.698 33.5273 116.091 34.2109C116.485 34.8945 116.715 35.6603 116.763 36.4479V78.2866C116.763 78.9445 116.547 79.4012 116.149 79.5715C116.106 79.5913 116.067 79.6174 116.033 79.6489L109.848 83.1551L110.219 83.8285Z" fill="#002985"/>
                            <path d="M109.419 84.0221C109.71 84.0243 109.997 83.9496 110.25 83.8054C110.842 83.4648 111.166 82.7798 111.162 81.8704V40.0394C111.119 39.1172 110.856 38.2188 110.395 37.4195C109.933 36.6202 109.287 35.9434 108.511 35.4457L54.0498 3.97084C53.2767 3.52192 52.5037 3.46 51.9277 3.80056C51.3518 4.14113 51.0156 4.82225 51.0156 5.73557V16.8851H51.7886V5.72783C51.7886 5.1125 51.9741 4.66745 52.3143 4.47008C52.6544 4.27271 53.1337 4.33463 53.6632 4.64036L108.136 36.1152C108.791 36.5492 109.337 37.1295 109.73 37.8104C110.123 38.4914 110.352 39.2544 110.401 40.0394V81.8781C110.401 82.4934 110.215 82.9385 109.875 83.1358C109.535 83.3332 109.06 83.2713 108.526 82.9617L76.8314 64.6449C76.7726 64.611 76.706 64.5931 76.6381 64.5931C76.5703 64.5931 76.5036 64.611 76.4449 64.6449L64.3622 71.6922V57.6634C64.3624 57.5952 64.3447 57.5282 64.3108 57.469C64.2768 57.4099 64.2279 57.3608 64.1689 57.3267L54.0652 51.4907C53.4105 51.0563 52.8653 50.4759 52.4723 49.7951C52.0793 49.1142 51.8493 48.3514 51.8002 47.5666V35.6624H51.0271V47.5666C51.0705 48.4886 51.3338 49.3869 51.7952 50.1861C52.2565 50.9854 52.9024 51.6623 53.6787 52.1603L63.5891 57.8879V72.3695C63.5895 72.437 63.6076 72.5033 63.6415 72.5616C63.6754 72.62 63.724 72.6685 63.7824 72.7023C63.8411 72.7363 63.9078 72.7541 63.9757 72.7541C64.0435 72.7541 64.1102 72.7363 64.1689 72.7023L76.642 65.4305L108.144 83.6196C108.527 83.8607 108.967 83.9992 109.419 84.0221Z" fill="#002985"/>
                            <path d="M97.5955 61.6919L100.205 60.1826H100.235C100.947 59.7685 101.349 58.8629 101.349 57.6865V49.3001C101.349 47.1716 100.092 44.78 98.4845 43.8512L44.5607 12.6356C44.2555 12.4272 43.9009 12.3029 43.5325 12.275C43.1642 12.2472 42.7949 12.3168 42.4619 12.477H42.4233L39.8142 13.994L40.2008 14.6635L42.7827 13.1658H42.8137C43.0325 13.0673 43.2733 13.028 43.512 13.0518C43.7507 13.0756 43.9791 13.1616 44.1742 13.3013L98.098 44.5052C99.4663 45.2792 100.576 47.4387 100.576 49.2847V57.6632C100.576 58.5688 100.305 59.2383 99.8257 59.5015L99.7871 59.5286L97.209 61.0185L97.5955 61.6919Z" fill="#002985"/>
                            <path d="M96.664 61.9551C96.9719 61.9572 97.2747 61.877 97.5414 61.7229C98.2526 61.3127 98.6584 60.4032 98.6584 59.2229V50.8559C98.6584 48.7313 97.4022 46.3357 95.7943 45.4069L41.8783 14.1914C41.5673 13.9782 41.2048 13.8527 40.8287 13.8282C40.4525 13.8037 40.0768 13.881 39.7408 14.0521C39.0335 14.4623 38.6238 15.3718 38.6238 16.5482V24.9191C38.6238 27.0437 39.8838 29.4354 41.4918 30.3642L95.4155 61.5797C95.7913 61.813 96.222 61.9425 96.664 61.9551ZM40.6182 14.5939C40.9246 14.6092 41.2222 14.701 41.4841 14.8609L95.4155 46.0803C96.7838 46.8543 97.8931 49.0099 97.8931 50.8559V59.2113C97.8931 60.1052 97.6264 60.7593 97.1626 61.0418C96.9431 61.1392 96.702 61.1772 96.4632 61.1521C96.2245 61.1269 95.9965 61.0395 95.802 60.8986L41.8783 29.6947C40.51 28.9207 39.3968 26.7612 39.3968 24.9191V16.5482C39.3968 15.6543 39.6635 15.0002 40.1274 14.7216C40.2769 14.6365 40.4462 14.5925 40.6182 14.5939Z" fill="#002985"/>
                            <path d="M59.782 38.0424C59.8459 38.0426 59.9091 38.0294 59.9676 38.0037C60.0631 37.9579 60.1409 37.882 60.1891 37.7876C60.2373 37.6932 60.2531 37.5855 60.2343 37.4812L59.8478 34.7722L61.3475 33.9479C61.4168 33.9089 61.4751 33.8529 61.517 33.7852C61.5589 33.7176 61.583 33.6404 61.5871 33.5609C61.5903 33.4529 61.5678 33.3457 61.5214 33.2481C61.475 33.1505 61.4061 33.0654 61.3204 32.9998L59.0013 31.2892L58.0118 28.2512C57.9766 28.1404 57.9114 28.0415 57.8233 27.9656C57.7353 27.8898 57.6279 27.8399 57.5132 27.8217C57.4257 27.8137 57.3378 27.8315 57.2603 27.8727C57.1827 27.9139 57.1188 27.9769 57.0764 28.0539L56.1758 29.6483L54.0963 28.7969C54.0076 28.7585 53.9091 28.7491 53.8147 28.7699C53.7204 28.7908 53.635 28.8408 53.5706 28.913C53.4981 29.0048 53.4568 29.1174 53.4526 29.2343C53.4485 29.3512 53.4817 29.4665 53.5474 29.5632L55.2095 32.396L54.823 34.78C54.8116 34.873 54.8202 34.9674 54.8482 35.0568C54.8762 35.1463 54.9229 35.2287 54.9853 35.2985C55.0363 35.3609 55.1006 35.4111 55.1735 35.4452C55.2464 35.4794 55.3261 35.4967 55.4066 35.4959L57.3586 35.434L59.3801 37.8295C59.428 37.8917 59.4887 37.9429 59.558 37.9796C59.6273 38.0163 59.7037 38.0377 59.782 38.0424ZM60.6479 33.4371L59.3028 34.1762C59.2165 34.2254 59.1477 34.3003 59.1062 34.3905C59.0646 34.4807 59.0522 34.5817 59.0708 34.6793L59.3337 36.5911L57.8765 34.869C57.8265 34.8037 57.7621 34.7509 57.6883 34.7146C57.6146 34.6784 57.5335 34.6597 57.4513 34.66L55.6076 34.718L55.9709 32.458C55.992 32.3142 55.9619 32.1676 55.8859 32.0439L54.5949 29.8418L56.1178 30.4688C56.2214 30.5132 56.3376 30.518 56.4444 30.4824C56.5513 30.4467 56.6414 30.373 56.6976 30.2753L57.432 28.9788L58.3094 31.5446C58.3539 31.673 58.4344 31.7859 58.5413 31.8697L60.6479 33.4371Z" fill="#002985"/>
                            <path d="M90.2361 55.6857C90.3002 55.6845 90.3634 55.67 90.4216 55.6431C90.5173 55.5986 90.5953 55.5234 90.6436 55.4295C90.6919 55.3357 90.7076 55.2284 90.6883 55.1246L90.3018 52.3962L91.8015 51.5719C91.8696 51.5318 91.9268 51.4755 91.9679 51.408C92.0091 51.3405 92.0329 51.2638 92.0373 51.1849C92.0416 51.0771 92.0199 50.9699 91.9742 50.8722C91.9285 50.7746 91.86 50.6893 91.7745 50.6237L89.4747 48.9132L88.4427 45.8984C88.4075 45.7876 88.3423 45.6887 88.2542 45.6128C88.1662 45.537 88.0588 45.4871 87.944 45.4689C87.857 45.4611 87.7696 45.4784 87.6922 45.5189C87.6148 45.5594 87.5506 45.6213 87.5073 45.6972L86.6144 47.2916L84.5388 46.4402C84.4505 46.3994 84.3513 46.3886 84.2564 46.4096C84.1614 46.4305 84.076 46.4821 84.0131 46.5563C83.9388 46.6486 83.8961 46.7624 83.8912 46.8808C83.8863 46.9993 83.9196 47.1161 83.986 47.2142L85.652 50.0471L85.2654 52.431C85.253 52.5241 85.2611 52.6188 85.2891 52.7083C85.3172 52.7979 85.3645 52.8803 85.4278 52.9496C85.4776 53.0124 85.5411 53.0628 85.6135 53.097C85.6859 53.1313 85.7652 53.1483 85.8452 53.147L87.801 53.0851L89.8225 55.4806C89.8721 55.5432 89.9349 55.5941 90.0064 55.6295C90.0779 55.665 90.1563 55.6842 90.2361 55.6857ZM91.1019 51.0843L89.7568 51.8234C89.6701 51.8721 89.6011 51.947 89.5594 52.0373C89.5178 52.1277 89.5057 52.2289 89.5249 52.3265L89.7839 54.2383L88.3306 52.5162C88.2804 52.4501 88.2154 52.3968 88.1409 52.3606C88.0664 52.3243 87.9844 52.306 87.9015 52.3072L86.0578 52.3652L86.4443 50.1051C86.4617 49.9615 86.4318 49.8162 86.3593 49.6911L85.0644 47.489L86.6105 48.116C86.7142 48.1595 86.8301 48.1639 86.9368 48.1283C87.0434 48.0927 87.1335 48.0196 87.1903 47.9225L87.9247 46.626L88.8021 49.1918C88.8467 49.3202 88.9272 49.4331 89.034 49.5169L91.1019 51.0843Z" fill="#002985"/>
                            <path d="M69.9398 43.9479C70.0041 43.9476 70.0674 43.933 70.1254 43.9054C70.2219 43.8619 70.3008 43.7869 70.3492 43.6927C70.3977 43.5985 70.4128 43.4907 70.3921 43.3868L70.0055 40.6778L71.5014 39.8535C71.5707 39.8144 71.629 39.7585 71.6709 39.6908C71.7128 39.6231 71.7369 39.546 71.741 39.4665C71.7449 39.3584 71.7226 39.2509 71.6762 39.1532C71.6298 39.0556 71.5605 38.9705 71.4743 38.9053L69.1784 37.1948L68.1425 34.18C68.1136 34.0692 68.0546 33.9686 67.9721 33.8893C67.8895 33.8101 67.7866 33.7553 67.6748 33.7311C67.5874 33.7232 67.4995 33.7409 67.4219 33.7821C67.3444 33.8234 67.2805 33.8863 67.238 33.9633L66.3336 35.5539L64.258 34.7063C64.169 34.6658 64.0693 34.6552 63.9739 34.6761C63.8784 34.6971 63.7923 34.7484 63.7284 34.8224C63.6565 34.9145 63.6155 35.027 63.6113 35.1437C63.6072 35.2605 63.64 35.3757 63.7052 35.4726L65.3557 38.3132L64.9692 40.6971C64.958 40.7901 64.9667 40.8845 64.9947 40.9739C65.0227 41.0633 65.0693 41.1457 65.1315 41.2157C65.1825 41.2781 65.2468 41.3282 65.3197 41.3624C65.3926 41.3966 65.4723 41.4139 65.5528 41.4131L67.5047 41.3512L69.5263 43.7312C69.5754 43.7952 69.6379 43.8477 69.7093 43.8851C69.7807 43.9225 69.8593 43.9439 69.9398 43.9479ZM70.8056 39.3426L69.4644 40.0818C69.3782 40.1312 69.3094 40.206 69.2672 40.2961C69.225 40.3861 69.2115 40.4869 69.2286 40.5849L69.4915 42.4967L68.0381 40.7745C67.9875 40.709 67.9225 40.656 67.8481 40.6197C67.7736 40.5835 67.6919 40.5649 67.6091 40.5655L65.7654 40.6236L66.1287 38.3635C66.1498 38.2198 66.1197 38.0732 66.0437 37.9494L64.7527 35.7474L66.2795 36.3782C66.3835 36.4223 66.5 36.4265 66.6069 36.3901C66.7139 36.3537 66.8037 36.2792 66.8593 36.1808L67.5898 34.8882L68.4711 37.454C68.5142 37.5832 68.5949 37.6964 68.703 37.7791L70.8056 39.3426Z" fill="#002985"/>
                            <path d="M80.0434 49.8073C80.1073 49.8083 80.1707 49.795 80.2289 49.7686C80.3252 49.7246 80.4042 49.6498 80.4532 49.5558C80.5022 49.4619 80.5185 49.3543 80.4995 49.25L80.113 46.5178L81.6088 45.6935C81.6781 45.6544 81.7364 45.5985 81.7783 45.5308C81.8202 45.4631 81.8443 45.386 81.8485 45.3065C81.8523 45.1984 81.83 45.0909 81.7836 44.9932C81.7372 44.8956 81.668 44.8105 81.5818 44.7453L79.2858 43.0348L78.2499 40.02C78.2165 39.9093 78.1522 39.8104 78.0645 39.735C77.9769 39.6595 77.8696 39.6107 77.7552 39.5943C77.6679 39.5845 77.5798 39.601 77.5019 39.6417C77.4241 39.6823 77.3602 39.7454 77.3184 39.8227L76.414 41.4171L74.3383 40.5657C74.2491 40.527 74.1499 40.5174 74.0549 40.5382C73.9598 40.5591 73.8737 40.6093 73.8088 40.6818C73.7369 40.7738 73.6959 40.8863 73.6917 41.0031C73.6875 41.1199 73.7204 41.235 73.7856 41.332L75.4476 44.1648L75.0611 46.5487C75.0479 46.6418 75.0556 46.7367 75.0837 46.8264C75.1117 46.9162 75.1595 46.9985 75.2235 47.0673C75.274 47.1292 75.3377 47.179 75.4099 47.2132C75.4821 47.2473 75.561 47.2649 75.6409 47.2647L77.5967 47.2028L79.6569 49.5983C79.7031 49.6583 79.7614 49.7078 79.828 49.7438C79.8946 49.7798 79.968 49.8014 80.0434 49.8073ZM80.9092 45.202L79.568 45.9411C79.4818 45.9906 79.4129 46.0654 79.3707 46.1554C79.3285 46.2454 79.3151 46.3463 79.3322 46.4442L79.6144 48.3754L78.161 46.6532C78.1098 46.5861 78.0437 46.5319 77.9678 46.495C77.892 46.458 77.8086 46.4393 77.7243 46.4404L75.8806 46.4984L76.2439 44.2383C76.2649 44.0946 76.2348 43.948 76.1588 43.8242L74.8679 41.6222L76.414 42.2492C76.5176 42.2927 76.6335 42.2971 76.7402 42.2615C76.8468 42.2259 76.9369 42.1528 76.9937 42.0556L77.7243 40.7476L78.6055 43.3095C78.6486 43.4387 78.7294 43.5519 78.8374 43.6346L80.9092 45.202Z" fill="#002985"/>
                            <path d="M50.4744 31.6259C50.527 31.6248 50.5792 31.6156 50.629 31.5988C50.6566 31.5898 50.6826 31.5768 50.7063 31.5601C50.7491 31.5347 50.7881 31.5034 50.8223 31.4672L50.8571 31.4169C50.8839 31.3735 50.9047 31.3266 50.9189 31.2776C50.9205 31.2622 50.9205 31.2466 50.9189 31.2311C50.9266 31.1759 50.9266 31.1199 50.9189 31.0647L50.5324 28.3557L52.0321 27.5314C52.0959 27.4927 52.1511 27.4413 52.1944 27.3805C52.2323 27.3193 52.257 27.2508 52.267 27.1796C52.2769 27.1083 52.272 27.0357 52.2524 26.9664C52.2181 26.8122 52.1305 26.6751 52.005 26.5794L49.6859 24.865L48.6539 21.8502C48.6281 21.7761 48.5903 21.7068 48.5418 21.6451C48.519 21.6153 48.4931 21.5881 48.4645 21.5639C48.4087 21.5103 48.3413 21.4702 48.2676 21.4467C48.1939 21.4232 48.1158 21.417 48.0393 21.4284C47.9724 21.4391 47.9087 21.4649 47.8532 21.5037C47.7976 21.5426 47.7516 21.5936 47.7185 21.6529V21.6877L46.8372 23.2357L44.7578 22.3843C44.67 22.3468 44.5728 22.3374 44.4795 22.3572C44.4362 22.3667 44.3945 22.3823 44.3558 22.4037C44.3331 22.4146 44.3123 22.429 44.2939 22.4462C44.2523 22.4767 44.2169 22.5148 44.1896 22.5585V22.5817C44.1642 22.6304 44.1459 22.6825 44.1355 22.7365C44.1123 22.8803 44.1426 23.0276 44.2205 23.1506L45.8825 25.9834L45.496 28.3673C45.4836 28.4604 45.4917 28.5551 45.5197 28.6447C45.5478 28.7343 45.5951 28.8166 45.6583 28.8859C45.7087 28.948 45.7724 28.998 45.8446 29.0322C45.9169 29.0663 45.9959 29.0838 46.0758 29.0833L48.0432 29.0252L50.0647 31.4208C50.1139 31.4829 50.176 31.5334 50.2468 31.5689C50.3176 31.6043 50.3953 31.6238 50.4744 31.6259ZM51.3441 27.0206L49.999 27.7597C49.9015 27.814 49.8273 27.9021 49.7903 28.0074C49.7633 28.0884 49.7553 28.1745 49.7671 28.259L50.0299 30.194L48.5727 28.4718C48.5229 28.4066 48.4585 28.354 48.3846 28.3184C48.3107 28.2828 48.2295 28.2651 48.1475 28.2667L46.3 28.3209L46.6865 26.0608C46.7075 25.9171 46.6774 25.7705 46.6015 25.6467L45.3066 23.4486L46.8025 24.0523C46.9066 24.0969 47.0234 24.1019 47.1309 24.0663C47.2384 24.0306 47.3292 23.9568 47.3861 23.8588L48.1166 22.5662L48.994 25.1281C49.0376 25.2571 49.1183 25.3702 49.2259 25.4532L51.3441 27.0206Z" fill="#002985"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_724_38435">
                            <rect width="78.9124" height="84.0219" fill="white" transform="matrix(-1 0 0 1 117.536 0)"/>
                            </clipPath>
                            </defs>
                            </svg>

                        </div>
                    </div>
                    <form name="formRating" id="formRating" method="post" autocomplete="off" action="<?php echo site_url('set-rating'); ?>" enctype="multipart/form-data">
						<div style="margin-top:5em">
								<p style="font-size: 14px; font-weight: 700; color: #002985;">
									Rate and Suggest
								</p>
								<p style="font-size: 12px; color: #002985;">
								Give ratings and suggestions for our services, so that we can better provide better services and always collaborate together in the logistics world
								</p>
							<div class="mt-4">
								<div class='rating-stars'>
									<ul id='stars'>
									<li class='star' title='Poor' data-value='1'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Fair' data-value='2'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Good' data-value='3'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Excellent' data-value='4'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='WOW!!!' data-value='5'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									</ul>
								</div>
								<input type="hidden" name="ratingValue" id="ratingValue" wajib="yes" readonly>
								<textarea name="ratingRemark" id="ratingRemark" style="border:none; max-height:5em; min-height:5em; background-color: #F8F8F9" class="form-control" placeholder="Write your suggest here" wajib="yes"></textarea>
								<button type="button" class="btn btn-info w-100 mt-2" onclick="doRating('formRating');">Send</button>
							</div>
						</div>
					</form>
            </div>
        </div>
		<?php endif; ?>
    </div>
</div>
<?php
    if($isRequirement['percentage'] < 100) 
    {
        ?>
            <div id="<?= rand(); ?>" class="main_profile_attribute_not_complete" data-width="820px;" data-percentage="<?= $isRequirement['percentage']; ?>" data-serial='<?= json_encode($isRequirement['requirement'], true); ?>' data-url="<?= site_url('welcome-registrant-profile'); ?>"></div>
        <?php
    }
?>
<script src="<?= base_url(); ?>assets/js/jquery.imagereader-1.1.0.js?v=<?= date("Ymdhis"); ?>"></script>
<script src="<?= base_url(); ?>assets/js/bestable.js?v=<?= date("Ymdhis"); ?>"></script>
<script>
    $(document).ready(function(){
        $('#v4-list-user-active').besTable({
            pagerSelector: '#v4-list-user-active-page',
            showPrevNext: true,
            hidePageNumbers: false,
            perPage: 8,
            ignoreHead: ['Action']
        });
        if($("#v4-list-driver-active").length > 0) {
            $('#v4-list-driver-active').besTable({
                pagerSelector: '#v4-list-driver-active-page',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 8,
                ignoreHead: ['Action']
            }); 
        }
        if($("#v4-list-vehicle-active").length > 0) {
            $('#v4-list-vehicle-active').besTable({
                pagerSelector: '#v4-list-vehicle-active-page',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 8,
                ignoreHead: ['Action']
            }); 
        }
        if($("#v4-list-onbehalf-customer-active").length > 0) {
            $('#v4-list-onbehalf-customer-active').besTable({
                pagerSelector: '#v4-list-onbehalf-active-page',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 8,
                ignoreHead: ['Attachment', 'Action']
            }); 
        }
        if($("#v4-list-factory-active").length > 0) {
            $('#v4-list-factory-active').besTable({
                pagerSelector: '#v4-list-factory-active-page',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 8,
                ignoreHead: ['Action']
            }); 
        }
        if($("#v4-list-garage-active").length > 0) {
            $('#v4-list-garage-active').besTable({
                pagerSelector: '#v4-list-garage-active-page',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 8,
                ignoreHead: ['Action']
            }); 
        }
        if($(".uploader").length > 0){
            $('#digitalStamp').imageReader({
                destination: '#image-preview',
                renderType: 'canvas',
                onload: function(canvas) {
                    $(canvas).css({
                        width: '100%',
                        marginBottom: '-10px'
                    });
                    $(".btn-additional-stamp").fadeIn();
                    $("#image-preview").css({
                        'margin': '0 auto',
                        'top': '16px'
                    }).width(192).height(192);
                    $(".drop").height(232);
                }
            });
        }
        if($(".main_profile_attribute_not_complete").length > 0) {
            if(parseInt($(".main_profile_attribute_not_complete").attr("data-percentage")) > 0) {
                var jsonParse = $(".main_profile_attribute_not_complete").attr("data-serial");
                var $data = {
                    csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content'),
                    attribute: JSON.parse(jsonParse)
                };
                var vWidth = $('.main_profile_attribute_not_complete').attr('data-width');
                $.ajax({
                    type: 'POST',
                    url: $(".main_profile_attribute_not_complete").attr('data-url'),
                    data: $data,
                    dataType: 'html',
                    beforeSend: function() {
                    },
                    complete: function() {
                    },
                    success: function(data) {
                        if (data) {
                            $(".logol___dialog").LogolModal({
                                size: vWidth,
                                message: data,
                                title: '',
                                buttonClose: false,
                                logo: false,
                            });
                        }
                    }
                });
            }
        }
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10);
            $(this).parent().children('li.star').each(function(e){
                if (e < onStar) {
                    $(this).addClass('hover');
                } else {
                    $(this).removeClass('hover');
                }
            });   
        }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
            $(this).removeClass('hover');
            });
        });
        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10);
            var stars = $(this).parent().children('li.star');
            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }
            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
            } else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            responseMessage(msg, ratingValue);
        });
    });
    function responseMessage(msg,ratingValue) {
        $('.success-box').fadeIn(200);  
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
        $('#ratingValue').val(ratingValue);
    }
    function swalert(type,message,time){
        if(time!=undefined) time = time;
        else time = 2000;
        if(type=="success"){
            Swal.fire({
                title: 'Logol',
                icon: 'success',
                html: message,
                timer:time,
                animation: true,
                allowOutsideClick: false,
                customClass: 'animated bounceIn'
            });
        }
        else if(type=="error"){
            Swal.fire({
                title: 'Logol',
                html: message,
                icon: 'error',
                animation: true,
                allowOutsideClick: false,
                customClass: 'animated shake'
            });
        }
    }
    function validation(form){
        var notvalid 	= 0;
        var notnumber 	= 0;
        var notemail 	= 0;
        var regnumber 	=/^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/;
        var regemail 	= /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        $.each($('#'+form+" input, #"+form+" textarea, #"+form+" select"), function(n,element){
            if($(this).attr('wajib')=="yes"){
                $(this).addClass('wajib');
                if($('#'+element.id).val()==""){
                    $("#"+element.id).addClass('is-invalid');
                    notvalid++;
                }else{
                    $("#"+element.id).removeClass('is-invalid');
                }
            }
            if($(this).attr('format')=="number" && (!regnumber.test($(this).val()) && $(this).val()!="")){
                $(this).addClass('format');
                notnumber++;
            }
            if($(this).attr('format')=="email"){
                if(regemail.test($(this).val()) == false){
                    $("#"+element.id).addClass('is-invalid');
                    notemail++;
                }else{
                    $("#"+element.id).removeClass('is-invalid');
                }
            }
        });
        if(notvalid > 0 || notnumber > 0 || notemail > 0){
            var errorString = "";
            if(notvalid > 0){
                errorString += 'There are required fields\n';
            }else if(notnumber > 0){
                errorString += 'Please check the number format\n';
            }else if(notemail > 0){
                errorString += 'Please check the email format\n';
            }
            swalert('error',errorString);
            return false;
        }else{
            return true;	
        }
        return false;
    }
    function doRating(form){
        if(validation(form)){
            Swal.fire({
                title: 'Confirm Form',
                text:'Do you want to process the data ?',
                icon: 'info',
                showCancelButton: true,
                closeOnConfirm:true,
                showLoaderOnConfirm:true,
                animation: false,
                customClass: 'animated bounceIn'
            }).then(function(result){
                if(result.value){
                    var arrform = new FormData(document.getElementById(form));
                    arrform.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
                    $.ajax({
                        type: 'POST',
                        url : $('[name="'+form+'"]').attr('action'),
                        data: arrform,
                        dataType : 'json',
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        beforeSend: function(){},
                        complete: function(){},
                        success: function(data){
                            var header = data.header,
                                dataInfo = data.data;
                            if(header.error){
                                swalert('error',header.message);
                                return false;
                            } else {
                                if(dataInfo.status.code == 200){
                                    if(dataInfo.redirect.action){
                                        swalert('success',header.message);
                                        setTimeout(function(){
                                            location.href = dataInfo.redirect.callBack;
                                        }, 2000);
                                        return false;
                                    }
                                } else {
                                    swalert('error',message);
                                    return false;
                                }
                            }
                        }
                    });	
                }else{
                    return false;
                }
            });
        }
    }
</script>