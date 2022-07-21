<head>
    <!-- flatpickr css -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <style>
        .form-check-input[type="checkbox"] {
            border-radius: 0em;
        }
    </style>
</head>

<div class="row" style="background-color: white; padding: 15px;">
    <div class="col md-8">
        <div class="d-flex flex-wrap gap-2">
            <button type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5 2L8.25 10.25" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16.5 2L11.25 17L8.25 10.25L1.5 7.25L16.5 2Z" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg> Send by email</button>
            <button type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.1667 14.6667H15.8333C16.2754 14.6667 16.6993 14.4911 17.0118 14.1785C17.3244 13.866 17.5 13.442 17.5 13V9.66667C17.5 9.22464 17.3244 8.80072 17.0118 8.48816C16.6993 8.1756 16.2754 8 15.8333 8H4.16667C3.72464 8 3.30072 8.1756 2.98816 8.48816C2.67559 8.80072 2.5 9.22464 2.5 9.66667V13C2.5 13.442 2.67559 13.866 2.98816 14.1785C3.30072 14.4911 3.72464 14.6667 4.16667 14.6667H5.83333" stroke="#BFC9E0" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.1663 8V4.66667C14.1663 4.22464 13.9907 3.80072 13.6782 3.48816C13.3656 3.17559 12.9417 3 12.4997 3H7.49967C7.05765 3 6.63372 3.17559 6.32116 3.48816C6.0086 3.80072 5.83301 4.22464 5.83301 4.66667V8" stroke="#BFC9E0" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.4997 11.332H7.49967C6.5792 11.332 5.83301 12.0782 5.83301 12.9987V16.332C5.83301 17.2525 6.5792 17.9987 7.49967 17.9987H12.4997C13.4201 17.9987 14.1663 17.2525 14.1663 16.332V12.9987C14.1663 12.0782 13.4201 11.332 12.4997 11.332Z" stroke="#BFC9E0" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                </svg> Print</button>
            <button type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0003 13.832L13.3337 9.66536H10.8337V3.83203H9.16699V9.66536H6.66699L10.0003 13.832Z" fill="#BFC9E0" />
                    <path d="M16.667 15.5013H3.33366V9.66797H1.66699V15.5013C1.66699 16.4205 2.41449 17.168 3.33366 17.168H16.667C17.5862 17.168 18.3337 16.4205 18.3337 15.5013V9.66797H16.667V15.5013Z" fill="#BFC9E0" />
                </svg> Download</button>
        </div>
    </div>
    <div class="col-md-4">
        <input class="form-control" type="search" placeholder="Document Name" id="example-search-input">
    </div>
</div>

<div class="row" style="margin-top:10px;background-color:white;color:#868A92;">
    <div class="table-responsive">
        <table id="tableEtruck" class="table align-middle dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
            <thead>
                <tr class="bg-transparent">
                    <th style="width: 5%;">
                        <div class="form-check font-size-16">
                            <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                            <label class="form-check-label" for="checkAll"></label>
                        </div>
                    </th>
                    <th style="width: 70%;">Name</th>
                    <th style="width: 5%;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:5%;">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td style="width: 70%;"><a href="javascript: void(0);" class="text-dark fw-medium">POD-221144XVC_100721_LOG005.pdf</a> </td>
                    <td>
                        <a href="<?php echo base_url('detail-etrucking') ?>" type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">View</a>
                </tr>
                <tr>
                    <td style="width:5%;">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td style="width: 70%;"><a href="javascript: void(0);" class="text-dark fw-medium">POD-221144XVC_100721_LOG002.pdf</a> </td>
                    <td>
                        <a href="<?php echo base_url('detail-etrucking') ?>" type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">View</a>
                </tr>
                <tr>
                    <td style="width:5%;">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td style="width: 70%;"><a href="javascript: void(0);" class="text-dark fw-medium">POD-221144XVC_100721_LOG003.pdf</a> </td>
                    <td>
                        <a href="<?php echo base_url('detail-etrucking') ?>" type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">View</a>
                </tr>
                <tr>
                    <td style="width:5%;">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td style="width: 70%;"><a href="javascript: void(0);" class="text-dark fw-medium">POD-221144XVC_100721_LOG004.pdf</a> </td>
                    <td>
                        <a href="<?php echo base_url('detail-etrucking') ?>" type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">View</a>
                </tr>
                <tr>
                    <td style="width:5%;">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                    <td style="width: 70%;"><a href="javascript: void(0);" class="text-dark fw-medium">POD-221144XVC_100721_LOG001.pdf</a> </td>
                    <td>
                        <a href="<?php echo base_url('detail-etrucking') ?>" type="button" class="btn btn-outline-primary waves-effect waves-light" style=" border: 1px solid #405EA3;">View</a>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- end table responsive -->





    <!-- flatpickr js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/invoices-list.init.js"></script>

    <script src="assets/js/app.js"></script>

    <script>
        $('#tableEtruck').dataTable({
            paging: false,
            info: false,
            searching: false,
        });
    </script>