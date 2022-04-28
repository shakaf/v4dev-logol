<style>
    .form-floating .label-v4-pl-50 {
		padding-left: 1.50rem !important;
	}
	.form-floating input:focus {
		border-color: #0D51F1;
	}
    .btn-check:checked + .btn-outline-secondary{
        color: #0E0E2C;
        background-color: #E7EEFE;
        border: none;
        font-weight: 700;
        font-size: 12px;
    }
    .btn-check + .btn-outline-secondary{
        color: #0E0E2C;
        border: none;
        font-weight: 700;
        font-size: 12px;
    }
</style>

                <div class="page-content" style="background-color: white;">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12 col-sm-12" style="">
                                <div class="navbar" >
                                    <span><a href="#">Home</a> > <a href="#">SasS</a> > Create New Order</span>
                                </div>
                                <div class="nav-title mt-5">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                        <h4>E-Depot</h4>
                                        <span>Please fill this form correctly to make better experience</span>
                                        </div>
                                        <div class="col-md-6 col-sm-6" style="justify-content: end; text-align: end;">
                                        <h5 style="color: #4A4A68;font-weight: 400;
font-size: 12px;">Product Type</h5>
                                        <div>

                                        <div class="btn-group" style="" role="group" aria-label="Basic radio toggle button group">
                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked="">
                                                        <label class="btn btn-outline-secondary" for="btnradio4"><span>
<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6 7.50005L10.1925 3.29255C10.3894 3.09563 10.5001 2.82855 10.5001 2.55005C10.5001 2.27156 10.3894 2.00448 10.1925 1.80755C9.99558 1.61063 9.72849 1.5 9.45 1.5C9.17151 1.5 8.90442 1.61063 8.7075 1.80755L4.5 6.00005V7.50005H6Z" stroke="#497DF5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 2.5L9.5 4" stroke="#497DF5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.50001 3.53491C3.62553 3.66305 2.83187 4.11719 2.27832 4.80619C1.72477 5.49519 1.4523 6.36805 1.51558 7.2496C1.57887 8.13115 1.97323 8.95615 2.61952 9.55901C3.2658 10.1619 4.11619 10.498 5.00001 10.4999C5.84157 10.4998 6.65494 10.1966 7.29119 9.64574C7.92743 9.09489 8.34396 8.3333 8.46451 7.50041" stroke="#497DF5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span> &nbsp; 3PL</label>
                                                      
                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                                        <label class="btn btn-outline-secondary" for="btnradio4"><span>
<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6 7.50005L10.1925 3.29255C10.3894 3.09563 10.5001 2.82855 10.5001 2.55005C10.5001 2.27156 10.3894 2.00448 10.1925 1.80755C9.99558 1.61063 9.72849 1.5 9.45 1.5C9.17151 1.5 8.90442 1.61063 8.7075 1.80755L4.5 6.00005V7.50005H6Z" stroke="#497DF5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8 2.5L9.5 4" stroke="#497DF5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.50001 3.53491C3.62553 3.66305 2.83187 4.11719 2.27832 4.80619C1.72477 5.49519 1.4523 6.36805 1.51558 7.2496C1.57887 8.13115 1.97323 8.95615 2.61952 9.55901C3.2658 10.1619 4.11619 10.498 5.00001 10.4999C5.84157 10.4998 6.65494 10.1966 7.29119 9.64574C7.92743 9.09489 8.34396 8.3333 8.46451 7.50041" stroke="#497DF5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span> &nbsp; SaaS</label>
                                                      
                                                       
                                                    </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                
                                                    
                                                        <select class="form-select">
                                                            <option>Select Depot</option>
                                                            <option>BSA</option>
                                                        </select>
                                                    
                                                    
                                                
                                            </div>
                                            <?php if($isAdmin == true){ ?>
                                                <div class="col-lg-6">
                                                    
                                                        
                                                            <select class="form-select">
                                                                <option>Select Customer</option>
                                                                
                                                            </select>
                                                        
                                                        
                                                    
                                                </div>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>

                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne1">
                                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            General Requirement
                                            <span style="margin-left:82%;display:none;" id="done" class="badge badge-soft-success">DONE</span>
                                            </button>
                                            
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <form>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div>
                                                            <div class="mb-3">
                                                                <label class="form-label">NPWP <span style="color: #E05252;">*</span></label>
                                                                <select class="form-select"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                                                    <option>Select NPWP</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-4">
                                                        <div class="mt-3 mt-lg-0">
                                                            <div class="mb-3 ">
                                                                <label for="example-date-input" class="form-label">Internal Ref. Number</label>
                                                                <input class="form-control" type="text" placeholder="Input Here">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mt-3 mt-lg-0">
                                                            <div class="mb-3">
                                                                <label for="example-date-input" class="form-label">Delivery Order Number <span style="color: #E05252;">*</span></label>
                                                                <input class="form-control" type="text" placeholder="Input Here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mt-3 mt-lg-0">
                                                            <div class="mb-3">
                                                                <label for="example-date-input" class="form-label">Delivery Order Expiry Date <span style="color: #E05252;">*</span></label>
                                                                <input class="form-control" type="date" placeholder="Input Here" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mt-3 mt-lg-0">
                                                            <div class="mb-3">
                                                                <label for="example-date-input" class="form-label">Delivery Order Attachment <span style="color: #E05252;">*</span></label>
                                                                <input class="form-control" type="text" placeholder="Upload Here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mt-3 mt-lg-0">
                                                            <div class="mb-3">
                                                                <label for="example-date-input" class="form-label">Shipping Line <span style="color: #E05252;">*</span></label>
                                                                <select class="form-select">
                                                                    <option>Select Type</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <div class="mt-3 mt-lg-0">
                                                            <div class="mb-3">
                                                                <label for="example-date-input" class="form-label">Container Grade <span style="color: #E05252;">*</span></label>
                                                                <select class="form-select">
                                                                    <option>Select Grade</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                                <div align="right">
                                                    <button  type="button" onClick="nextSteps();" class="btn btn-info waves-effect waves-light"  data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">Next Step</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end accordion -->

                                <script>
                                    function nextSteps(){
                                        $("#done").show();
                                    }
                                </script>

                                <div class="accordion mt-3" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Container Details
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
                                                    <i class="mdi mdi-alert-outline align-middle me-3"></i><strong>Process Container</strong> - Please select container and add the quantity to process your order. You can add more container depends on your needs.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <table>
                                                                    <tr>
                                                                        <td rowspan="2"><img src="assets/images/icon/cont-20-dv.png" /></td>
                                                                        <td style="width:100%;">
                                                                            <select class="form-select" onchange="changeCont(this)" style="border:0;width:95px;font-weight:bold;">
                                                                                <option value="default"><b>Select Container</b></option>
                                                                                <option selected><b>20 Feet - General Purpose</b></option>
                                                                                <option><b>40 Feet - General Purpose</b></option>
                                                                                <option><b>45 Feet - High Cube</b></option>
                                                                                <option><b>20 Feet - Reefer</b></option>
                                                                                <option><b>40 Feet - Reefer High</b></option>

                                                                            </select>
                                                                            <label style="margin-left:8%;">General Purpose</label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
                                                                            <span onClick="counting('min', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">-</span>
                                                                            <span class="t_count" style="padding: 5px;"><label>0</label></span>
                                                                            <span onClick="counting('plus', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">+</span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <table>
                                                                    <tr>
                                                                        <td rowspan="2"><img src="assets/images/icon/cont-null.png" /></td>
                                                                        <td style="width:100%;">
                                                                            <select class="form-select" onchange="changeCont(this)" style="border:0;width:100%;font-weight:bold;">
                                                                                <option  value="default"><b>Select Container</b></option>
                                                                                <option><b>20 Feet - General Purpose</b></option>
                                                                                <option><b>40 Feet - General Purpose</b></option>
                                                                                <option><b>45 Feet - High Cube</b></option>
                                                                                <option><b>20 Feet - Reefer</b></option>
                                                                                <option><b>40 Feet - Reefer High</b></option>
                                                                            </select>
                                                                            <label style="margin-left:8%;">&nbsp;</label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
                                                                            <span onClick="counting('min', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">-</span>
                                                                            <span class="t_count" style="padding: 5px;"><label>0</label></span>
                                                                            <span onClick="counting('plus', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">+</span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <a href="javascript:void(0)">
                                                        <div class="card" style="border: 2px dashed #C2D4FC;box-sizing: border-box;">
                                                            <div class="card-body" align="center">
                                                            <label style="margin:0 auto;padding:15% 0">Add Container
                                                                            <span>
                                                                                
<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.0001 6.89941H3.14014V18.8994H19.9401V12.75" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.14453 10.9004L6.14453 14.9004" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.72119 10.8994L9.72119 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.2979 10.8994L13.2979 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.875 13.124L16.875 14.8997" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.78 10.9798C20.1658 10.9798 22.1 9.04571 22.1 6.65984C22.1 4.27397 20.1658 2.33984 17.78 2.33984C15.3941 2.33984 13.46 4.27397 13.46 6.65984C13.46 9.04571 15.3941 10.9798 17.78 10.9798Z" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.3398 6.65918H19.2198" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.7798 5.21973V8.09973" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                                                            </span>
                                                                            </label>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end accordion -->

                                
                                    <script>
                                        function changeCont(obj){
                                            if(obj.value == "default"){
                                                $(obj).parent().find("label").text("")
                                                $(obj).parent().find("select").css('width', '100%')
                                            }else{
                                                let split = obj.value.split("-");
                                                $(obj).parent().find("label").text(split[1].trim())
                                                $(obj).parent().find("select").css('width', '95px')
                                            }
                                        }

                                        function counting(act, obj){
                                            let vals = parseInt($(obj).parent().find("label").text())

                                            if(act == "min"){
                                                if(vals == 0){
                                                    $(obj).parent().find("label").text("0")
                                                }else{
                                                    $(obj).parent().find("label").text((vals-1));
                                                }
                                            }else{
                                                
                                                $(obj).parent().find("label").text((vals+1));
                                            }
                                        }
                                    </script>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            <div class="row mt-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row" style="text-align: end;">
                            <div class="col-lg-7">

                            </div>  
                            <div class="col-lg-3">
                                        <label>Total Order container : -</label>
                            </div>  
                            <div class="col-lg-2">
                            <button type="button" class="btn btn-info waves-effect waves-light">Continue</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            
 <!--  Extra Large modal example -->
 <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myExtraLargeModalLabel">On Behalf Customer</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
                <div class="row mb-2">
                <div class="col-md-10 col-sm-10">
                    <input type="text" class="form-control" />
                                    </div>
                    <div class="col-md-2 col-sm-2">
                    <a href="#"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl2">
                    <svg width="97" height="32" viewBox="0 0 97 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4C0 1.79086 1.79086 0 4 0H93C95.2091 0 97 1.79086 97 4V28C97 30.2091 95.2091 32 93 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4"/>
<path d="M32.3335 10V12.6667C32.3335 12.8435 32.4037 13.013 32.5288 13.1381C32.6538 13.2631 32.8234 13.3333 33.0002 13.3333H35.6668" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M34.3335 22H27.6668C27.3132 22 26.9741 21.8595 26.724 21.6095C26.474 21.3594 26.3335 21.0203 26.3335 20.6667V11.3333C26.3335 10.9797 26.474 10.6406 26.724 10.3905C26.9741 10.1405 27.3132 10 27.6668 10H32.3335L35.6668 13.3333V20.6667C35.6668 21.0203 35.5264 21.3594 35.2763 21.6095C35.0263 21.8595 34.6871 22 34.3335 22Z" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M31 15.3333V19.3333" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M29 17.3333H33" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M49.304 20H47.3268L50.3395 11.2727H52.7174L55.7259 20H53.7486L51.5626 13.267H51.4944L49.304 20ZM49.1805 16.5696H53.8509V18.0099H49.1805V16.5696ZM60.1101 20H57.0163V11.2727H60.1357C61.0135 11.2727 61.7692 11.4474 62.4027 11.7969C63.0362 12.1435 63.5234 12.642 63.8643 13.2926C64.2081 13.9432 64.38 14.7216 64.38 15.6278C64.38 16.5369 64.2081 17.3182 63.8643 17.9716C63.5234 18.625 63.0334 19.1264 62.3942 19.4759C61.7578 19.8253 60.9964 20 60.1101 20ZM58.8615 18.419H60.0334C60.5788 18.419 61.0376 18.3224 61.4098 18.1293C61.7848 17.9332 62.0661 17.6307 62.2536 17.2216C62.4439 16.8097 62.5391 16.2784 62.5391 15.6278C62.5391 14.983 62.4439 14.456 62.2536 14.0469C62.0661 13.6378 61.7862 13.3366 61.4141 13.1435C61.0419 12.9503 60.5831 12.8537 60.0376 12.8537H58.8615V18.419ZM69.0806 20H65.9868V11.2727H69.1061C69.984 11.2727 70.7396 11.4474 71.3732 11.7969C72.0067 12.1435 72.4939 12.642 72.8348 13.2926C73.1786 13.9432 73.3504 14.7216 73.3504 15.6278C73.3504 16.5369 73.1786 17.3182 72.8348 17.9716C72.4939 18.625 72.0038 19.1264 71.3646 19.4759C70.7283 19.8253 69.9669 20 69.0806 20ZM67.832 18.419H69.0038C69.5493 18.419 70.0081 18.3224 70.3803 18.1293C70.7553 17.9332 71.0365 17.6307 71.224 17.2216C71.4144 16.8097 71.5095 16.2784 71.5095 15.6278C71.5095 14.983 71.4144 14.456 71.224 14.0469C71.0365 13.6378 70.7567 13.3366 70.3845 13.1435C70.0124 12.9503 69.5536 12.8537 69.0081 12.8537H67.832V18.419Z" fill="#4A4A68"/>
</svg>
</a>

                    </div>

                </div>
				<table style="width:100%; font-size:12px;">
                    <tr>
                        <th>Onbehalf NPWP Number</th>
                        <th>Onbehalf NPWP Name</th>
                        <th>Onbehalf NPWP Address</th>
                        <th>Attachment</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>90.000.000.0-000.000</td>
                        <td>Rizki Fatimah</td>
                        <td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
                        <td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
                            <div class="mt-2">
                            <span>
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4"/>
<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
<span>
    
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white"/>
<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2"/>
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4"/>
</svg>

</span>
</div>
                        </td>
                    </tr>
                    <tr>
                        <td>90.000.000.0-000.000</td>
                        <td>Rizki Fatimah</td>
                        <td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
                        <td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
                            <div class="mt-2">
                            <span>
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4"/>
<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
<span>
    
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white"/>
<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2"/>
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4"/>
</svg>

</span>
</div>
                        </td>
                    </tr>
                    <tr>
                        <td>90.000.000.0-000.000</td>
                        <td>Rizki Fatimah</td>
                        <td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
                        <td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
                            <div class="mt-2">
                            <span>
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4"/>
<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
<span>
    
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white"/>
<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2"/>
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4"/>
</svg>

</span>
</div>
                        </td>
                    </tr>
                    <tr>
                        <td>90.000.000.0-000.000</td>
                        <td>Rizki Fatimah</td>
                        <td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
                        <td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
                            <div class="mt-2">
                            <span>
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4"/>
<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
<span>
    
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white"/>
<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2"/>
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4"/>
</svg>

</span>
</div>
                        </td>
                    </tr>
                    <tr>
                        <td>90.000.000.0-000.000</td>
                        <td>Rizki Fatimah</td>
                        <td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
                        <td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
                            <div class="mt-2">
                            <span>
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4"/>
<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
<span>
    
<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white"/>
<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2"/>
<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4"/>
</svg>

</span>
</div>
                        </td>
                    </tr>
                </table>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



 <!--  Extra Large modal example -->
 <div class="modal fade bs-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myExtraLargeModalLabel2">Add On Behalf Customer</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Onbehalf of Customer Name" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Onbehalf of Customer Number" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Upload Onbhealf Of Customer" />
                    </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label>Onbehalf NPWP Address</label>
                    </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <select class="form-control">
                            <option>Province</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control">
                            <option>City</option>
                        </select>
                    </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <select class="form-control">
                            <option>District</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control">
                            <option>Area</option>
                        </select>
                    </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Address" />
                    </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Postal Code" />
                    </div>
                    </div>
                </div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->