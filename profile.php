<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/aos.css" rel="stylesheet">
    <link href='assets/css/font-awsome.min.css' rel='stylesheet'>
</head>

<body class="ovrflw">

<?php include 'loader.php';?>

    <div id="layout-wrapper">

    <header class="top-header">
        <div class="header-div">
            <a href="published-event.php">
                <div class="backtohome">
                    <i class="bx bx-arrow-back back-arrow"></i>
                </div>
            </a>
            <div class="header-title">
                <h4>Profile</h4>
                <ul>
                    <li><a href="home.php">Home</a> /</li>
                    <li>Profile</li>
                </ul>
            </div>
        </div>
        <div class="header-right-btns">
            <?php
                include 'options-buttons.php';
            ?>
        </div>
    </header>


        <div class="container pad-of-settings-box">
            <div class="settings-box-bg">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
        
                                <div class="form-grp">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
        
                            </div>
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3 user-pro">
                        <div class="img-upload-form">
                            <img src="assets/images/users/default.png" id="upld-image1">
                            <i class="bx bxs-pencil" onclick="makeimg(1)" ;></i>
                            <input type="file" oninput="previewFile(1)" accept="image/*" id="imgfile1" />

                        </div>


                    </div>

          
                    

                    <div class="col-lg-12 text-center  d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50" data-bs-toggle="modal" data-bs-target="#invite-speaker">
                            CHANGE
                        </button>
                    </div>

                </div>

            </div>

        </div>



    </div>



    <!-- Event create Modal -->
    <div class="modal fade" id="event-create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/calendar-modal.svg" alt=""><span>Create your Event</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Event name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Enter here">
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Select Language</label>
                        <div class="select-inp">
                            <select class="form-control">
                                            
                                <option value="AK">English</option>
                                <option value="HI">Arabic</option>                          
                                <option value="CA">Spanish</option>
                                <option value="NV">Hindi</option>                        
                        </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>

                    </div>
                    <div class="form-grp">
                        <label class="form-label">Event Type</label>
                        <div class="row event-type radio-check-function">
                            <div class="col-md-4">
                                <div class="form-check active">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                    <label class="form-check-label" for="formRadios1">
                                        Location Based
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                        Online Event
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                        Hybrid Event
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-grp">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Start Date</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="01 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                    <span class="input-group-text"><img src="assets/images/input-cal.svg" alt=""></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Start Time</label>
                                <div class="input-group" id="timepicker-input-group1">
                                    <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                    <span class="input-group-text"><img src="assets/images/input-time.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">End Date</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="05 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                    <span class="input-group-text"><img src="assets/images/input-cal.svg" alt=""></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">End Time</label>
                                <div class="input-group" id="timepicker-input-group1">
                                    <input id="timepicker2" type="text" class="form-control" data-provide="timepicker">
                                    <span class="input-group-text"><img src="assets/images/input-time.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="conference.php"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md">Create</button></a>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/libs/datepicker/datepicker.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/saas-dashboard.init.js"></script>
    <script src="assets/js/pages/apexcharts.init.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>



    <script>
        var $radioButtons = $('.radio-check-function input[type="radio"]');
        $radioButtons.click(function() {
            $radioButtons.each(function() {
                $(this).parent().toggleClass('active', this.checked);
            });
        });
    </script>


        <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 100)

        })
    </script>
        <!-- profile image upload js -->
       <script>
        function makeimg(val1) {

            document.getElementById("imgfile" + val1).click();
        }

        function previewFile(value) {

            const preview = document.getElementById('upld-image' + value);
            const file = document.getElementById("imgfile" + value).files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>

</body>

</html>