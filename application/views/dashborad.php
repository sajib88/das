<?php include('header.php') ?>


<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->

<div id="page-wrapper">
    <!--    <div class="container-fluid">-->

    <div class="row">
        <!-- ============================================================== -->
        <!-- start right sidebar -->
        <!-- ============================================================== -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Search Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">


                    <div class="sttabs tabs-style-iconbox">
                        <nav>
                            <ul>
                                <li class="tab-current"><a href="#section-iconbox-1" class="sticon ti-home"><span>List Event</span></a></li>
                                <li><a href="#section-iconbox-2" class="sticon ti-settings"><span>Search In Event</span></a></li>
                            </ul>
                        </nav>
                        <div class="content-wrap">
                            <section id="section-iconbox-1" class="content-current">
                                <h3>List of Events</h3>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                            </section>

                            <section id="section-iconbox-2">
                                <h2>Tabbing 5</h2>
                            </section>
                        </div>
                        <!-- /content -->
                    </div>
                    <!-- /tabs -->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end right sidebar -->
        <!-- ============================================================== -->
    </div>

    <button class="right-side-toggle btn btn-info btn-circle set-position"><i class="fa fa-search"></i></button>

    <!-- START carousel-->

    <div class="row">

        <div id="carousel-example-captions" data-ride="carousel" class="carousel slide" style="backgroud:#000;">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                <li data-target="#carousel-example-captions" data-slide-to="2"></li>
            </ol>
            <div role="listbox" class="carousel-inner">
                <div class="item active"> <img src="<?php echo base_url(); ?>assets/plugins/images/slider/slider_image1.png" alt="First slide image">
                    <div class="carousel-caption">
                        <h1 class="text-white font-3vw font-wt-600 width-100">Day Long Workshop on Embracing SDGs and Climate Action held at BUP </h1>
                        <p class="text-white font-montserrat font-2vw font-wt-400 margin-btm-28"> [ 31 March, 2018] </p>
                        <button class="btn btn-default-onslider btn-outline font-montserrat font-1vw top-46">Gallery</button>
                    </div>
                </div>
                <div class="item"> <img src="<?php echo base_url(); ?>assets/plugins/images/slider/slider_image6.jpg" alt="Second slide image">
                    <div class="carousel-caption">
                        <h1 class="text-white font-3vw font-wt-600">Day Long Workshop on Embracing SDGs and Climate Action held at BUP </h1>
                        <p class="text-white font-montserrat font-2vw font-wt-400 margin-btm-28"> [ 31 March, 2018] </p>
                        <button class="btn btn-default-onslider btn-outline text-transparent font-montserrat font-1vw">Gallery</button>
                    </div>
                </div>
                <div class="item"> <img src="<?php echo base_url(); ?>assets/plugins/images/slider/slider_image1.png" alt="Third slide image">
                    <div class="carousel-caption">
                        <h1 class="text-white font-3vw font-wt-600">Day Long Workshop on Embracing SDGs and Climate Action held at BUP </h1>
                        <p class="text-white font-montserrat font-2vw font-wt-400 margin-btm-28"> [ 31 March, 2018] </p>
                        <button class="btn btn-default-onslider btn-outline text-transparent font-montserrat font-1vw">Gallery</button>
                    </div>
                </div>
            </div>
            <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
            <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
        </div>
    </div>

    <!-- END carousel-->

    <!-- Video-->
    <div class="row bg-event-summary ht-380">
        <button class="btn btn-default-onslider-video btn-outline text-transparent font-montserrat font-1vw set-position-video-btn">View More</button>
        <div class="col-md-6 no-padding-horizontal p-t-0 m-t-0">
            <video class="text-al-center" style="background:#000; min-height:380px" controls preload="auto" width="100%" poster="<?php echo base_url(); ?>assets/video/speaker1.jpg" data-setup="{}">
                <source src="<?php echo base_url(); ?>assets/video/car.mp4" type='video/mp4'>
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>

        <div class="col-md-6 bg-event-summary right-pdd-15">
            <h1 class="text-white text-al-left"><b> Dhaka, 31 March </b></h1>
            <h3 class="text-white text-al-left">
                A day-long workshop on the issue of climate change and
                sustainable development was held at Bangladesh University of Professionals (BUP),
                on 31st March 2018. The event was jointly organized by the Department of Law,
                Faculty of Security and Strategic Studies (FSSS), BUP and SDG Lab-Bangladesh.
                It was the third workshop organized by SDG Lab which is an initiative by a cohort of some
            </h3>
            <p class="text-al-center"><button class="btn btn-default-onslider btn-outline txt-color-white font-montserrat font-1vw">Read More</button></p>
        </div>

    </div>

    <!-- Speakers-->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box text-al-center margin-btm-0">
                <div class="section-main-title"> Speakers </div>
                <div class="section-sub-title"> Speakers of The Day </div>
            </div>
        </div>

        <div class="ppb_speaker_grid p-0">
            <div class="page_content_wrapper">
                <div id="" data-columns="6">
                    <div class="element grid one_fifth_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers1.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers1.jpeg" alt="John Doe" class="">
                            <div class="speaker_info_wrapper">
                                <h4>John Doe</h4>
                                <div class="speaker_desc">Founder Envato</div>
                            </div>
                        </a>
                    </div>
                    <div class="element grid one_fifth_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers2.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers2.jpeg" alt="Joanna Smith" class="">
                            <div class="speaker_info_wrapper">
                                <h4>Joanna Smith</h4>
                                <div class="speaker_desc">VP Design Apple</div>
                            </div>
                        </a>
                    </div>
                    <div class="element grid one_fifth_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers3.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers3.jpeg" alt="Luis Gallop" class="">
                            <div class="speaker_info_wrapper">
                                <h4>Luis Gallop</h4>
                                <div class="speaker_desc">Head Engineering Dell</div>
                            </div>
                        </a>
                    </div>
                    <div class="element grid one_fifth_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers4.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers4.jpeg" alt="Katie Stricker" class="">
                            <div class="speaker_info_wrapper"><h4>Katie Stricker</h4>
                                <div class="speaker_desc">Co-founder Blackbox</div>
                            </div>
                        </a>
                    </div>
                    <div class="element grid one_fifth_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers5.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers5.jpeg" alt="Espen Brunberg" class="">
                            <div class="speaker_info_wrapper">
                                <h4>Espen Brunberg</h4>
                                <div class="speaker_desc">Web Technologist</div>
                            </div>
                        </a>
                    </div>
                    <div class="element grid one_fifth_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers6.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers6.jpeg" alt="Espen Brunberg" class="">
                            <div class="speaker_info_wrapper">
                                <h4>Espen Brunberg</h4>
                                <div class="speaker_desc">Web Technologist</div>
                            </div>
                        </a>
                    </div>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>

    <!-- Imaages-->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box text-al-center margin-btm-0">
                <div class="section-main-title"> Gallery </div>
                <div class="section-sub-title"> Images of The Day </div>
            </div>
        </div>

        <div class="ppb_gallery_grid p-0">
            <div class="page_content_wrapper">
                <div id="" class="bg-white" data-columns="6">
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers1.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers1.jpeg" alt="John Doe" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers2.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers2.jpeg" alt="Joanna Smith" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="assets/image/speakers/speakers3.jpeg">
                            <img src="assets/image/speakers/speakers3.jpeg" alt="Luis Gallop" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers4.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers4.jpeg" alt="Katie Stricker" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers5.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers5.jpeg" alt="Espen Brunberg" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers4.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers4.jpeg" alt="Espen Brunberg" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers5.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers5.jpeg" alt="Espen Brunberg" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers6.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers6.jpeg" alt="Katie Stricker" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers1.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers1.jpeg" alt="John Doe" class="">
                        </a>
                    </div>
                    <div class="element grid one_gallery_bg">
                        <a class="speaker_grid_link" href="<?php echo base_url(); ?>assets/image/speakers/speakers2.jpeg">
                            <img src="<?php echo base_url(); ?>assets/image/speakers/speakers2.jpeg" alt="Katie Stricker" class="">
                        </a>
                    </div>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>

    <!-- Audios-->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box text-al-center margin-btm-0">
                <div class="section-main-title"> Audios </div>
                <div class="section-sub-title"> Audios of The Event </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box top-pdd-5 no-padding-vertical margin-btm-0">
                    <div class="tablesaw-bar mode-swipe tablesaw-all-cols-visible">
                        <div class="tablesaw-advance">
                            <a href="#" class="tablesaw-nav-btn btn btn-micro left disabled" title="Previous Column"></a>
                            <a href="#" class="tablesaw-nav-btn btn btn-micro right disabled" title="Next Column"></a>
                        </div>
                    </div>

                    <table class="tablesaw table-bordered table tablesaw-swipe full-color-table full-dark-table hover-table" data-tablesaw-mode="swipe" id="table-6280" style="">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" width="4%">No.</th>
                            <th scope="col" colspan="" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="tablesaw-cell-persist table-date-hide">File Name</th>
                            <th scope="col" colspan="2" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="tablesaw-cell-persist text-al-center">Play Audio</th>
                        </tr>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td class="table-date-hide"><a href="#" data-toggle="modal" data-target="#modal-sound" class="txt-color-white">Titanic<p class="font-10">Uploaded By: Mr. Zaman &nbsp Date: 26.3.09</p></a></td>
                            <td class="title tablesaw-cell-persist top-pdd-10">
                                <audio id="music1" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>
                            <td class="table-date-hide top-pdd-10"><a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a></td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td class="table-date-hide"><a href="#" data-toggle="modal" data-target="#modal-sound" class="txt-color-white">Titanic<p class="font-10">Uploaded By: Mr. Zaman &nbsp Date: 26.3.09</p></a></td>
                            <td class="title tablesaw-cell-persist top-pdd-10">
                                <audio id="music2" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>
                            <td class="table-date-hide top-pdd-10"><a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a></td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td class="table-date-hide"><a href="#" data-toggle="modal" data-target="#modal-sound" class="txt-color-white">Titanic<p class="font-10">Uploaded By: Mr. Zaman &nbsp Date: 26.3.09</p></a></td>
                            <td class="title tablesaw-cell-persist top-pdd-10">
                                <audio id="music3" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>
                            <td class="table-date-hide top-pdd-10"><a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a></td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td class="table-date-hide"><a href="#" data-toggle="modal" data-target="#modal-sound" class="txt-color-white">Titanic<p class="font-10">Uploaded By: Mr. Zaman &nbsp Date: 26.3.09</p></a></td>
                            <td class="title tablesaw-cell-persist top-pdd-10">
                                <audio id="music4" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>
                            <td class="table-date-hide top-pdd-10"><a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a></td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td class="table-date-hide"><a href="#" data-toggle="modal" data-target="#modal-sound" class="txt-color-white">Titanic<p class="font-10">Uploaded By: Mr. Zaman &nbsp Date: 26.3.09</p></a></td>
                            <td class="title tablesaw-cell-persist top-pdd-10">
                                <audio id="music5" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>
                            <td class="table-date-hide top-pdd-10"><a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Documetnts-->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box text-al-center margin-btm-0">
                <div class="section-main-title"> Documents </div>
                <div class="section-sub-title"> Documents of The Event </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box top-pdd-5 no-padding-vertical margin-btm-0">
                    <div class="tablesaw-bar mode-swipe tablesaw-all-cols-visible">
                        <div class="tablesaw-advance">
                            <a href="#" class="tablesaw-nav-btn btn btn-micro left disabled" title="Previous Column"></a>
                            <a href="#" class="tablesaw-nav-btn btn btn-micro right disabled" title="Next Column"></a>
                        </div>
                    </div>

                    <table class="tablesaw table-bordered table tablesaw-swipe full-color-table full-inverse-table hover-table" data-tablesaw-mode="swipe" id="table-6280" style="">
                        <thead>
                        <tr>
                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" width="4%">No.</th>
                            <th scope="col" colspan="2" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="tablesaw-cell-persist">File Name</th>
                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="" class="table-date-hide">Date</th>
                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" width="1%"></th>
                            <th scope="col" colspan="4" data-tablesaw-sortable-col="" data-tablesaw-priority="persist" class="tablesaw-cell-persist text-al-center">Action</th>
                            <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3" width="4%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td width="3%"><span class="fa fa-file-word-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Avatar<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td width="3%"><span class="fa fa-file-excel-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Titanic<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td><span class="fa fa-file-pdf-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">The Avengers<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td><span class="fa fa-file-powerpoint-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Harry Potter and the Deathly Hallows—Part 2<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td><span class="fa fa-file-word-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Frozen<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td><span class="fa fa-file-word-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Iron Man 3<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td><span class="fa fa-file-word-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Transformers: Dark of the Moon<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td><span class="fa fa-file-word-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Skyfall<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td><span class="fa fa-file-word-o font-25 top-pdd-5"> </span></td>
                            <td class="title tablesaw-cell-persist"><a href="javascript:void(0)" class="txt-color-white">Transformers: Age of Extinction<p class="font-10">Uploaded By: Mr. Zaman</p></a></td>
                            <td class="table-date-hide">26.3.09</td>
                            <td></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-eye font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-pencil-square-o font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)"><span class="fa fa-download font-15"> </span></a></td>
                            <td width="1%"><a href="javascript:void(0)" class="txt-title-color-red"><span class="fa fa-trash-o font-15"> </span></a></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>




</div>

<script>

    function call_modal(file_name)
    {
//        var url = '<?php //echo base_url(); ?>/assets/video/' + file_name;
//        alert(file_name);
//        video.pause();
//        $('#play_video').attr('src', url);
        $('#modal-video').modal('show');
//        video.load();
//        video.play();

    }

</script>

<style>
    .smallvjs{
        width: 105px !important;
        height: 65px  !important;
    }
    .video-js {
        width: 100% !important;
    }
    .imageblok{
        padding: 66px;
    }

</style>


<div class="modal fade" id="modal-video">
    <div class="modal-dialog modal-video" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="padding-15">
                    <div class="row">
                        <video id="my-video" class="video-js" controls preload="auto" height="305px"
                               poster="<?php echo base_url(); ?>assets/video/StoryVideo_PosterFrame.jpg" data-setup="{}">
                            <source id="play_video" src="<?php echo base_url(); ?>assets/video/bup_ad2.mp4" type='video/mp4'>
                            <source src="MY_VIDEO.webm" type='<?php echo base_url(); ?>assets/video/video/webm'>
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-sound1">
    <div class="modal-dialog modal-sound" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="padding-15">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="white-box mrg-btm-30">Information This Audio File</h4>
                            <ul class="list arrow bullet-danger">
                                <li>Upload By Admin</li>
                                <li>Uploaded 2-2-2018</li>
                                <li>Category : BUP EVENT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery for carousel -->
<!--            <script src="assets/plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>-->
<!--            <script src="assets/plugins/bower_components/owl.carousel/owl.custom.js"></script>-->

<!--Lightbox-->
<!--<script src="/page_javascript/dashboard/lightbox.js"></script>-->


<?php include('footer.php') ?>
