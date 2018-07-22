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
						      <h2 class="section-title lh-82 fs-100 fw-7 pt-60">
							      Gallery
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
        

         <div class="page-inner pt-none">

            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">

                     <div class="tg-grid-wrapper camberra-grid tg-grid-loading tg-nav-under full-height mr-30 ml-30" id="camberra-grid" data-version="2.5.0">

                        <div class="tg-grid-sizer"></div>
                        <div class="tg-gutter-sizer"></div>
                        <div class="tg-grid-area-top2">
                           <div class="tg-filters-holder">
                              <div class="tg-filter tg-filter-active" data-filter="*">
                                 <span class="tg-filter-name">All <span class="tg-filter-count"></span></span>
                              </div>
                              <div class="tg-filter" data-taxo="portfolio_category" data-filter=".lectures">
                                 <span class="tg-filter-name">Lectures <span class="tg-filter-count"></span></span>
                              </div>
                              <div class="tg-filter" data-taxo="portfolio_category" data-filter=".newExecutives">
                                 <span class="tg-filter-name">New Executives<span class="tg-filter-count"></span></span>
                              </div>
                              <div class="tg-filter" data-taxo="portfolio_category" data-filter=".oldExecutives">
                                 <span class="tg-filter-name">Old Executives <span class="tg-filter-count"></span></span>
                              </div>
                              <div class="tg-filter" data-taxo="portfolio_category" data-filter=".handingOver">
                                 <span class="tg-filter-name">Handing Over <span class="tg-filter-count"></span></span>
                              </div>
                              <div class="tg-filter" data-taxo="portfolio_category" data-filter=".trip">
                                 <span class="tg-filter-name">Trip<span class="tg-filter-count"></span></span>
                              </div>
                           </div>
                        </div>
                        <div class="tg-grid-holder tg-layout-grid"
                             data-name="Camberra"
                             data-style="grid" data-row="1"
                             data-layout="vertical" data-rtl=""
                             data-fitrows="" data-filtercomb=""
                             data-filterlogic="AND" data-filterload=""
                             data-sortbyload="none" data-orderload="false"
                             data-fullwidth="true" data-fullheight="null"
                             data-gutters="[[320,28],[480,28],[690,28],[1000,28],[1300,28],[9999,28]]"
                             data-slider='{"itemNav":"null","swingSpeed":0.1,"cycleBy":"null","cycle":5000,"startAt":1}' data-ratio="1.33"
                             data-cols="[[320,1],[480,1],[690,2],[1000,2],[1300,3],[9999,4]]"
                             data-rows="[[320,200],[480,200],[690,220],[1000,220],[1300,240],[9999,240]]"
                             data-animation='{&quot;name&quot;:&quot;From Top Flip X&quot;,&quot;visible&quot;:&quot;perspective(2000px) translateY(0) rotate3d(1,0,0,0deg) scale(1)&quot;,&quot;hidden&quot;:&quot;translateY(-100px) rotate3d(1,0,0,90deg) scale(0.8)&quot;}'
                             data-transition="700ms"
                             data-ajaxmethod="load_more"
                             data-ajaxdelay="100"
                             data-preloader="true" data-itemdelay="100"
                             data-gallery="" data-ajax="">
	
	                        <?php
		
		                        $dir = scandir("img/portfolio/newExecutives/");
		
		                        for ( $i = 2; $i<count($dir); $i++){
			                        ?>
			                        <article class="tg-item camberra newExecutives tg-item-reveal" data-title="New Executive" data-none="0" data-row="1" data-col="1">
				                        <div class="tg-item-inner">
					                        <div class="tg-item-media-holder tg-light">
						                        <div class="tg-item-media-inner">
							                        <div class="tg-item-image" style='background-image: url(<?php echo "img/portfolio/newExecutives/". $dir[$i]?>'></div>
						                        </div>
						                        <div class="tg-item-content">
							                        <div class="tg-item-overlay" style="background-color:rgba(114,214,213,0.85)"></div>
							                        <div class="tg-center-holder">
								                        <div class="tg-center-inner">
									                        <a class="tg-item-link" href="#"></a>
									                        <h2 class="tg-item-title"><a href="#">Current Executive</a></h2>
									                        <span class="tg-cats-holder">
                                                <a class="portfolio_category" href="#" rel="category">
                                                   <span class="tg-item-term">2018/2018</span>
                                                </a>
                                             </span>
								                        </div>
							                        </div>
							                        <a class="tg-media-button" data-tolb-src='<?php echo "img/portfolio/newExecutives/". $dir[$i]?>' data-tolb-type="image" data-tolb-alt="Current Executive">
								                        <i class="tg-icon-arrows-out"></i>
							                        </a>
						                        </div>
					                        </div>
				                        </div>
			                        </article>
			                        <?php
		                        }
	                        ?>
	                        
	                        
	                        <?php
		                        
		                        $dir = scandir("img/portfolio/handingOver/");
		                        
		                        for ( $i = 2; $i<count($dir); $i++){
		                        	?>
			                        <article class="tg-item camberra handingOver tg-item-reveal"  data-title="Handing Over" data-none="0" data-row="1" data-col="1">
				                        <div class="tg-item-inner">
					                        <div class="tg-item-media-holder tg-light">
						                        <div class="tg-item-media-inner">
							                        <div class="tg-item-image" style='background-image: url(<?php echo "img/portfolio/handingOver/". $dir[$i]?>'></div>
						                        </div>
						                        <div class="tg-item-content">
							                        <div class="tg-item-overlay" style="background-color:rgba(114,214,213,0.85)"></div>
							                        <div class="tg-center-holder">
								                        <div class="tg-center-inner">
									                        <a class="tg-item-link" href="#"></a>
									                        <h2 class="tg-item-title"><a href="#">Handing Over</a></h2>
									                        <span class="tg-cats-holder">
                                                <a class="portfolio_category" href="#" rel="category">
                                                   <span class="tg-item-term">2017/2018</span>
                                                </a>
                                             </span>
								                        </div>
							                        </div>
							                        <a class="tg-media-button" data-tolb-src='<?php echo "img/portfolio/handingOver/". $dir[$i]?>' data-tolb-type="image" data-tolb-alt="Handing Over">
								                        <i class="tg-icon-arrows-out"></i>
							                        </a>
						                        </div>
					                        </div>
				                        </div>
			                        </article>
		                        	<?php
		                        }
	                        ?>
	
	                        <?php
		
		                        $dir = scandir("img/lectures/");
		
		                        for ( $i = 2; $i<count($dir); $i++){
			                        ?>
			                        <article class="tg-item camberra lectures tg-item-reveal"  data-title="Lectures" data-none="0" data-row="1" data-col="1">
				                        <div class="tg-item-inner">
					                        <div class="tg-item-media-holder tg-light">
						                        <div class="tg-item-media-inner">
							                        <div class="tg-item-image" style='background-image: url(<?php echo "img/lectures/".$dir[$i]?>'></div>
						                        </div>
						                        <div class="tg-item-content">
							                        <div class="tg-item-overlay" style="background-color:rgba(114,214,213,0.85)"></div>
							                        <div class="tg-center-holder">
								                        <div class="tg-center-inner">
									                        <a class="tg-item-link" href="#"></a>
									                        <h2 class="tg-item-title"><a href="#">Lectures</a></h2>
									                        <span class="tg-cats-holder">
                                                <a class="portfolio_category" href="#" rel="category">
<!--                                                   <span class="tg-item-term">2017/2018</span>-->
                                                </a>
                                             </span>
								                        </div>
							                        </div>
							                        <a class="tg-media-button" data-tolb-src='<?php echo "img/lectures/". $dir[$i]?>' data-tolb-type="image" data-tolb-alt="Handing Over">
								                        <i class="tg-icon-arrows-out"></i>
							                        </a>
						                        </div>
					                        </div>
				                        </div>
			                        </article>
			                        <?php
		                        }
	                        ?>
	
	                        <?php
		
		                        $dir = scandir("img/portfolio/oldExecutives/");
		
		                        for ( $i = 2; $i<count($dir); $i++){
			                        ?>
			                        <article class="tg-item camberra oldExecutives tg-item-reveal" data-title="Old Executive" data-none="0" data-row="1" data-col="1">
				                        <div class="tg-item-inner">
					                        <div class="tg-item-media-holder tg-light">
						                        <div class="tg-item-media-inner">
							                        <div class="tg-item-image" style='background-image: url(<?php echo "img/portfolio/oldExecutives/". $dir[$i]?>'></div>
						                        </div>
						                        <div class="tg-item-content">
							                        <div class="tg-item-overlay" style="background-color:rgba(114,214,213,0.85)"></div>
							                        <div class="tg-center-holder">
								                        <div class="tg-center-inner">
									                        <a class="tg-item-link" href="#"></a>
									                        <h2 class="tg-item-title"><a href="#">Old Executive</a></h2>
									                        <span class="tg-cats-holder">
                                                <a class="portfolio_category" href="#" rel="category">
                                                   <span class="tg-item-term">2017/2018</span>
                                                </a>
                                             </span>
								                        </div>
							                        </div>
							                        <a class="tg-media-button" data-tolb-src='<?php echo "img/portfolio/oldExecutives/". $dir[$i]?>' data-tolb-type="image" data-tolb-alt="Old Executive">
								                        <i class="tg-icon-arrows-out"></i>
							                        </a>
						                        </div>
					                        </div>
				                        </div>
			                        </article>
			                        <?php
		                        }
	                        ?>
	
	                        <?php
		
		                        $dir = scandir("img/portfolio/trip/");
		
		                        for ( $i = 2; $i<count($dir); $i++){
			                        ?>
			                        <article class="tg-item camberra trip tg-item-reveal"  data-title="Trip" data-none="0" data-row="1" data-col="1">
				                        <div class="tg-item-inner">
					                        <div class="tg-item-media-holder tg-light">
						                        <div class="tg-item-media-inner">
							                        <div class="tg-item-image" style='background-image: url(<?php echo "img/portfolio/trip/". $dir[$i]?>'></div>
						                        </div>
						                        <div class="tg-item-content">
							                        <div class="tg-item-overlay" style="background-color:rgba(114,214,213,0.85)"></div>
							                        <div class="tg-center-holder">
								                        <div class="tg-center-inner">
									                        <a class="tg-item-link" href="#"></a>
									                        <h2 class="tg-item-title"><a href="#">Trip</a></h2>
									                        <span class="tg-cats-holder">
                                                <a class="portfolio_category" href="#" rel="category">
<!--                                                   <span class="tg-item-term">2017/2018</span>-->
                                                </a>
                                             </span>
								                        </div>
							                        </div>
							                        <a class="tg-media-button" data-tolb-src='<?php echo "img/portfolio/trip/". $dir[$i]?>' data-tolb-type="image" data-tolb-alt="Trip">
								                        <i class="tg-icon-arrows-out"></i>
							                        </a>
						                        </div>
					                        </div>
				                        </div>
			                        </article>
			                        <?php
		                        }
	                        ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php
	include "includes/footer.inc.php";