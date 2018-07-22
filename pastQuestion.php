<?php
	include "includes/header.inc.php";
	?>
<div class="wrapper">
        <!--Header-->
        <?php
		   include "includes/nav.inc.php";
	   ?>
        <!--End Header-->

        <div class="page">
                <section class="section-primary pt-120 pix-business-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 text-white">
                                <div class="clearfix pl-20 ">
                                    <h2 class="section-title lh-82 fs-75 fw-7 pt-60">
                                        Past Questions
                                    </h2>
                                    <div class="mb-15">
                                        <h5>
                                            <span class="pix_edit_text">
                                                <span class=" gray-dark-bg display-4">
			                           Information Technology Student Union
                                                </span>
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="page-inner pt-none mt-5">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="card m-b-30 m-t-30">
                                    <div class="card-body">
                                        <div class="accordion " id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-danger" type="button" data-toggle="collapse" data-target="#hnd" aria-expanded="true" aria-controls="hnd">
                                                           HND
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="hnd" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="accordion" id="hndLevelAccordion">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                            Level 100
                                                                        </button>
                                                                    </h5>
                                                                </div>

                                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#hndLevelAccordion">
                                                                    <div class="card-body">
                                                                        <div class="accordion" id="hndLevel100Sem">
                                                                            <div class="card">
                                                                                <div class="card-header" id="headingOne">
                                                                                    <h5 class="mb-0">
                                                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#sem1" aria-expanded="true" aria-controls="sem1">
                                                                                            Sem 1
                                                                                        </button>
                                                                                    </h5>
                                                                                </div>

                                                                                <div id="sem1" class="collapse" aria-labelledby="headingOne" data-parent="#hndLevel100Sem">
                                                                                    <div class="card-body">
                                                                                        Sem 1
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-header" id="headingTwo">
                                                                                    <h5 class="mb-0">
                                                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                                            SEm 2
                                                                                        </button>
                                                                                    </h5>
                                                                                </div>
                                                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#hndLevel100Sem">
                                                                                    <div class="card-body">
                                                                                        SEm 2
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#hndLevel200" aria-expanded="false" aria-controls="hndLevel200">
                                                                            Level 200
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="hndLevel200" class="collapse" aria-labelledby="headingTwo" data-parent="#hndLevelAccordion">
                                                                    <div class="card-body">
                                                                        HND Level 200
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="headingThree">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            Level 300
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#hndLevelAccordion">
                                                                    <div class="card-body">
                                                                        HND Level 300
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End HND -->


                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-danger collapsed" type="button" data-toggle="collapse" data-target="#diploma" aria-expanded="false" aria-controls="diploma">
                                                            Diploma
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="diploma" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Diploma
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-danger collapsed" type="button" data-toggle="collapse" data-target="#btech" aria-expanded="false" aria-controls="btech">
                                                            BTECH
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="btech" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        BTECH
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End column 2 -->
                            <div class="col-lg-8 ">
                                <?php
                                include 'pastQuestion/hnd/lvl100/sem1.php';
                                include 'pastQuestion/hnd/lvl100/sem2.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
<?php
	include "includes/footer.inc.php";