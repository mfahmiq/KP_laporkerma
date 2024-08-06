
<!DOCTYPE html>
<html>
<head>
	<title>LAPORKERMA | Official Site</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Sistem Pelaporan Kerjasama (LAPORKERMA) merupakan layanan informasi dan pendataan data kerjasama Perguruan Tingggi dengan mitra dalam negeri maupun luar negeri.">
	<meta name="keywords" content="">
	<meta name="author" content="Muchamad Nur Rochim">
	
    <link rel="shortcut icon" href="https://laporankerma.kemdikbud.go.id/favicon.ico" type="image/x-icon" />

	<!-- Main styles-->    
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

	<!--Packages styles-->
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/ladda/css/ladda.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/ladda/css/ladda-themeless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/sweetalert/css/sweetalert.css') }}" rel="stylesheet" type="text/css">
   
<link rel="stylesheet" href="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flag-icon/css/flag-icon.min.css" type="text/css" />
<link rel="stylesheet" href="https://laporankerma.kemdikbud.go.id/application/assets/vendor/owl.carousel/owl.theme.default.min.css" type="text/css" />
<link rel="stylesheet" href="https://laporankerma.kemdikbud.go.id/application/assets/vendor/owl.carousel/owl.carousel.min.css" type="text/css" />

    <!--Theme styles-->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

	<!-- Main scripts-->
    <script src="{{ asset('assets/js/jquery-2.1.1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/inspinia.js') }}" type="text/javascript"></script>
	
    
	<!--Packages scripts-->
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jasny/jasny-bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/metisMenu/jquery.metisMenu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/slimscroll/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/validate/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/ladda/js/spin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/ladda/js/ladda.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/ladda/js/ladda.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/sweetalert/js/sweetalert.min.js') }}" type="text/javascript"></script>
    <script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flot/excanvas.min.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flot/jquery.flot.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flot/jquery.flot.tooltip.min.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flot/jquery.flot.stack.min.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/flot/jquery.flot.symbol.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/chartJs/Chart.min.js" type="text/javascript"></script>
<script src="https://laporankerma.kemdikbud.go.id/application/assets/vendor/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="https://www.googletagmanager.com/gtag/js?id=G-9MBT93MN0H" type="text/javascript" async></script><script type="text/javascript" >window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-9MBT93MN0H');</script>
	
<!--Theme scripts-->
<script src="{{ asset('assets/js/common.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
	
	<!-- css custom -->
	<style>

		body.skin-3 {
			background-image: linear-gradient(#3e2c42 50%, #1a0120);
			background-attachment: fixed;
		}
		.skin-3 .nav-header {
			padding: 20px 10px 10px 10px;
			background-color: #ecba52;
    		background-image: url(https://laporankerma.kemdikbud.go.id/application/themes/inspinia/assets/css/patterns/header-profile-golden.jpeg);
			background-size: cover;
		}
    
		.caption-title {
			border-bottom: 2px solid #1c84c6;
		}

		.dataTables_wrapper .dataTables_paginate .paginate_button {
			padding: unset;
		}

		.select2-container {
			width: 100% !important;
			padding: 0;
		}
		
		.modal-open > .select2-container {
			z-index: 9999 !important;
		}
		.select2-container .select2-selection__rendered > *:first-child.select2-search--inline,
		.select2-container .select2-selection__rendered > *:first-child.select2-search--inline .select2-search__field {
			width: 100% !important;
		}
		.select2-container--default .select2-selection--single {
			width: 100% !important;
			border-radius:0px !important;
			border:1px solid #e5e6e7 !important; 
			transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
			font-size: 14px;
			height: 36px;
			padding-top:3px !important;
			overflow: hidden !important;
		}

		.ellipsis,
		.select2-selection__rendered {
			word-wrap: break-word !important;
			text-overflow: inherit !important;
			white-space: normal !important;
			overflow: hidden !important;
		}

	</style>
</head>

<body class="skin-3">
<div id="wrapper">
		
    @include('sidebar')
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
		<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
							</div>
            <!-- right side -->
			<ul class="nav navbar-top-links navbar-right text-right m-sm ">
				<li>
					<div class="btn-group">
						<button class="btn btn-sm btn-link btn-bitbucket dropdown-toggle" data-toggle="dropdown" href="#">
							<span class="m-r-md text-muted">Selamat Datang, <b>Leni Fitriani</b>
							<span class="caret"></span></span>
						</button>
							
						<!-- Dropdown Menu -->
						<ul class="dropdown-menu animated fadeInDown m-t-md">
							<li><a href="https://laporankerma.kemdikbud.go.id/user/profile">Profile</a></li>
														<li><div class="btn-group">
								<a class="btn btn-success m-n" href="https://laporankerma.kemdikbud.go.id/" ><i class="fa fa-home"></i></a>
								<a class="btn btn-primary m-n" href="https://laporankerma.kemdikbud.go.id/auth/logout" ><i class="fa fa-sign-out"></i> Logout</a>
							</li>
						</ul>
					</div>
				</li>
				
            </ul>  
        </nav>
        </div>

		
<!--page title & breadcrumb-->
		

<!--main  content-->
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
	        
                <div class="row wrapper ">
            <div class="carousel-section owl-carousel" >
                            <div class="item">
                	
	<div id="WG66b0f21ee3273" class="">

	<div class="widget style1 blue-bg">
		<div class="row">
			<div class="col-xs-4">
				<i class="fa fa-handshake-o fa-4x"></i>
			</div>
			<div class="col-xs-8 text-right">
				<h4>Memorandum of Understanding</h4>
				<h2 class="font-bold total"><!-- total --></h2>
			</div>
		</div>
	</div>


  
</div>


                </div>
                            <div class="item">
                	
	<div id="WG66b0f21ee32a4" class="">
	<div class="widget style1 lazur-bg">
		<div class="row">
			<div class="col-xs-4">
				<i class="fa fa-file-o fa-5x"></i>
			</div>
			<div class="col-xs-8 text-right">
				<h4>Memorandum of Aggrement</h4>
				<h2 class="font-bold total"><!-- total --></h2>
			</div>
		</div>
	</div>

  
</div>


                </div>
                            <div class="item">
                	
	<div id="WG66b0f21ee32c3" class="">
	<div class="widget style1 navy-bg">
		<div class="row">
			<div class="col-xs-4">
				<i class="fa fa-bullseye fa-5x"></i>
			</div>
			<div class="col-xs-8 text-right">
				<h4>Implementation Arrangement</h4>
				<h2 class="font-bold total"><!-- total --></h2>
			</div>
		</div>
	</div>

  
</div>


                </div>
                        </div>
            <script>
            $('.carousel-section').ready(function() {
                $('.carousel-section').owlCarousel({
                        loop: true,
                        margin: 30,
                        stagePadding: 0,
                        autoplay:true,
                        autoplayTimeout:2000,
                        autoplayHoverPause:true,
                        animateOut: 'slideOutDown',
                           animateIn: 'flipInX',
                        responsiveClass:true,
                        responsive:{
                            0:{ items: 1 },
                            600:{ items: 2 },
                            1000:{ items: 3 }
                        }
                });
        
                
	$(function() {
		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/mou",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				var data = response.data;
				$("#WG66b0f21ee3273 > ").find(".total").html(number_format(data.total,0,',','.'));
				$("#WG66b0f21ee3273 > ").find(".stat-percent > .grow").html(data.grow);
				$("#WG66b0f21ee3273 > ").find(".stat-percent > i").addClass("fa-level-up");
			}
		});
	});

  
	$(function() {
		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/moa",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				var data = response.data;
				$("#WG66b0f21ee32a4 > ").find(".total").html(number_format(data.total,0,',','.'));
				$("#WG66b0f21ee32a4 > ").find(".stat-percent > .grow").html(data.grow);
				$("#WG66b0f21ee32a4 > ").find(".stat-percent > i").addClass("fa-level-up");
			}
		});
	});

  
	$(function() {
		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/ia",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				var data = response.data;
				$("#WG66b0f21ee32c3 > ").find(".total").html(number_format(data.total,0,',','.'));
				$("#WG66b0f21ee32c3 > ").find(".stat-percent > .grow").html(data.grow);
				$("#WG66b0f21ee32c3 > ").find(".stat-percent > i").addClass("fa-level-up");
			}
		});
	});

              });
            
            </script>
        </div>
                
        
                
                <div class="row wrapper wrapper-content white-bg">
            
<style>
img.profile-avatar {
    border-radius: 50%;
    padding:0;
    width: 80px;
    height: 80px;
    position: relative;
    top: 150px;
    left: 12px;
}
.profile-content .progress-bar {
    width:100%;
    height:16px;
    opacity:.2;
}
.profile-desc > dt {
    float: left;
}
.profile-desc > dd {
    margin-left: 30px;
    margin-bottom: 5px;
}
.profile-banner  {
    background: url('https://laporankerma.kemdikbud.go.id/application/assets/img/background_01.jpg') no-repeat center top;
    background-size: cover !important;
    height: 200px;
}
</style>

<div id="WG66b0f21ee32e0" class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
    <div class="ibox float-e-margins">
        <div >
            <div class="ibox-content profile-banner  no-padding border-left-right"  >
                <img class="img-circle profile-avatar"  src="https://laporankerma.kemdikbud.go.id/application/assets/img/profile_anonim.jpg" > 
            </div>
            <div class="ibox-content profile-content" style="padding-top: 50px; ">
                <h4 class="profile-name m-b-lg">
                    <div class="progress progress-striped active no-margins" style="opacity:.3;"><div style="width:100%;" class="progress-bar"></div></div>
                </h4>
                <dl class="profile-desc">
                    <dt><i class="fa fa-vcard-o"></i></dt>
                    <dd class="profile-role"><div class="progress progress-striped active no-margins" style="opacity:.3;"><div class="progress-bar"></div></div></dd>
                    <dt><i class="fa fa-institution"></i></dt> 
                    <dd class="profile-unit"><div class="progress progress-striped active no-margins" style="opacity:.3;"><div class="progress-bar"></div></div></dd>
                    <dt><i class="fa fa-map-marker"></i></dt> 
                    <dd class="profile-address"><div class="progress progress-striped active no-margins" style="opacity:.3;"><div class="progress-bar"></div></div></dd>
                </dl>
            </div>
            <div class="ibox-content ibox-heading">
                <div class="row m-b-sm">
                    <div class="col-sm-12">
                        <h5>About me</h5>
                        <div class="profile-aboutme"><div class="progress progress-striped active no-margins" style="opacity:.3;"><div class="progress-bar"></div></div></div>
            
                    </div>
                </div>
            </div>
            <div class="ibox-content profile-content">
                <div class="user-button">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <button type="button" class="btn btn-primary btn-sm btn-profile btn-block"><i class="fa fa-user"></i> Profil</button>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-line-chart"></i> Aktivitas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script >
	$(function() {
        var WG66b0f21ee32e0 = {
            Init: function() {
                var o = this;
                $("#WG66b0f21ee32e0").find(".btn-profile").on( "click", function() {
                    o.Update();
                });

                this.GetData();
            },
            GetData: function() {
                $.ajax({
                    method: 'POST',
                    url: "https://laporankerma.kemdikbud.go.id/user/profile/xhr/widget-profile",
                    dataType: 'json',
                    success: function(response){
                        if(response.result==true) {
                            var data = response.data;
                            $("#WG66b0f21ee32e0").find(".profile-name").html(data.name);
                            $("#WG66b0f21ee32e0").find(".profile-role").html(data.role);
                            $("#WG66b0f21ee32e0").find(".profile-unit").html(data.unit);
                            $("#WG66b0f21ee32e0").find(".profile-address").html(data.address);
                            $("#WG66b0f21ee32e0").find(".profile-aboutme").html(data.aboutme);
                            if(data.avatar!=undefined && data.avatar!=false) {
                                $("#WG66b0f21ee32e0").find(".profile-avatar").attr('src', data.avatar);
                            }

                            if(data.banner!=undefined && data.banner!=false) {
                                $("#WG66b0f21ee32e0").find(".profile-banner").css('background', 'url('+data.banner+') no-repeat center center');
                            }
                        }
                    }
                });
            },
            Update: function() {
                location.href = "https://laporankerma.kemdikbud.go.id/user/profile";
            }
        }

        WG66b0f21ee32e0.Init();
	});

    </script>
</div><style>
.feed-list {
    height: 530px;
}
</style>
<div id="WG66b0f21ee32fd" class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Whats up today</h5>
            <div class="ibox-tools"></div>
        </div>
        <div class="ibox-content">
            <div class="feed-list">
                <div class="feed-activity-list"><!-- FEED LIST --></div>
                <div class="progress progress-striped active list-loading" style="display:none;">
					<div style="width:100%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar"><span>loading</span></div>
				</div>
<!--
                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://laporankerma.kemdikbud.go.id/application/assets/img/profile_small.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                            <div class="pull-right">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="https://laporankerma.kemdikbud.go.id/application/assets/img/profile_small.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 8:30am</small>
                                            <div class="photos">
                                                <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"></a>
                                                <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"></a>
                                                </div>
                                        </div>
                                    </div>
                </div>
-->
            </div>
        </div>
    </div>
    <script >
	$(function() {
        var WG66b0f21ee32fd = {
            debug: false,
            Init: function() {
                this.List.Init();
                this.List.Load();
            },
            List: {
                debug: false,
                paging: {
                    offset: 0,
                    limit: 50
                },
                Init: function() {
                    var feeds   = this;
                    var h = $('.feed-list').height();
                    $('.feed-list').slimScroll({
                            height:h-20,
                            scrollBy:0,
                            wheelStep : 10,
                            touchScrollStep : 75
                        })
                        .bind('slimscroll', function(e, pos){
                            if(pos=='bottom') {
                                if(feeds.debug==true) console.log("Get batch feed list: ");
                                WG66b0f21ee32fd.List.Load();
                            }
                            return false;
                    });
                },
                SetOffset: function(offset) {
                    this.paging.offset=offset;
                },
                Load: function(clear) {
                    var feeds   = this;
                    var paging  = this.paging;
                    
                    //if(paging.offset>paging.total) return false;

                    $.ajax({
                        url: "https://laporankerma.kemdikbud.go.id/sys/widget/xhr/feeds",
                        type: "POST",
                        mimeTypes:"multipart/form-data",
                        data: paging,
                        cache: false,
                        dataType: 'html',
                        success: function(html){
                            var c = $('.feed-activity-list');
                            
                            if(html.trim().length==0) return false;
                            
                            c.append(html);
                            
                            paging.offset +=paging.limit;
                            WG66b0f21ee32fd.List.SetOffset(paging.offset);

                            return false;
                        },
                        beforeSend:function() {
                            if(feeds.debug==true) console.log('Request daftar feed: offset '+paging.offset);
                            $(".list-loading").show();
                        },
                        complete:function() {
                            $(".list-loading").hide();
                        }
                    });
                }
            }
            
        }

        WG66b0f21ee32fd.Init();
	});

    </script>
</div><style>
#pie-stat-kerma {
    width: 100% !important;
    height: 250px !important;
}
</style>
	
<widget id="WG66b0f21ee3316" >
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-content ibox-heading" style="height:100px;overflow:hidden;">
				<h3><i class="fa fa-pie-chart"></i> <span>Status Kerjasama</span></h3>
				<small><i class="fa fa-tim"></i> Proporsi kerja sama berdasarkan status/ masa berlaku dokumen.</small>
			</div>
		
			<div class="ibox-content no-padding no-margins" >
				<div class="flot-chart p-sm" style="height:400px;text-align:center;position:relative;">
                    <div class="flot-chart-pie-content m-t-sm" id="pie-stat-kerma" ></div>
                    <div id="pie-stat-kerma-legend" style="text-align:left;position:absolute;bottom:20px;" ></div>
				</div>
			</div>
			<div class="ibox-content ">
                <span class="float-right pull-right">
					<a href="https://laporankerma.kemdikbud.go.id/dashboard/kerma" >OVERVIEW <i class="fa fa-chevron-right"></i></a>
				</span>
				<div>&nbsp;</div>
			</div>
		</div>
	</div>


			
<script>

    $(function() {
		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/status",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				var data = response.data;
                var dataset = [];
                var colors = ['#F5F5F5','#1c84c6','#ED7B00','#00A36A','#DE000F'];

                for(var i in data) {
                    dataset[i] = {
                        label: data[i].stat_kerma,
                        data: parseInt(data[i].jumlah),
                        color: colors[parseInt(data[i].id_stat_kerma)]
                    }
                }

                var options = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0.5,
                            label: {
                                show: false
                            }
                        }
                    },
                    legend: {
                        show: true,
                        container: $("#pie-stat-kerma-legend")
                    },
                    grid: {
                        hoverable: true
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                        shifts: {
                            x: 20,
                            y: 0
                        },
                        defaultTheme: false
                    }
                };

                $.plot($("#pie-stat-kerma"), dataset, options);
			}
		});
	});

</script>
</widget>


<style>
#WG66b0f21ee3331 .ibox-heading {
	overflow:hidden;
	height:90px;
	border-color:#e7eaec;
	text-align: center;
}

@media screen and (max-width: 767px) {
	#WG66b0f21ee3331 .ibox-heading {
		overflow:unset;
		border-color:#e7eaec;
		height:auto;
		text-align: center;

		
	}
	#WG66b0f21ee3331 .ibox-heading .chart-info {
		margin-bottom: 1em;
	}
}
</style>

<widget id="WG66b0f21ee3331" >
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
		<div class="ibox float-e-margins">
			<div class="ibox-content ">
				<span class="float-right pull-right">OVERVIEW <i class="fa fa-chevron-right"></i></span>
				<h3><i class="fa fa-line-chart"></i> <span>Pertumbuhan Kerjasama</span></h3>
			</div>
			<div class="ibox-content no-padding no-margins" >
				<div class="flot-chart p-sm" style="height:400px;text-align:center;">
					<div class="flot-chart-content "></div>
				</div>
			</div>
			<div class="ibox-content ibox-heading" style="">
				<div class="row">
				<div class="col-xs-12 col-sm-4 chart-info">
					<div class=""> AVG MoU</div>
					<span class="h1 animated" data-field="avg-mou" style="color:#1c84c6">0</span><small class="text-muted">/thn</small>
				</div>
				<div class="col-xs-6 col-sm-4 chart-info">
					<div class=""> AVG MoA</div>
					<span class="h1 animated" data-field="avg-moa" style="color:#ED7B00">0</span><small class="text-muted">/thn</small>
				</div>
				<div class="col-xs-6 col-sm-4 chart-info">
					<div class=""> AVG IA</div>
					<span class="h1 animated" data-field="avg-ia" style="color:#00A36A">0</span><small class="text-muted">/thn</small>
				</div>
				</div>
			</div>
		</div>
	</div>


			
<script>

    $(function() {
		
		function array_sum(a) {
			var s = 0;
			for(var i in a) {
				s += parseInt(a[i]);
			}
			return s;
		}

		function array_avg(a) {
			var sum = array_sum(a);
			var avg = sum / a.length;
			return Math.round(avg);
		}

		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/kerma-growth",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				var data = response.data;
				var mou = {
					growth: [],
					values: [],
					line:[]
				};
				var moa = {
					growth: [],
					values: [],
					line:[]
				};
				var ia = {
					growth: [],
					values: [],
					line:[]
				};
				
				for(var i in data) {
					var year = new Date(data[i].tahun, 1, 1).getTime();

					var val  = parseInt(data[i].mou);
					mou.values.push(val);
					mou.line.push([year, val]);
					if(mou.line[i-1]!=undefined) {
						mou.growth.push(val - mou.values[i-1]);
					}

					var val  = parseInt(data[i].moa);
					moa.values.push(val);
					moa.line.push([year, val]);
					if(moa.line[i-1]!=undefined) {
						moa.growth.push(val - moa.values[i-1]);
					}

					var val  = parseInt(data[i].ia);
					ia.values.push(val);
					ia.line.push([year, val]);
					if(ia.line[i-1]!=undefined) {
						ia.growth.push(val - ia.values[i-1]);
					}
				}
				
				var dataset = [
					{ label: "MoU", data: mou.line, color: "#1c84c6" },
					{ label: "MoA", data: moa.line, color: "#ED7B00" },
					{ label: "IA", data: ia.line, color: "#00A36A" }
				];

				var options = {
					series: {
						lines: {
							show: true,
							fill: false
						}
					},
					xaxis: {
						axisLabel: "Year",
						axisLabelUseCanvas: true,
						axisLabelFontSizePixels: 12,
						axisLabelFontFamily: 'Verdana, Arial',
						axisLabelPadding: 10,        
						mode: "time",
						timeformat: "%Y"
					},
					legend: {
						noColumns: 3,
						labelBoxBorderColor: "#000000",
						position: "nw"
					},
					grid: {
                        color: "#999999",
                        hoverable: true,
                        clickable: true,
                        tickColor: "#D4D4D4",
                        borderWidth:1,
                        backgroundColor: { colors: ["#ffffff", "#EDF5FF"] }
                    }
				};

				var dom = $("#WG66b0f21ee3331");
				$.plot(dom.find(".flot-chart-content"), dataset, options);

				dom.find("*[data-field='avg-mou']").hide().html(number_format(array_avg(mou.values), 0, ',','.')).fadeIn('slow');
				dom.find("*[data-field='avg-moa']").hide().html(number_format(array_avg(moa.values), 0, ',','.')).fadeIn('slow');
				dom.find("*[data-field='avg-ia']").hide().html(number_format(array_avg(ia.values), 0, ',','.')).fadeIn('slow');
				

			}
		});
	});

</script>
</widget>


	
<widget id="WG66b0f21ee334b" >
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-content ibox-heading" style="height:100px;overflow:hidden;">
				<h3><i class="fa fa-bar-chart-o"></i> <span data-field="nm_proggram">Top 5 Bentuk Kegiatan</span></h3>
				<small><i class="fa fa-tim"></i> Tren kerja sama berdasarkan bentuk kegiatan yang dilaksanakan.</small>
			</div>
		
			<div class="ibox-content no-padding no-margins" >
				<div class="flot-chart p-sm" style="height:400px;text-align:center;overflow:hidden;">
					<div class="flot-chart-content" id="flot-bar-chart" ></div>
				</div>
			</div>
			<div class="ibox-content ">
				<span class="float-right pull-right">OVERVIEW <i class="fa fa-chevron-right"></i></span>
				<div>&nbsp;</div>
			</div>
		</div>
	</div>


			
<script>

    $(function() {
		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/top5-bentuk",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				var data = response.data;
                var ticks = [];
                var values = [];

                for(var i in data) {
                    ticks[i] = [i, data[i].bentuk_kegiatan];
                    values[i] = [i, parseInt(data[i].jumlah)];
                }

                var dataset = [
                    { label: "Bentuk Kerjasama", data: values, color: "#1c84c6" }
                ];

                var options = {
                    series: {
                        bars: {
                            show: true,
                            align: "center",
                            barWidth: 0.5,
                            fill: true,
                            fillColor: {
                                colors: [{
                                    opacity: 0.8
                                }, {
                                    opacity: 0.8
                                }]
                            }
                        }
                    },
                    xaxis: {
                        tickDecimals: 0,
                        ticks: ticks
                    },
                    yaxis: {
                            axisLabel: "Jumlah Kerjasama",
                            axisLabelUseCanvas: true,
                            axisLabelPadding: 3
                    },
                    grid: {
                        color: "#999999",
                        hoverable: true,
                        clickable: true,
                        tickColor: "#D4D4D4",
                        borderWidth:1,
                        backgroundColor: { colors: ["#ffffff", "#EDF5FF"] }
                    },
                    legend: {
                        show: true,
                        noColumns: 0,
                        labelBoxBorderColor: "#000000",
                        position: "nw"
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: "x: %x, y: %y"
                    }
                };

                $.plot($("#flot-bar-chart"), dataset, options);
			}
		});
	});

</script>
</widget>


	
<widget id="WG66b0f21ee3364" >
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-content ibox-heading" style="height:100px;overflow:hidden;">
				<h3><i class="fa fa-bar-chart-o"></i> <span data-field="nm_proggram">Top 5 Klasifikasi Mitra</span></h3>
				<small><i class="fa fa-tim"></i> Tren kerja sama berdasarkan klasifikasi mitra/ partner kerjasama.</small>
			</div>
		
			<div class="ibox-content no-padding no-margins" >
				<div class="flot-chart p-sm" style="height:400px;text-align:center;overflow:hidden;">
					<div class="flot-chart-content" id="flot-bar-klasifikasi-mitra" ></div>
				</div>
			</div>
			<div class="ibox-content ">
            <span class="float-right pull-right">
					<a href="https://laporankerma.kemdikbud.go.id/dashboard/mitra" >OVERVIEW <i class="fa fa-chevron-right"></i></a>
				</span><div>&nbsp;</div>
			</div>
		</div>
	</div>

    <script>

    $(function() {
		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/top5-klasifikasi-mitra",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				var data = response.data;
                var ticks = [];
                var values = [];
                var dn = [];
                var dl = [];

                for(var i in data) {
                    ticks[i] = [i, data[i].nm_klas_mitra];
                    values[i] = [i, parseInt(data[i].jumlah)];
                    dn[i] = [i, parseInt(data[i].DN)];
                    dl[i] = [i, parseInt(data[i].LN)];
                }

                var dataset = [
                    { label: "Dalam Negeri", data: dn, color: "#1c84c6" },
                    { label: "Luar Negeri", data: dl, color: "#69bff5" }
                ];
                
                var options = {
                    series: {
                        stack: true,
                        bars: {
                            show: true,
                            align: "center",
                            barWidth: 0.5,
                            fill: true,
                            fillColor: {
                                colors: [{
                                    opacity: 0.8
                                }, {
                                    opacity: 0.8
                                }]
                            }
                        }
                    },
                    xaxis: {
                        tickDecimals: 0,
                        ticks: ticks
                    },
                    yaxis: {
                            axisLabel: "Jumlah Kerjasama",
                            axisLabelUseCanvas: true,
                            axisLabelPadding: 3
                    },
                    grid: {
                        color: "#999999",
                        hoverable: true,
                        clickable: true,
                        tickColor: "#D4D4D4",
                        borderWidth:1,
                        backgroundColor: { colors: ["#ffffff", "#EDF5FF"] }
                    },
                    legend: {
                        show: true,
                        noColumns: 0,
                        labelBoxBorderColor: "#000000",
                        position: "nw"
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: "x: %x, y: %y"
                    }
                };

                $.plot($("#flot-bar-klasifikasi-mitra"), dataset, options);
			}
		});
	});

    </script>
</widget>


	
<widget id="WG66b0f21ee337d" >
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-content ibox-heading" style="height:100px;overflow:hidden;">
				<h3><i class="fa fa-table"></i> <span>Top 10 Negara Mitra</span></h3>
				<small><i class="fa fa-tim"></i> Tren negara asal mitra yang melakukan kerjasama.</small>
			</div>
			<div class="ibox-content no-padding no-margins" >
				<div class="p-xs" style="height:400px;overflow:hidden;">
					<table class="table table-data animated" style="display:none;">
						<thead>
							<tr><th class="text-center" width="20px">No.</th>
								<th class="text-center">Negara</th>
								<th class="text-center" width="80px">Jumlah</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
			<div class="ibox-content ">
				<span class="float-right pull-right">
					<a href="https://laporankerma.kemdikbud.go.id/dashboard/geomitra" >OVERVIEW <i class="fa fa-chevron-right"></i></a>
				</span>
				<div>&nbsp;</div>
			</div>
		</div>
	</div>

    <script>

    $(function() {
		$.ajax({
			method: 'POST',
			url: "https://laporankerma.kemdikbud.go.id/kerma/analytics/xhr/negara-mitra/10",
			dataType: 'json',
						data: {"range":"last-30days","id_unit":"fbc747a6-12de-44bd-94c6-dbd49288604d","idunit":"fbc747a6-12de-44bd-94c6-dbd49288604d"},
						success: function(response){
				if(!response.result) return;
				var table = $("#WG66b0f21ee337d").find(".table-data");
				table.show('fadeIn');

				var data = response.data;
				var dom = table.find('tbody');
				for(var i in data) {
					var no = parseInt(i)+1;
					var d = data[i];
					var html = "<tr><td>"+no+"</td>";
					html += "<td><span class=\"flag-icon flag-icon-"+d.id_negara.toLowerCase()+"\"></span> "+d.nm_negara+"</td>";
					html += "<td class=\"text-right\">"+number_format(d.jumlah,0,',','.')+"</td><td></tr>";

					dom.append(html);
				}
			}
		});
	});

    </script>
</widget>


        </div>
                
        
        	</div>
</div>

		
        <!-- footer-->
        <div class="footer-container">
        <div class="row">
            <div id="footer" style="width: 100%;padding: 10px;background-color: white ;position: absolute;bottom: 0;">
                &copy; Copyright  <strong>DIKTI</strong> v2.3 2023
                <div class="pull-right" >
                    <ul style="display:flex; list-style:none;">
                        <li class="m-l-sm"><a href="https://laporankerma.kemdikbud.go.id/sys/setting/about" class="text-muted">About</a></li>
                        <li class="m-l-sm"><a href="#" class="text-muted">Documentation</a></li>
                        <li class="m-l-sm"><a href="#" class="text-muted" target="_blank"><i class="fal fa-ask" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</div>		
</div>
</body>
</html>