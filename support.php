<?php include('header.php') ?>


<!--<link href="assets/css/app.css" rel="stylesheet" type="text/css" />-->
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->

<div id="page-wrapper">


    <div class="row margin-btm-53">
        <div class="col-sm-12 top-53">
            <div class="col-sm-12">
                <div class="white-box text-al-center">
                    <div class="section-main-title"> Send US </div>
                    <div class="section-sub-title"> Submit Your Query Here </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body bottom-53">
                            <form action="#" class="form-horizontal form-bordered">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label font-wt-300 col-md-3">Name</label>
                                        <div class="col-md-9">
                                            <input placeholder="Name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label font-wt-300 col-md-3">Email</label>
                                        <div class="col-md-9">
                                            <input placeholder="Your Email Id" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label font-wt-300 col-md-3">Phone</label>
                                        <div class="col-md-9">
                                            <input placeholder="Your Contact Number" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label font-wt-300 col-md-3">Message</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" placeholder="About your queries" rows="3" id="form-1-5"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row text-al-right">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel">
                    <div class="panel-body">
                        <h3 class="card-title text-danger">Before Asking Us</h3>

                        <ul class="list arrow bullet-danger text-dark bg-white">
                            <li>Read the FAQ First!</li>
                            <li>Make sure that your query is not irrelivent from this system</li>
                            <li>Irrelivent query will be ignored, your id might be blocked for querying next time</li>
                            <li>You will get a reply soon</li>
                            <li>Notifying any system error, immediate action will be taken for</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// --- define plugin js
//$UploadPlug = array(
//    'assets/bower_components/sticky/jquery.sticky.js',
//    'assets/js/extras/faq.js'
//);


require_once ('footer.php');

?>
