@extends('layouts.home.app')
@section('title-page', 'Forum')
@section('content')
<!-- Start About area -->
<div id="about" class="service-area area-padding" style="
background:#eee;
color: #708090;">
    
<div class="container">
      <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 mb-3">
          <div class="row text-left mb-5">
            <div class="col-lg-6 mb-3 mb-sm-0">
              <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" style="width: 100%;">
              <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
                <option> Categories </option>
                <option> Learn </option>
                <option> Share </option>
                <option> Build </option>
              </select>
              </div>
            </div>
            <div class="col-lg-6 text-lg-right">
              <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" style="width: 100%;">
                  <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" data-toggle="select" tabindex="-98">
                    <option> Filter by </option>
                    <option> Votes </option>
                    <option> Replys </option>
                    <option> Views </option>
                  </select>
              </div>
            </div>
          </div>
          <!-- End of post 1 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">Drupal 8 quick starter guide</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">20 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">KenyeW</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#C++</a> <a class="text-black mr-2" href="#">#AppStrap Theme</a> <a class="text-black mr-2" href="#">#Wordpress</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">141 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">122 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">290 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 1 -->
          <!-- End of post 2 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">54 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Development</a> <a class="text-black mr-2" href="#">#AppStrap Theme</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">256 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">251 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">223 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 2 -->
          <!-- End of post 3 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">Bootstrap 4 development in record time with AppStrap Bootstrap 4 Theme</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">32 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">AppStrapMaster</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Bootstrap 4</a> <a class="text-black mr-2" href="#">#Wordpress</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">245 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">116 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">257 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 3 -->
          <!-- End of post 4 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">Bootstrap 4 development in record time with AppStrap Bootstrap 4 Theme</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">29 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">Themelize.me</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Android</a> <a class="text-black mr-2" href="#">#Bootstrap 4</a> <a class="text-black mr-2" href="#">#Wordpress</a> <a class="text-black mr-2" href="#">#Drupal</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">49 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">29 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">170 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 4 -->
          <!-- End of post 5 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">Drupal 8 quick starter guide</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">53 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">Themelize.me</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#iOS</a> <a class="text-black mr-2" href="#">#Bootstrap 4</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">164 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">82 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">240 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 5 -->
          <!-- End of post 6 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-danger border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">Custom shortcut or command to launch command in terminal?</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">44 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Development</a> <a class="text-black mr-2" href="#">#C++</a> <a class="text-black mr-2" href="#">#Bootstrap 4</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">180 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">35 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">44 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 6 -->
          <!-- End of post 7 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">3 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#C++</a> <a class="text-black mr-2" href="#">#AppStrap Theme</a> <a class="text-black mr-2" href="#">#Drupal</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">236 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">79 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">162 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 7 -->
          <!-- End of post 8 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">Bootstrap 4 development in record time with AppStrap Bootstrap 4 Theme</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">46 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Development</a> <a class="text-black mr-2" href="#">#C++</a> <a class="text-black mr-2" href="#">#Drupal</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">130 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">121 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">191 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 8 -->
          <!-- End of post 9 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">41 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">KylieJ</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Android</a> <a class="text-black mr-2" href="#">#Bootstrap 4</a> <a class="text-black mr-2" href="#">#Wordpress</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">194 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">16 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">113 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 9 -->
          <!-- End of post 10 -->
          <div class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down</a>
                </h5>
                <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">30 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">AppStrapMaster</a></p>
                <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Android</a> <a class="text-black mr-2" href="#">#AppStrap Theme</a> <a class="text-black mr-2" href="#">#Wordpress</a> </div>
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">179 Votes</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">194 Replys</span> </div>
                  <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">167 Views</span> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /End of post 10 -->
          
         
        </div>
        <!-- Sidebar content -->
        <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
          <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div><div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;"><div class="sticky-inner">
            <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="#">Ask Question</a>
            <div class="bg-white mb-3">
              <h4 class="px-3 py-4 op-5 m-0">
                Active Topics
              </h4>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">Why Bootstrap 4 is so awesome? </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">39 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">AppStrapMaster</a></p>
              </div>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">Custom shortcut or command to launch command in terminal? </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">58 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
              </div>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">48 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
              </div>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">38 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
              </div>
              <hr class="m-0">
            </div>
            <div class="bg-white text-sm">
              <h4 class="px-3 py-4 op-5 m-0 roboto-bold">
                Stats
              </h4>
              <hr class="my-0">
              <div class="row text-center d-flex flex-row op-7 mx-0">
                <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"> <a class="d-block lead font-weight-bold" href="#">58</a> Topics </div>
                <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"> <a class="d-block lead font-weight-bold" href="#">1.856</a> Posts </div>
              </div>
              <div class="row d-flex flex-row op-7">
                <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"> <a class="d-block lead font-weight-bold" href="#">300</a> Members </div>
                <div class="col-sm-6 flex-ew text-center py-3 mx-0"> <a class="d-block lead font-weight-bold" href="#">DanielD</a> Newest Member </div>
              </div>
            </div>
          </div></div>
        </div>
      </div>
    </div>
</div>
@endsection
