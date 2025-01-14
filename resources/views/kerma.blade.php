
<!DOCTYPE html>
<html>
<head>
	<title>LAPORKERMA | Kerja Sama</title>
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
    <link href="{{ asset('assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/dropzone/css/basic.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/dropzone/css/dropzone.min.css') }}" rel="stylesheet" type="text/css">
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
    <script src="{{ asset('assets/vendor/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/dropzone/js/dropzone.min.js') }}" type="text/javascript"></script>

<!-- <script src="https://www.googletagmanager.com/gtag/js?id=G-9MBT93MN0H" type="text/javascript" async></script><script type="text/javascript" >window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-9MBT93MN0H');</script> -->
	
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
    		 /*background-image: url(https://laporankerma.kemdikbud.go.id/application/themes/inspinia/assets/css/patterns/header-profile-golden.jpeg); */
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
            @include('navbar')
        </div>

		
<!--page title & breadcrumb-->
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-12">
				<!--<h2>Kerja Sama</h2>-->
						<ol class="breadcrumb m-t-sm">
						<li><a href="#">Beranda</a></li>
						<li><a href="#">Daftar</a></li>
						<li><a href="#">Tambah</a></li>
					</ol>
			</div>
</div>
		

<!--main  content-->
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
	    
<!-- Modal Windows -->
<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content animated bounceInRight">
		<form name="mitraForm" id="mitraForm"  method="post"  >
            
        	<div class="modal-header">
				<div class="col-sm-12">
					<div class="float-right pull-right">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					</div>
					<h4 class="modal-title">Tambah Mitra</h4>
				</div>
            </div>
            <div class="modal-body">
            	<input  type="hidden"  id="id_mitra"  name="id_mitra" />				
            	<div class = "form-group item-page"> 
                    <label class = "control-label">Klasifikasi Mitra</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    	<select  id="id_klas_mitra"  name="id_klas_mitra" ><option /><option  value="1" >Perusahaan multinasional</option><option  value="2" >Perusahaan nasional berstandar tinggi</option><option  value="3" >Perusahaan teknologi global</option><option  value="4" >Perusahaan rintisan (startup company) teknologi</option><option  value="5" >Organisasi nirlaba kelas dunia</option><option  value="6" >Institusi/ Organisasi multilateral</option><option  value="7" >Perguruan tinggi yang masuk dalam daftar QS200 berdasarkan bidang ilmu (subject)</option><option  value="8" >Instansi pemerintah Pusat dan/atau Daerah BUMN dan/atau BUMD</option><option  value="9" >Rumah Sakit</option><option  value="11" >Dunia Usaha</option><option  value="12" >Institusi Pendidikan</option><option  value="13" >Organisasi</option><option  value="15" >Perguruan tinggi, fakultas, atau program studi dalam bidang yang relevan</option><option  value="16" >Lembaga riset pemerintah, swasta, nasional, maupun internasional</option><option  value="17" >Lembaga kebudayaan berskala nasional/ bereputasi</option></select>                	</div>
				</div>
				<div class="form-group">
					<label class="control-label">Nama Institusi</label>
					<div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                    	<input  autocomplete="off"  maxlength="200"  class="form-control"  type="text"  id="nm_mitra"  name="nm_mitra" />					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea  name="alamat_mitra"  id="alamat_mitra"  rows="2"  width="60"  class="form-control" ></textarea>				</div>
				<div class="form-group">
					<label class="control-label">Negara</label>
					<div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-flag-o"></i></span>
                    	<select  id="id_negara"  name="id_negara" ><option /><option  value="AD" >Andorra</option><option  value="AE" >United Arab Emirates</option><option  value="AF" >Afghanistan</option><option  value="AG" >Antigua And Barbuda</option><option  value="AI" >Anguilla</option><option  value="AL" >Albania</option><option  value="AM" >Armenia</option><option  value="AN" >Netherlands Antilles</option><option  value="AO" >Angola</option><option  value="AQ" >Antarctica</option><option  value="AR" >Argentina</option><option  value="AS" >American Samoa</option><option  value="AT" >Austria</option><option  value="AU" >Australia</option><option  value="AW" >Aruba</option><option  value="AX" >Aland Islands</option><option  value="AZ" >Azerbaijan</option><option  value="BA" >Bosnia And Herzegovina</option><option  value="BB" >Barbados</option><option  value="BD" >Bangladesh</option><option  value="BE" >Belgium</option><option  value="BF" >Burkina Faso</option><option  value="BG" >Bulgaria</option><option  value="BH" >Bahrain</option><option  value="BI" >Burundi</option><option  value="BJ" >Benin</option><option  value="BL" >Saint Bartelemey</option><option  value="BM" >Bermuda</option><option  value="BN" >Brunei Darussalam</option><option  value="BO" >Bolivia</option><option  value="BQ" >Bonaire, Saint Eustatius and Saba</option><option  value="BR" >Brazil</option><option  value="BS" >Bahamas</option><option  value="BT" >Bhutan</option><option  value="BV" >Bouvet Island</option><option  value="BW" >Botswana</option><option  value="BY" >Belarus</option><option  value="BZ" >Belize</option><option  value="CA" >Canada</option><option  value="CC" >Cocos (Keeling) Islands</option><option  value="CD" >Congo, The Democratic Republic Of The</option><option  value="CF" >Central African Republic</option><option  value="CG" >Congo</option><option  value="CH" >Switzerland</option><option  value="CI" >Cote D'Ivoire</option><option  value="CK" >Cook Islands</option><option  value="CL" >Chile</option><option  value="CM" >Cameroon</option><option  value="CN" >China</option><option  value="CO" >Colombia</option><option  value="CR" >Costa Rica</option><option  value="CS" >Serbia And Montenegro</option><option  value="CU" >Cuba</option><option  value="CV" >Cape Verde</option><option  value="CW" >Curacao</option><option  value="CX" >Christmas Island</option><option  value="CY" >Cyprus</option><option  value="CZ" >Czech Republic</option><option  value="DE" >Germany</option><option  value="DJ" >Djibouti</option><option  value="DK" >Denmark</option><option  value="DM" >Dominica</option><option  value="DO" >Dominican Republic</option><option  value="DZ" >Algeria</option><option  value="EC" >Ecuador</option><option  value="EE" >Estonia</option><option  value="EG" >Egypt</option><option  value="EH" >Western Sahara</option><option  value="ER" >Eritrea</option><option  value="ES" >Spain</option><option  value="ET" >Ethiopia</option><option  value="FI" >Finland</option><option  value="FJ" >Fiji</option><option  value="FK" >Falkland Islands (Malvinas)</option><option  value="FM" >Micronesia, Federated States Of</option><option  value="FO" >Faroe Islands</option><option  value="FR" >France</option><option  value="GA" >Gabon</option><option  value="GB" >United Kingdom</option><option  value="GD" >Grenada</option><option  value="GE" >Georgia</option><option  value="GF" >French Guiana</option><option  value="GG" >Guernsey</option><option  value="GH" >Ghana</option><option  value="GI" >Gibraltar</option><option  value="GL" >Greenland</option><option  value="GM" >Gambia</option><option  value="GN" >Guinea</option><option  value="GP" >Guadeloupe</option><option  value="GQ" >Equatorial Guinea</option><option  value="GR" >Greece</option><option  value="GS" >South Georgia And The South Sandwich Islands</option><option  value="GT" >Guatemala</option><option  value="GU" >Guam</option><option  value="GW" >Guinea-Bissau</option><option  value="GY" >Guyana</option><option  value="HK" >Hong Kong</option><option  value="HM" >Heard Island And Mcdonald Islands</option><option  value="HN" >Honduras</option><option  value="HR" >Croatia</option><option  value="HT" >Haiti</option><option  value="HU" >Hungary</option><option  value="ID" >Indonesia</option><option  value="IE" >Ireland</option><option  value="IL" >Israel</option><option  value="IM" >Isle Of Man</option><option  value="IN" >India</option><option  value="IO" >British Indian Ocean Territory</option><option  value="IQ" >Iraq</option><option  value="IR" >Iran, Islamic Republic Of</option><option  value="IS" >Iceland</option><option  value="IT" >Italy</option><option  value="JE" >Jersey</option><option  value="JM" >Jamaica</option><option  value="JO" >Jordan</option><option  value="JP" >Japan</option><option  value="KE" >Kenya</option><option  value="KG" >Kyrgyzstan</option><option  value="KH" >Cambodia</option><option  value="KI" >Kiribati</option><option  value="KM" >Comoros</option><option  value="KN" >Saint Kitts And Nevis</option><option  value="KP" >Korea, Democratic People'S Republic Of</option><option  value="KR" >Korea, Republic Of</option><option  value="KW" >Kuwait</option><option  value="KY" >Cayman Islands</option><option  value="KZ" >Kazakhstan</option><option  value="LA" >Lao People'S Democratic Republic</option><option  value="LB" >Lebanon</option><option  value="LC" >Saint Lucia</option><option  value="LI" >Liechtenstein</option><option  value="LK" >Sri Lanka</option><option  value="LR" >Liberia</option><option  value="LS" >Lesotho</option><option  value="LT" >Lithuania</option><option  value="LU" >Luxembourg</option><option  value="LV" >Latvia</option><option  value="LY" >Libyan Arab Jamahiriya</option><option  value="MA" >Morocco</option><option  value="MC" >Monaco</option><option  value="MD" >Moldova, Republic Of</option><option  value="ME" >Montenegro</option><option  value="MF" >Saint Martin</option><option  value="MG" >Madagascar</option><option  value="MH" >Marshall Islands</option><option  value="MK" >Macedonia, The Former Yugoslav Republic Of</option><option  value="ML" >Mali</option><option  value="MM" >Myanmar</option><option  value="MN" >Mongolia</option><option  value="MO" >Macao</option><option  value="MP" >Northern Mariana Islands</option><option  value="MQ" >Martinique</option><option  value="MR" >Mauritania</option><option  value="MS" >Montserrat</option><option  value="MT" >Malta</option><option  value="MU" >Mauritius</option><option  value="MV" >Maldives</option><option  value="MW" >Malawi</option><option  value="MX" >Mexico</option><option  value="MY" >Malaysia</option><option  value="MZ" >Mozambique</option><option  value="NA" >Namibia</option><option  value="NC" >New Caledonia</option><option  value="NE" >Niger</option><option  value="NF" >Norfolk Island</option><option  value="NG" >Nigeria</option><option  value="NI" >Nicaragua</option><option  value="NL" >Netherlands</option><option  value="NO" >Norway</option><option  value="NP" >Nepal</option><option  value="NR" >Nauru</option><option  value="NU" >Niue</option><option  value="NZ" >New Zealand</option><option  value="OM" >Oman</option><option  value="PA" >Panama</option><option  value="PE" >Peru</option><option  value="PF" >French Polynesia</option><option  value="PG" >Papua New Guinea</option><option  value="PH" >Philippines</option><option  value="PK" >Pakistan</option><option  value="PL" >Poland</option><option  value="PM" >Saint Pierre And Miquelon</option><option  value="PN" >Pitcairn</option><option  value="PR" >Puerto Rico</option><option  value="PS" >Palestinian Territory, Occupied</option><option  value="PT" >Portugal</option><option  value="PW" >Palau</option><option  value="PY" >Paraguay</option><option  value="QA" >Qatar</option><option  value="RE" >Reunion</option><option  value="RO" >Romania</option><option  value="RS" >Serbia</option><option  value="RU" >Russian Federation</option><option  value="RW" >Rwanda</option><option  value="SA" >Saudi Arabia</option><option  value="SB" >Solomon Islands</option><option  value="SC" >Seychelles</option><option  value="SD" >Sudan</option><option  value="SE" >Sweden</option><option  value="SG" >Singapore</option><option  value="SH" >Saint Helena</option><option  value="SI" >Slovenia</option><option  value="SJ" >Svalbard And Jan Mayen</option><option  value="SK" >Slovakia</option><option  value="SL" >Sierra Leone</option><option  value="SM" >San Marino</option><option  value="SN" >Senegal</option><option  value="SO" >Somalia</option><option  value="SR" >Suriname</option><option  value="SS" >South Sudan</option><option  value="ST" >Sao Tome And Principe</option><option  value="SV" >El Salvador</option><option  value="SX" >Sint Maarten</option><option  value="SY" >Syrian Arab Republic</option><option  value="SZ" >Swaziland</option><option  value="TC" >Turks And Caicos Islands</option><option  value="TD" >Chad</option><option  value="TF" >French Southern Territories</option><option  value="TG" >Togo</option><option  value="TH" >Thailand</option><option  value="TJ" >Tajikistan</option><option  value="TK" >Tokelau</option><option  value="TL" >Timor-Leste</option><option  value="TM" >Turkmenistan</option><option  value="TN" >Tunisia</option><option  value="TO" >Tonga</option><option  value="TR" >Turkey</option><option  value="TT" >Trinidad And Tobago</option><option  value="TV" >Tuvalu</option><option  value="TW" >Taiwan, Province Of China</option><option  value="TZ" >Tanzania, United Republic Of</option><option  value="UA" >Ukraine</option><option  value="UG" >Uganda</option><option  value="UM" >United States Minor Outlying Islands</option><option  value="US" >United States</option><option  value="UY" >Uruguay</option><option  value="UZ" >Uzbekistan</option><option  value="VA" >Holy See (Vatican City State)</option><option  value="VC" >Saint Vincent And The Grenadines</option><option  value="VE" >Venezuela</option><option  value="VG" >Virgin Islands, British</option><option  value="VI" >Virgin Islands, U.S.</option><option  value="VN" >Viet Nam</option><option  value="VU" >Vanuatu</option><option  value="WF" >Wallis And Futuna</option><option  value="WS" >Samoa</option><option  value="XK" >Kosovo</option><option  value="YE" >Yemen</option><option  value="YT" >Mayotte</option><option  value="ZA" >South Africa</option><option  value="ZM" >Zambia</option><option  value="ZW" >Zimbabwe</option></select>					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Telp.</label>
					<div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    	<input  autocomplete="off"  maxlength="100"  class="form-control"  type="text"  id="telp_mitra"  name="telp_mitra" />					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Website</label>
					<div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    	<input  autocomplete="off"  maxlength="200"  class="form-control"  type="text"  id="web_mitra"  name="web_mitra" />					</div>
				</div>
				
			</div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-save  btn-primary" title="Simpan"><i class="fa fa-save"></i> Simpan</button>
            </div>
		</form>
		</div>
    </div>
</div>
		
<script>
var FormMitra = {
		formid: '#mitraForm',
		debug: false,
		params: false,
		Callback: false, 
		Init: function() {
			var form = this;

			$(this.formid).validate({
				rules: {
					nm_mitra: { required: true }
				},
				messages: {
					nm_mitra: { required: "Nama institusi tidak boleh kosong" }
				},
			});

			$(this.formid).find("#id_klas_mitra").select2({
				placeholder: 'Cari klasifikasi'
			});

			$(this.formid).find("#id_negara").select2({
				placeholder: 'Cari negara'
			});

			$(this.formid).find('.btn-save').on('click', function(){
				return FormMitra.Submit();
			});
		},		
		Add: function(params){
			this.params = params;

			$(this.formid)[0].reset(); // reset form on modals
			$('#myModal').modal('show'); // show bootstrap modal
			$('.modal-title').text('Tambah Mitra'); // Set Title to Bootstrap modal title

			$(this.formid).find('#id_mitra').val(null);
			$(this.formid).find('#nm_mitra').val(null);
			$(this.formid).find('#alamat_mitra').val(null);
			$(this.formid).find('#telp_mitra').val(null);
			$(this.formid).find('#web_mitra').val(null);
			$(this.formid).find('#id_klas_mitra').val(null).trigger('change');
			$(this.formid).find('#id_negara').val(null).trigger('change');
		},
		SetValue: function(data) {
			$(this.formid).find('#id_mitra').val(data.id_mitra);
			$(this.formid).find('#nm_mitra').val(data.nm_mitra);
			$(this.formid).find('#alamat_mitra').val(data.alamat_mitra);
			$(this.formid).find('#telp_mitra').val(data.telp_mitra);
			$(this.formid).find('#web_mitra').val(data.web_mitra);
			$(this.formid).find('#id_klas_mitra').val(data.id_klas_mitra).trigger('change');
			$(this.formid).find('#id_negara').val(data.id_negara).trigger('change');
		},
		Edit: function(id){
			$(this.formid)[0].reset(); // reset form on modals
			
			//Ajax Load data from ajax
			form = this;
			$.ajax({
				url : "https://laporankerma.kemdikbud.go.id/kerma/kerma/xhr/data/" + id,
				type: "GET",
				dataType: "JSON",
				success: function(data){ 
					if(form.debug) console.log(data);

					form.SetValue(data);
					
					$('#myModal').modal('show'); // show bootstrap modal when complete loaded
					$('.modal-title').text('Edit Mitra'); // Set title to Bootstrap modal title   
				}
			});
		},
		Submit: function() {	
			if(!$(this.formid).valid()) return false;

			var Form = $(this.formid).get(0);
        	var formdata = new FormData(Form);
        
			var form = this;
			$.ajax({
				type:'POST',
				dataType: 'json',
				mimeTypes:"multipart/form-data",
				processData: false,
				contentType: false,
				cache: false,
				data: formdata,
				url: "https://laporankerma.kemdikbud.go.id/kerma/mitra/xhr/save",
				success: function(response){
					if(response.result==true) {
						swal({
							title: "Master Mitra",
							text: "Data berhasil disimpan.",
							icon: "success"
						}).then((value) => {
							if($.isFunction(form.Callback)) return form.Callback(response.data, form.params); 
							location.reload();
						});
					} 
					else {
						swal({
							title: "Master Mitra",
							text: response.msg_str,
							icon: "error"
						}).then((value) => {
							return false;
						});
					}

					
				}
			});
		},
		Close: function() {
			$('#myModal').modal('hide');
		}
	};
</script>
    <div class="col-sm-12 col-md-12 col-lg-12">
      
    </div>
    
    <form name="kermaForm" id="kermaForm" class="form-horizontal" method="post" enctype="multipart/form-data"  >
        <input  type="hidden"  id="id_kerma"  name="id_kerma" />        <input  type="hidden"  id="files"  name="files" />        <!-- Main Form -->
        <div class="col-sm-12 col-md-12 col-lg-12"> 
        <div class="">
            
            <!-- Dokumen kerjasama -->
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                     <div class="ibox-tools">
                        <button  type="button"  class="btn btn-sm btn-list  btn-success"  onclick="return Page.List()"  title="Daftar" ><i class="fa fa-list"></i> Daftar</button>                        <button  type="button"  class="btn btn-sm btn-save  btn-primary"  onclick="return Page.Save()"  title="Simpan" ><i class="fa fa-save"></i> Simpan</button>                    </div>
                </div>
                <div class="ibox-content">
                <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="panel-group panel-group-info" >

                    <!-- Periode Kontrol -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="block" data-toggle="collapse" href="#PanelProgram">
                                    <i class="fa fa-calendar m-r-sm"></i> MASA BERLAKU 
                                </a>
                            </h5>
                        </div>
                        <div id="PanelProgram" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Status </label></div>
                                    <div class="col col-lg-12">
                                        <select  placeholder="Pilih"  id="id_stat_kerma"  name="id_stat_kerma"  class="form-control" ><option /><option  value="1" >Aktif</option><option  value="3" >Dalam Perpanjangan</option><option  value="2" >Kadaluarsa</option><option  value="4" >Tidak Aktif</option></select>  
                                    </div> 
                                </div>

                                <div class="form-group">
                                    <label class = "col-lg-12">Tanggal Awal</label>
                                    <div class="col col-lg-12">
                                        <div class="input-group date datepicker-bd">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input  class="form-control"  type="text"  id="tgl_awal"  name="tgl_awal" />                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class = "col-lg-12">Tanggal Berakhir</label>
                                    <div class="col-lg-12">
                                        <div class="input-group date datepicker-bd">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input  class="form-control"  type="text"  id="tgl_akhir"  name="tgl_akhir" />                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <style>
	.panel-upload .tab-pane {min-height: 230px; } 
	.dropzone {min-height: 230px; } 
   	
   	.file-box .corner {
        display: none;
        width: inherit;
        height: inherit;
	}

    .file-box:hover .corner {
        display: block;
    }
  
</style>

<div class="panel panel-default panel-upload" data-index="0">
	<div class="panel-heading">                        
		<h5 class="panel-title">
			<a class="block" data-toggle="collapse" href="#PanelUpload">
				<i class="fa fa-file-o m-r-sm"></i> <span class="panel-title-caption">DOKUMEN</span>
			</a>
		</h5>
	</div>
	<div id="PanelUpload" class="panel-collapse collapse in">
		<div class="panel-body no-padding">
			<ul class="nav nav-tabs no-margins" style="background-color:rgba(245,245,245,0.3);">
				<li class="active">
					<a data-toggle="tab" href="#tabs-docs" title="Files"><i class="fa fa-list"></i></a>
				</li>
				<li class="">
					<a data-toggle="tab" href="#tabs-dropzone" title="Upload"><i class="fa fa-upload"></i> Upload</a>
				</li>
			</ul>

			<div class="tab-content p-sm">
				<div id="tabs-docs" class="tab-pane active">
					<div class="" >
						<div class="file-list"></div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div id="tabs-dropzone" class="tab-pane ">
					<div id="file-dropzone" class="dropzone">
						<div class="dz-message" data-dz-message>
							<h4 class="text-center text-muted m-t-xl">Drag & Drop atau Klik area ini untuk upload</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="file-box-template hidden">
	<div class="file">
		<a href="#">
			<span class="corner"> 
				<button class="btn btn-sm btn-danger btn-remove" ><i class="fa fa-trash"></i></button> 
			</span>
			<div class="icon" ><img alt="image" class="img-responsive" src="" /> </div>
			<div class="file-name" > 
                <div data-field="filename" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;"></div> 
                <small>Added: <span data-field="create-date"></span></small> 
            </div>
        </a> 
	</div>
</div>
               

<script tyxpe="text/javascript">

var UploadField = {
    idx: 0,
	debug: false,
    linkPreview: "https://laporankerma.kemdikbud.go.id/media/dokumen/preview",
    files: new Array,
    dz: false,
	Callback: false, 
    Init: function(params) {
		if(this.debug) console.log('Init panel upload');
        
        this.idx    = (params.idx!=undefined) ? params.idx: 0;
        this.files  = (params.data!=undefined) ? params.data: [];
    
        var panel = this.GetPanel(this.idx);
        if(params.title!=undefined)
            panel.find(".panel-title-caption").html(params.title);
            
		this.SetPanel(this.idx);
        this.Render();
    },
	GetPanel: function(idx) {
        if(idx!=undefined) 
            return $('.panel-upload[data-index="'+idx+'"]');

        return $('.panel-upload');
    },
	SetPanel: function(idx) {
		var panel = this.GetPanel(idx);

		Dropzone.autoDiscover = false;
        this.dz = new Dropzone("div#file-dropzone", { 
                url: "https://laporankerma.kemdikbud.go.id/media/dokumen/xhr/dz-upload",
                paramName: 'files',
                autoProcessQueue: true,
                uploadMultiple: false,
                addRemoveLinks: true,
                parallelUploads: 5,
                maxFiles: 1,
                maxFilesize: 2, //in MB
                acceptedFiles: 'application/pdf'
        });
            
        this.dz.on("addedfile", function(file) {
                var dz = this;
                var f = file.name.toLowerCase().split('.');
                var ext = f[f.length-1];
                if(ext=='png'||ext=='jpg'||ext=='jpeg'||ext=='gif')
                    return;
                else if(ext=='xls'||ext=='xlsx')
                    dz.emit("thumbnail", file, "https://laporankerma.kemdikbud.go.id/application/assets/img/excel_logo.png");
                else if(ext=='doc'||ext=='docx')
                    dz.emit("thumbnail", file, "https://laporankerma.kemdikbud.go.id/application/assets/img/word_logo.png");
                else if(ext=='pdf')
                    dz.emit("thumbnail", file, "https://laporankerma.kemdikbud.go.id/application/assets/img/pdf_logo.png");
                else 
                    dz.emit("thumbnail", file, "https://laporankerma.kemdikbud.go.id/application/assets/img/dikti_logo.png"); 
        });
            
        this.dz.on("success", function(files, response) {
                var dz = this;

                var response = JSON.parse(response);
                if(response.result==true) {  
                    var files = dz.files;
                    var data = response.data;
                    for(var i in files) {
                        if(dz.files[i].name==data.name) {
                            dz.files[i]['tmp_name'] = data.tmp_name;  
                            break;
                        }
                    }
                }
        });
            
        this.dz.on("error", function(files, response) {});

		if(this.files.length==0) 
			this.SetTabs('tabs-dropzone');
		else
			this.SetTabs('tabs-docs');
		

	},
	SetTabs: function(id) {
		if(this.debug) console.log('Set tabs :'+id);
        
		var panel = this.GetPanel(); 
		panel.find('.nav-tabs a[href="#'+id+'"]').tab('show');
	},
    numQueuedFile: function() {
        var queued = this.dz.getQueuedFiles();
        return queued.length;
    },
    Render: function() {
		var field = this;
		var panel = this.GetPanel(0);
		var list = panel.find(".file-list");
		var placeholder = '	<div class="file-list-message" ><h4 class="text-center text-muted m-t-xl">Tidak ada file</h4></div>';

		if(this.files.length) {
			//Calibrate view inside div        
			list.empty();

			for ( var i = 0; i < this.files.length; i++ ) {
				var template  = $('.file-box-template').eq(0).clone();
				var file 	 = this.files[i];
				var create = new Date(file.create_date);

				var preview = field.linkPreview+'/'+file.id_dokumen;
				var img = preview;
				if(file.dok_mime=='application/pdf')
					img = "https://laporankerma.kemdikbud.go.id/application/assets/img/pdf_logo.png";

				template.removeClass('file-box-template hidden').addClass('file-box');
                template.attr('data-index',i);
				template.attr('style','width:50%;');
				template.find('img').attr('src',img);
				template.find('a').attr('href',preview).attr('target','_blank');
				template.find('*[data-field="filename"]').html(file.dok_name);
				template.find('*[data-field="create-date"]').html(create);

                template.find('.btn-remove').click(function(){
                    var index = $(this).parents('.file-box').data().index;
                    return field.Delete(index);
                });
	
				list.append(template);
			}
		}
		else list.html(placeholder);

        panel.find(".file-box").each(function() {
            animationHover(this, 'pulse');
        });
	},
    Validate: function() {
        var Num = this.numQueuedFile();
        if(Num>0) {
            swal("Error!",Num+" file teridentifikasi belum diupload","error");	
            return false;
        }
            
        return true;
    },
    GetFiles: function() {
        return this.dz.files;
    },
    Delete: function(idx) {
        if(idx==undefined) return false;

		var field = this;
        var file = field.files[idx];
        if(file==undefined) return false;	

        swal({
            title: "Apakah anda yakin?",
			text: "File \""+file.dok_name+"\" akan terhapus dari sistem!",
			icon: "warning",
			buttons: ["Batal", "Ya, Hapus!"],
			dangerMode: true
        })
        .then((value) => {
			if(value==null) return false;
            
            $.ajax({
                url: "https://laporankerma.kemdikbud.go.id/media/dokumen/xhr/delete",
                type: "POST",
                data: { id_dok_meta: file.id_dok_meta },
                dataType: 'json',
                success: function(json){
                    if(json.result==true) {
    
                        swal({
                            title: "Hapus!",
                            text: "File \""+file.dok_name+"\" berhasil dihapus.",
                            type: "success"
                        }).then((value) => {
                            field.files = removeByKey(field.files, {key: 'id_dok_meta',value: file.id_dok_meta})
                            field.Render();
                        });
                        return false;
                    }
                    else {
                        swal("Error!","File gagal dihapus!","error");	
                        return false;
                    }
                }
            });
        });

        return false;
    }
};

</script>
                    </div>
                </div>  

                <div class="col-sm-12 col-md-8 col-lg-8"> 
                
                    <div class="form-group">
                        <div class="col-sm-12"><label>Jenis Dokumen Kerjasama</label></div>
                        <div class="col col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <select  placeholder="Jenis Dokumen"  id="id_jns_dok"  name="id_jns_dok" ><option /><option  value="5" >Memorandum of Understanding (MoU)</option><option  value="6" >Memorandum of Aggreement (MoA)</option><option  value="7" >Implementation Arrangement (IA)</option></select>  
                            </div>
                        </div> 
                    </div> 

                    <div class="form-group teknis" style="display:none;">
                        <div class="col-sm-12"><label>Dasar Dokumen Kerjasama</label></div>
                        <div class="col col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                <select  id="id_parent"  name="id_parent" ><option /></select>  
                            </div> 
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-sm-12"><label>Nomor Dokumen</label></div>
                        <div class = "col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-slack"></i></span>
                                <input  class="form-control"  type="text"  id="no_dokumen"  name="no_dokumen" />                            </div>
                        </div>
                    </div>     
                    
                    <div class="form-group">
                        <div class="col-sm-12"><label>Judul Kerjasama</label></div>
                        <div class="col col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header"></i></span>
                                <input  placeholder="Judul"  required="required"  class="form-control input-title"  type="text"  id="judul_kerma"  name="judul_kerma" />                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Deskripsi</label>
                            <div class="text-muted m-b-xs mb-1">Ringkasan singkat terkait cakupan atau kegiatan kerja sama</div>
                        </div>
                        <div class="col-sm-12">
                            <textarea  name="note_kerma"  id="note_kerma"  rows="5"  class="form-control" ></textarea>                        </div>
                    </div> 

                    <div class="form-group teknis" style="display:none;">
                        <div class="col-sm-12"><label>Angggaran</label></div>
                        <div class="col col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input  placeholder="Biaya"  class="form-control input-title"  type="text"  id="anggaran"  name="anggaran" />                            </div>
                        </div>
                    </div>

                    <div class="form-group teknis" style="display:none;">
                        <div class="col-sm-12"><label>Sumber Pendanaan </label></div>
                        <div class = "col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <select  placeholder="Pilih sumber dana"  id="id_sumber_dana"  name="id_sumber_dana" ><option /><option  value="41" >Badan PSDMPK dan PMP</option><option  value="31" >Balitbang</option><option  value="992" >Bantuan Asing</option><option  value="991" >Bantuan Swasta</option><option  value="21" >Biro PKLN</option><option  value="699" >Dana mandiri</option><option  value="51" >Dikti</option><option  value="62" >Dinas Kabupaten</option><option  value="61" >Dinas Propinsi</option><option  value="500" >DIPA PTN</option><option  value="7" >Direktorat P2TK Dikdas</option><option  value="8" >Direktorat P2TK Dikmen</option><option  value="5" >Direktorat PKLK Dikdas</option><option  value="6" >Direktorat PKLK Dikmen</option><option  value="1" >Direktorat PSD</option><option  value="3" >Direktorat PSMA</option><option  value="4" >Direktorat PSMK</option><option  value="2" >Direktorat PSMP</option><option  value="501" >DP2M Ristekdikti</option><option  value="502" >Insinas Ristekdikti</option><option  value="999" >Lainnya</option><option  value="690" >Lembaga donor dalam negeri</option><option  value="691" >Lembaga donor luar negeri</option><option  value="23" >Puskurbuk</option><option  value="24" >Puspendik</option><option  value="22" >Pustekkom</option><option  value="9" >Sekretariat Dikdas</option><option  value="10" >Sekretariat Dikmen</option></select>  
                            </div>
                        </div>
                    </div>

                </div>

                </div>  
                </div>
                            </div>

        </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6"> 
        <div class="">
            <!-- Penggiat kerjasama -->
            <style>
    .btn-mitra {
        overflow: hidden;
        border-radius: 0 !important;
    }
    .select2-control ~ .select2 .select2-selection { background-color: gainsboro;  }
    
</style>
<div id="penggiatField" class="ibox float-e-margins" >
    <div class="ibox-title">
        <h5><i class="fa fa-users"></i> PENGGIAT KERJA SAMA <small class="m-l-sm"></small></h5>
        <div class="ibox-tools">
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </div>
    </div>
    <div class="ibox-content" style="min-height:600px;">
        <div class="panel-group panel-group-penggiat"></div>
    
        <!-- template field -->
        <div class="panel panel-default panel-penggiat-template hidden" data-index="" data-pelaksana="hide"> 
            <div class="panel-heading"> 
                    <h5 class="panel-title"> 
                        <a class="pull-right close-link"><i class="fa fa-close"></i></a>
                        <a class="block panel-collapse-link" data-parent=".panel-group-penggiat"  data-toggle="collapse" href="#"> 
                            <i class="fa fa-map-marker m-r-sm "></i> 
                            <label class="m-r-sm">Pihak <span>2</span> # </label><label><span class="caption" style="display:none;"></span></label> 
                        </a> 
                    </h5> 
            </div>
            <div class="panel-collapse collapse"> 
                <div class="panel-body"> 
                    <input type="hidden" data-field="id_penggiat" />
                    <input type="hidden" data-field="id_kerma" />
                    <input type="hidden" data-field="nm_pihak" />
                    <div class="form-group"> 
                        <div class="col-sm-12"> <label>Nama Instansi</label> </div> 
                        <div class="col-sm-12"> 
                            <div class="input-group">
                                <div class="input-group-btn" >
                                    <select data-field="a_lembaga" class="select2-control" ></select>
                                </div>
                                <select data-field="id_institusi" class="ellipsis"  ></select>
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-mitra m-h-xs " title="Tambah Mitra" ><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div class="form-group" style="display:none;"> 
                        <div class="col-sm-12"> <label>Unit Pelaksana</label>  </div> 
                        <div class="col-sm-12"> 
                            <select data-field="pelaksana" class=""  ></select>
                        </div> 
                    </div>

                    <hr/>
                    <div class="form-group"> 
                        <div class="col-sm-2"> <label>Alamat</label> </div> 
                        <div class="col-sm-10"> <textarea data-field="alamat" rows="2" class="form-control"></textarea></div> 
                    </div> 

                    <hr/>
                    <div class="m-b-lg mb-2 b">
                        <h3>Penandatangan</h3>
                        <span class="small text-muted">Pejabat yang menandatangani dokumen</span>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-6">
                            <div class="row "> 
                                <div class="col-sm-12"> <label>Nama :</label> </div> 
                                <div class="col-sm-12"> 
                                    <input type="text" data-field="ttd_nama" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row "> 
                                <div class="col-sm-12"> <label>Jabatan :</label> </div> 
                                <div class="col-sm-12"> 
                                    <input type="text" data-field="ttd_jabatan" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div> 

                    <hr/>
                    <div class="m-b-lg mb-2 b">
                        <h3>Penanggung Jawab (jika ada)
                            <a href="#" class="collapse-link-pic" data-toggle="collapse" aria-expanded="false" >
                                <i class="fa fa-chevron-down"></i>
                            </a>
                        </h3>
                    </div> 
                    <div class="form-group form-group-pic collapse"> 
                        <div class="col-sm-6">
                            <div class="row "> 
                                <div class="col-sm-12"> <label>Nama :</label> </div> 
                                <div class="col-sm-12"> 
                                    <input type="text" data-field="pic_nama" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row "> 
                                <div class="col-sm-12"> <label>Jabatan :</label> </div> 
                                <div class="col-sm-12"> 
                                    <input type="text" data-field="pic_jabatan" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div> 
                        
                </div>
            </div>
        </div>

        <!-- panel control -->       
        <div class="row">
            <div class="col-sm-12 border-top-sm">
                <button type="button" class="btn btn-sm btn-add btn-primary" title="Tambah Penggiat">
                    <i class="fa fa-plus"></i> Tambah Penggiat
                </button>
            </div>
        </div>

    </div>
</div> 

<script>

var InstitutionSelector = {
    id: '*[data-field="id_institusi"]',
    debug: false,
    datasources: false,
    Init: function() {
        // do init 
        this.Bind(Datasources, 'dsRepo');
        
        this.datasources = [
            {id: 'university', text: 'Perguruan Tinggi', url: this.dsRepo.GetUrl('university')},
            {id: 'mitra', text: 'Mitra', url: this.dsRepo.GetUrl('mitra') }
        ];

        delete this.Init;
        return this;
    },
    Bind: function(object, attr) {
        this[attr] = object;
        this[attr].Parent = this;
        this[attr].Init();
    },
    Set: function(idx) {
        var selector = this;
        var field = this.Parent;
        var panel = field.GetPanel(idx);

        // datasource control
        var a_lembaga = panel.find('*[data-field="a_lembaga"]').select2({
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth:true,
            width:'element',
            data: this.datasources,
        }).on('change', function() {
            var val = $(this).select2('data');
            if(val.length==0) return;

            field.SetField(idx, 'id_institusi', {reset: true});
            field.SetMode(idx, val[0].id);
        });

        /* Institusi Selector */
        field.Selector(idx, selector.id, {
            placeholder: 'Cari lembaga/ institusi',
            datasource: function() {
                var dscontrol = a_lembaga.select2('data');
                if(dscontrol.length==0) return;
                
                return selector.dsRepo.GetUrl(dscontrol[0].id);
            },
            request: function(panel, params) {
                return {
                    q: params.term,
                    page: params.page
                };
            }
        }).on('change', function (e) {
            var selected = $(this).select2('data');
            if(selected==0) return;
            selector.OnChange(idx, selected[0]); 
        });
    },
    OnChange: function(idx, data) {
        if(this.debug) console.log('Institution has changed: '+JSON.stringify(data))

        var panel = this.Parent.GetPanel(idx);
        panel.find('.caption').first().html(': '+data.text);

        this.Parent.SetField(idx, 'nm_pihak', {value: data.text });
        this.Parent.SetField(idx, 'alamat', {value: data.alamat });

        var ena = (data.id) ? true: false;
        this.Parent.SetField(idx, 'pelaksana', {enabled: ena, reset: true});
    },
    Val: function(idx, val, src) {
        var selector = this;
        var panel = selector.Parent.GetPanel(idx);

        var datasource = this.dsRepo.GetUrlSelected('university', val);
        if(src=='mitra') datasource = this.dsRepo.GetUrlSelected('mitra', val);

        panel.find('*[data-field="a_lembaga"]').val(src).trigger('change');

        var institusi = this.Parent.Selector(idx, this.id, {
            selected: datasource
        });

        /* adjustment */
        var selected = institusi.select2('data').length;
        if(selected==0) {
            panel.find('*[data-field="pelaksana"]').select2('enable', false);
        }
    },
    Enabled: function(idx, ena) {
        var panel = this.Parent.GetPanel(idx);

        panel.find(this.id).select2('enable', ena);
        panel.find('*[data-field="a_lembaga"]').select2('enable', ena);
    },
    Src: function(idx, idds) {
        var panel = this.Parent.GetPanel(idx);
        var dscontrol = panel.find('*[data-field="a_lembaga"]');
        dscontrol.val(idds).trigger('change');
    }
};

var PelaksanaSelector = {
    id: '*[data-field="pelaksana"]',
    debug: false,
    datasources: false,
    Init: function() {
        // do init 
        this.Bind(Datasources, 'dsRepo');
    
        delete this.Init;
        return this;
    },
    Bind: function(object, attr) {
        this[attr] = object;
        this[attr].Parent = this;
        this[attr].Init();
    },
    Set: function(idx) {
        var selector = this;
        var field = this.Parent;
        var panel = field.GetPanel(idx);

        /* Unit Pelaksana Selector */
        field.Selector(idx, selector.id, {
            placeholder: 'Cari: Fakultas, Program Studi, UPT',
            datasource: this.dsRepo.GetUrl('sms'),
            request: this.Request,
            multiple: true
        });
    },
    Request: function(panel, params) {
        var input = panel.find('*[data-field="id_institusi"]').eq(0);
        var selected = input.select2('data');
        if(selected.length==0) return false;
        
		return {
			q: params.term, 
            page: params.page,
            id_parent: selected[0].id
		};
    },
    Val: function(idx, val) { 
        var datasource = this.dsRepo.GetUrlSelected('sms');
        var institusi = this.Parent.Selector(idx, this.id, {
            selected: datasource,
            params: {id: val}
        }).trigger('change');
    }
};

var PenggiatField = {
    fieldid: '#penggiatField',
    data: true,
    debug: false,
    Init: function(params) {
        var field = this;
                this.data = [{"id_institusi":"fbc747a6-12de-44bd-94c6-dbd49288604d","a_lembaga":"university"},{"id_institusi":null,"a_lembaga":"mitra"}];
        
        if(this.debug) console.log('Initial data:'+JSON.stringify(this.data));

        this.Bind(Datasources, 'dsRepo');
        this.Bind(InstitutionSelector, 'Institution');
        this.Bind(PelaksanaSelector, 'Pelaksana');
        this.Bind(FormMitra, 'Mitra');
        this.Mitra.Callback = function(id, params) {
            if(id.length==0) return;
            // do something after save new data
            field.SetMitra(id, params);
            field.Mitra.Close();
        }

        // Event 
        $(this.fieldid).find('.btn-add').on('click', function(){
            var idx = field.Add({});
            field.SetValues(idx, {a_lembaga: 'mitra'});
        });       
        
        // set data, normaly for update mode
        if(this.data) {
            var row = this.data;
            for(var i in row) {
                var params = {closable: true, collapsed: true};
                if(in_array(parseInt(i), [0,1])) params.closable = false;
                if(parseInt(i)==0) params.collapsed = false;

                var idx = this.Add(params);
                this.SetValues(idx, row[i], params);

                                if(parseInt(i)==0)  this.Institution.Enabled(idx, false);
                            } 
        }
        // default val
        else {
            var idx = this.Add({closable: false, collapsed: false});
            this.SetValues(idx, {a_lembaga: 'university'});

            var idx = this.Add({closable: false, collapsed: true});
            this.SetValues(idx, {a_lembaga: 'mitra'});
        }

        delete this.Init;
        return this;
    },
    Bind: function(object, attr) {
        this[attr] = object;
        this[attr].Parent = this;
        this[attr].Init();
    },
    Add: function(params) {
        if(this.debug) console.log('Add panel penggiat:'+JSON.stringify(params));
        
        var idx = this.AppendPanel(params);
        this.SetPanel(idx, params);
        //if(params.data) this.SetValues(idx, params.data);
        
        return idx;
    },
    Remove: function(idx) {
        var panels = this.GetPanel();
        panels.eq(idx).remove();
        return this.ReIndex();
    },
    SetMode: function(idx, mode) {
        if(this.debug) console.log('Set mode '+idx+' :'+mode);
        
        var panel = this.GetPanel(idx);
        var pelaksana = panel.data().pelaksana;
        var a_lembaga = panel.find('*[data-field="a_lembaga"]');
       
        if(mode=='university' ) {
            panel.find('.btn-mitra').parent('div').hide('slow');
            this.EnablePelaksana(idx);
        
        }
        // default
        else {
            panel.find('.btn-mitra').parent('div').show('slow');
            this.EnablePelaksana(idx);
        }
    },
    EnablePelaksana: function(idx, enabled){
        var allow   = this.Parent.AllowPelaksana();
        if(enabled!=undefined) allow = enabled;

        if(idx==undefined) { 
            var panels   = this.GetPanel();
            for(var i in panels) {
                var panel   = panels.eq(i);
                var mode    = panel.find('*[data-field="a_lembaga"]').val();
                var select  = panel.find('*[data-field="pelaksana"]');
                if(allow && mode=='university')
                    select.parents('.form-group').show('slow');
                else 
                    select.parents('.form-group').hide('slow');
            }
        }
        else {
            var panel   = this.GetPanel(idx);
            var mode    = panel.find('*[data-field="a_lembaga"]').val();
            var select  = panel.find('*[data-field="pelaksana"]');
            if(allow && mode=='university')
                select.parents('.form-group').show('slow');
            else 
                select.parents('.form-group').hide('slow');
        }
    },
    GetPanel: function(idx) {
        if(idx==undefined) return $(this.fieldid).find('.panel-penggiat');
        return $(this.fieldid).find('.panel-penggiat[data-index="'+idx+'"]');   
    },
    AppendPanel: function(params) {
        var panels    = this.GetPanel();
        var template  = $(this.fieldid).find('.panel-penggiat-template').eq(0).clone();
        var idx       = panels.length;

        template.removeClass('panel-penggiat-template hidden').addClass('panel-penggiat');
        
        if(params.class!=undefined) template.addClass(params.class);
        
        // set inputs attribs
        template = this.SetIndex(idx, template);
        
        $(this.fieldid).find('.panel-group-penggiat').append(template);
        return idx;
    },
    ReIndex: function() {
        var panels = this.GetPanel();    
        for(var i=0; i<panels.length; i++) {
            var panel = panels.eq(i);
            var params = panel.data();
            this.SetIndex(i, panel);
            this.SetPanel(i, params);
        }
        return true;
    },
    SetIndex: function(idx, panel) {
        var field = this;
        if(panel==undefined) var panel = this.GetPanel(idx);
        
        panel.attr('data-index', idx);
        panel.find('*[data-field="id_penggiat"]').attr('name', 'penggiat['+idx+'][id_penggiat]');
        panel.find('*[data-field="id_kerma"]').attr('name', 'penggiat['+idx+'][id_kerma]');
        panel.find('*[data-field="id_institusi"]').attr('name', 'penggiat['+idx+'][id_institusi]');
        panel.find('*[data-field="pelaksana"]').attr('name', 'penggiat['+idx+'][pelaksana][]');
        panel.find('*[data-field="nm_pihak"]').attr('name', 'penggiat['+idx+'][nm_pihak]');
        panel.find('*[data-field="alamat"]').attr('name', 'penggiat['+idx+'][alamat]');
        panel.find('*[data-field="ttd_nama"]').attr('name', 'penggiat['+idx+'][ttd_nama]');
        panel.find('*[data-field="ttd_jabatan"]').attr('name', 'penggiat['+idx+'][ttd_jabatan]');
        panel.find('*[data-field="pic_nama"]').attr('name', 'penggiat['+idx+'][pic_nama]');
        panel.find('*[data-field="pic_jabatan"]').attr('name', 'penggiat['+idx+'][pic_jabatan]');
        panel.find('*[data-field="a_lembaga"]').attr('name', 'penggiat['+idx+'][a_lembaga]');

        panel.find('.panel-collapse-link').attr('href','#panel-penggiat-collapse-'+idx);
        panel.find('.panel-collapse').attr('id','panel-penggiat-collapse-'+idx);
        panel.find('.collapse-link-pic').attr('href','#form-group-pic-'+idx);
        panel.find('.form-group-pic').attr('id','form-group-pic-'+idx);
       
        panel.find('.close-link').removeClass(function (index, css) {
            return (css.match (/(^|\s)close\-link\S+/g) || []).join(' ');
        }).addClass('close-link-'+idx);

        return panel;
    },
    SetPanel: function(idx, params) {
        var field = this;
        var panel = field.GetPanel(idx);
        var closable = (params.closable==true || params.closable==undefined) ? true: false;
        var collapse = (params.collapsed==true || params.collapsed==undefined) ? true: false;

        panel.attr('data-closable', closable);
        panel.attr('data-collapsed', collapse);
        panel.find('.panel-title label span:first').html(parseInt(idx)+1);
        
        // close panel event
        if(closable==true) {
            panel.find('.close-link-'+idx).removeClass('hidden')
            .unbind().click(function(e) {
                e.preventDefault();
                return field.Remove(idx);
            });
        }
        else panel.find('.close-link-'+idx).addClass('hidden');
       
        // button add mitra
        panel.find('.btn-mitra').unbind().click(function() {
            return field.AddMitra({index: idx});
        });

        field.Institution.Set(idx);
        field.Pelaksana.Set(idx);
        
        // show caption when collapsed
        var link = panel.find('.panel-heading > .panel-title > .panel-collapse-link');
        panel.find('.panel-collapse')
        .on('show.bs.collapse', function(e) { link.find('.caption').first().hide("slow"); })
        .on('hide.bs.collapse', function(e) { link.find('.caption').first().show("slow"); })
        .on('shown.bs.collapse', function(e) { panel.attr('data-collapsed', false)})
        .on('hidden.bs.collapse', function(e) { panel.attr('data-collapsed', true)})
        .collapse((collapse)?'hide':'show').trigger('show.bs.collapse hide.bs.collapse');

        return;
    },
    SetValues: function(idx, data) {
        if(this.debug) console.log('Set val '+idx+' :'+JSON.stringify(data));

        var panel = this.GetPanel(idx);
        
        if(data.a_lembaga!=undefined) 
            this.Institution.Src(idx, data.a_lembaga);
        else 
            this.Institution.Src(idx, 'university');

        panel.find('*[data-field="id_penggiat"]').val(data.id_penggiat);
        panel.find('*[data-field="id_kerma"]').val(data.id_kerma);
        panel.find('*[data-field="nm_pihak"]').val(data.nm_pihak);
        panel.find('*[data-field="alamat"]').val(data.alamat);
        panel.find('*[data-field="ttd_nama"]').val(data.ttd_nama);
        panel.find('*[data-field="ttd_jabatan"]').val(data.ttd_jabatan);
        panel.find('*[data-field="pic_nama"]').val(data.pic_nama);
        panel.find('*[data-field="pic_jabatan"]').val(data.pic_jabatan);

        if(data.id_institusi) {
            this.Institution.Set(idx);
            this.Institution.Val(idx, data.id_institusi, data.a_lembaga);
        }
        
        if(data.pelaksana) 
            this.Pelaksana.Val(idx, data.pelaksana);
        
    },
    SetField: function(idx, fieldname, params) {
        var panel = this.GetPanel(idx);
        var input = panel.find('*[data-field="'+fieldname+'"]');
        
        if(params.value!=undefined) {
            input.val(params.value);
        }

        if(params.enabled!=undefined) {
            input.select2('enable', params.enabled);
        }

        if(params.display!=undefined) {
            if(params.display) {
                input.parents('.form-group').show();
                panel.attr('data-pelaksana','show');
            }
            else {
                input.parents('.form-group').hide();
                panel.attr('data-pelaksana','hide');
            }
        }

        if(params.reset!=undefined) {
            if(params.reset) {
                input.val(null).trigger('change');
            }
        }
    },
    Selector: function(idx, selector, opt) {
        var This    = this;
        var panel   = this.GetPanel(idx);
        var select  = panel.find(selector).eq(0);
        var placeholder = (opt.placeholder) ? opt.placeholder: 'Cari';
        var request = (opt.request) ? opt.request: false;
        var multiple = (opt.multiple) ? opt.multiple: false;
        var params = (opt.params) ? opt.params: false;
        
        console.log('Set Selector: '+idx+': '+JSON.stringify(opt));

        // select2 init
        if(opt.datasource!=undefined) {
            select.select2({
                ajax: {
                    url: opt.datasource,
                    dataType: 'json',
                    delay: 250,
                    method: 'POST',
                    data: function (params) {
                        return request(panel, params);
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
                templateResult: function(data) {
                    return data.html;
                },
                templateSelection: function(data) {
                    return data.text;
                },
                minimumInputLength: 3,
                multiple: multiple,
                placeholder: placeholder
            });
        }

        // select2 set value
        if(opt.selected!=undefined && opt.selected.length>0) {
            $.ajax({
                url: opt.selected,
                dataType: 'json',
                method: 'POST',
                data: params,
            }).then(function(data) {
                var selected = [];
                
                if($.isArray(data)) {
                    for(var i in data) {
                        selected[i] = data[i].id;

                        var option = new Option(data[i].text, data[i].id, true, true);
                        select.append(option).trigger('change');
                    }

                    select.trigger({
                        type: 'select2:select',
                        params: { data: data }
                    });

                    //select.select2({data: data});
                    //select.select2('val', selected, true);
                    //select.trigger('change');
                }
                else if(data.id!=undefined) {
                    selected = [data.id];
                
                    var option = new Option(data.text, data.id, true, true);
                    select.append(option).trigger('change');
                    select.trigger({
                        type: 'select2:select',
                        params: { data: data }
                    });
                    select.trigger('change');
                }

                
            });
        }

        return select;
    },
    AddMitra: function(params) {
        this.Mitra.Add(params);
        return false;
    },
    SetMitra: function(id, params) {
        if(params.index==undefined) return;
        this.Selector(params.index, '*[data-field="id_institusi"]', {
            selected: this.dsRepo.GetUrlSelected('mitra', id)
        }).trigger('change');
    }
};

</script>        </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6"> 
        <div class="">
            <!-- Bentuk kegiatan -->
            <div id="kegiatanField" class="ibox float-e-margins" >
    <div class="ibox-title">
        <h5><i class="fa fa-tag"></i> BENTUK KEGIATAN <small class="m-l-sm"></small></h5>
        <div class="ibox-tools">
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </div>
    </div>
    <div class="ibox-content ibox-heading" >
        <div class="form-group">
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <select  placeholder="Bentuk Kegiatan"  id="select_kegiatan"  name="select_kegiatan" ><option /><option  value="3" >Asistensi Mengajar di Satuan Pendidikan-Kampus Merdeka</option><option  value="10" >Gelar Bersama (Joint Degree)</option><option  value="11" >Gelar Ganda (Dual Degree)</option><option  value="7" >Kegiatan Wirausaha-Kampus Merdeka</option><option  value="2" >Magang/ Praktik Kerja-Kampus Merdeka</option><option  value="5" >Membangun Desa/KKN Tematik-Kampus Merdeka</option><option  value="39" >Pelatihan</option><option  value="34" >Pelatihan Dosen dan Instruktur</option><option  value="17" >Pemagangan</option><option  value="19" >Penelitian Bersama</option><option  value="25" >Penelitian Bersama - Artikel/Jurnal Ilmiah</option><option  value="23" >Penelitian Bersama - Paten</option><option  value="24" >Penelitian Bersama - Prototipe</option><option  value="4" >Penelitian/Riset-Kampus Merdeka</option><option  value="16" >Penerbitan Berkala Ilmiah</option><option  value="20" >Pengabdian Kepada Masyarakat</option><option  value="31" >Pengembangan Kurikulum/Program Bersama</option><option  value="37" >Pengembangan Pusat Penelitian dan Pengembangan Keilmuan</option><option  value="38" >Pengembangan Sistem / Produk</option><option  value="33" >Pengiriman Praktisi sebagai Dosen</option><option  value="32" >Penyaluran Lulusan</option><option  value="18" >Penyelenggaraan Seminar/Konferensi Ilmiah</option><option  value="22" >Pertukaran Dosen</option><option  value="13" >Pertukaran Mahasiswa</option><option  value="1" >Pertukaran Pelajar-Kampus Merdeka</option><option  value="8" >Proyek Kemanusiaan-Kampus Merdeka</option><option  value="6" >Studi/Proyek Independen-Kampus Merdeka</option><option  value="35" >Transfer Kredit </option><option  value="36" >Visiting Professor</option></select>  
                </div>
            </div> 
        </div>
    </div>
    <div class="ibox-content" style="min-height:550px;">

        <div class="panel-group panel-group-kegiatan"></div>

        <!-- template field -->
        <div class="panel panel-default panel-kegiatan-template hidden" data-index="" data-kegiatan="">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a class="close-link pull-right"><i class="fa fa-close"></i></a>
                    <a class="block panel-collapse-link" data-toggle="collapse" href="#">
                    <i class="fa fa-bullseye m-r-sm "></i> <label></label>
                    </a> 
                </h5> 
            </div>
            <div class="panel-collapse collapse in">
                <div class="panel-body">
                    <input type="hidden" data-field="id_kegiatan" />
                    <input type="hidden" data-field="id_kerma" />
                    <input type="hidden" data-field="id_bentuk_kegiatan" />
                    <input type="hidden" data-field="bentuk_kegiatan" />
                    <div class="form-group">
                        <div class="col-sm-12"> <label>Nilai kontrak</label> 
                            <div class="text-muted small m-b-xs mb-1">Nominal nilai kontrak proposal</div>
                        </div>
                        <div class="col-sm-12"> 
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text"  data-field="nilai_kontrak" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12"><label>Luaran</label></div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon text-muted">Volume</span>
                                <input type="text" data-field="volume" class="form-control"/>
                                <span class="input-group-addon text-muted">@</span>
                                <input type="text"  data-field="satuan" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12"> <label>Keterangan</label> <div class="text-muted small m-b-xs mb-1">Ringkasan luaran dari kegiatan</div></div>
                        <div class="col-sm-12"> <textarea data-field="note_luaran" rows="3" class="form-control"></textarea></div>
                    </div>
                </div> 
                <div class="panel-footer">
                    <div class="form-group">
                        <div class="col-sm-3"> <label>Sasaran</label> </div>
                        <div class="col-sm-9"> <select data-field="id_program" ></select></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3"> <label>Indikator Kinerja</label> </div>
                        <div class="col-sm-9"> <select data-field="id_indikator" ></select></div>
                    </div>
                    
                </div> 
            </div> 
        </div>
    </div>
</div> 

<script>

var KegiatanField = {
    fieldid: '#kegiatanField',
    data: false,
    debug: false,
    Init: function() {
        var field = this;

        
        this.Bind(Datasources, 'dsRepo');
        
        $("#select_kegiatan").select2({
            placeholder: 'Pilih bentuk kegiatan'
        })
        .change(function(){
            var data = $(this).select2("data")[0]; 
            if(data.id.length==0) return;

            var panels = field.GetPanel(data.id);
            if(panels.length>0) {
                swal({
                    title: "Warning!",
                    text: "Bentuk kerjasama \""+data.text+"\" sudah dipilih!",
                    icon: "warning",
                    dangerMode: true
                }).then((value) => {
                    // do something
                    return false;
                });
            }
            else {
                field.Add({data: {
                    id_bentuk_kegiatan: data.id,
                    bentuk_kegiatan: data.text,
                }});
            }
                
            $(this).val(null).trigger('change');
        });

        if(this.data) {
            for(var i in this.data) {
                var row = this.data[i];
                var params = {closable: true, collapsed: true, data: row}
                this.Add(params);
            }
        }
    },
    Bind: function(object, attr) {
        this[attr] = object;
        this[attr].Parent = this;
        this[attr].Init();
    },
    Add: function(params) {
        if(this.debug) console.log('Add panel kegiatan.');
                
        var idx = this.AppendPanel(params);
        this.SetPanel(idx, params);
        if(params.data) this.SetValues(idx, params.data);
        
        return idx;
    },
    GetPanel: function(idx) {
        if(idx!=undefined) 
            return $(this.fieldid).find('.panel-kegiatan[data-index="'+idx+'"]');

        return $(this.fieldid).find('.panel-kegiatan');
    },
    AppendPanel: function(params) {
        var template  = $(this.fieldid).find('.panel-kegiatan-template').eq(0).clone();
        var row       = params.data;
        var idx       = row.id_bentuk_kegiatan;

        template.removeClass('panel-kegiatan-template hidden').addClass('panel-kegiatan');
        
        if(params.class!=undefined) template.addClass(params.class);
        
        // set inputs attribs
        template = this.SetIndex(idx, template);
        
        $(this.fieldid).find('.panel-group-kegiatan').append(template);
        return idx;
    },
    SetIndex: function(idx, panel) {
        var field = this;
        if(panel==undefined) var panel = this.GetPanel(idx);

        panel.attr('data-index', idx);
        panel.find('*[data-field="id_bentuk_kegiatan"]').attr('name', 'kegiatan['+idx+'][id_bentuk_kegiatan]');
        panel.find('*[data-field="id_kegiatan"]').attr('name', 'kegiatan['+idx+'][id_kegiatan]');
        panel.find('*[data-field="id_kerma"]').attr('name', 'kegiatan['+idx+'][id_kerma]');
        panel.find('*[data-field="bentuk_kegiatan"]').attr('name', 'kegiatan['+idx+'][bentuk_kegiatan]');
        panel.find('*[data-field="id_program"]').attr('name', 'kegiatan['+idx+'][id_program]');
        panel.find('*[data-field="id_indikator"]').attr('name', 'kegiatan['+idx+'][id_indikator]');
        panel.find('*[data-field="nilai_kontrak"]').attr('name', 'kegiatan['+idx+'][nilai_kontrak]');
        panel.find('*[data-field="volume"]').attr('name', 'kegiatan['+idx+'][volume]');
        panel.find('*[data-field="satuan"]').attr('name', 'kegiatan['+idx+'][satuan]');
        panel.find('*[data-field="note_luaran"]').attr('name', 'kegiatan['+idx+'][note_luaran]');

        panel.find('.panel-collapse-link').attr('href','#panel-kegiatan-collapse-'+idx);
        panel.find('.panel-collapse').attr('id','panel-kegiatan-collapse-'+idx);
       
        panel.find('.close-link').removeClass(function (index, css) {
            return (css.match (/(^|\s)close\-link\S+/g) || []).join(' ');
        }).addClass('close-link-'+idx);

        return panel;
    },
    SetPanel: function(idx, params) {
        if(this.debug) console.log('Set Panel '+idx+' kegiatan.');

        var field = this;
        var panel = field.GetPanel(idx);
        var closable = (params.closable==true || params.closable==undefined) ? true: false;
        var collapse = (params.collapsed==true || params.collapsed==undefined) ? true: false;

        panel.attr('data-closable', closable);
        panel.attr('data-collapsed', collapse);
        
        if(closable==true) {
            panel.find('.close-link').removeClass('hidden')
            .on('click', function() {
                field.Remove(idx);
            });
        }
        else panel.find('.close-link').addClass('hidden');

        /* Program Selector */
        /*
        var program = field.Selector(idx, '*[data-field="id_program"]', {
            datasource: field.DS.GetUrl('program'),
            placeholder: 'Cari sasaran program',
            request: function(panel, params) {
                return { q: params.term, page: params.page };
            }
        })
        .on('change', function() {
            var val = $(this).select2('data');
            if(val.length==0) return;

            field.OnChangeProgram(idx, val[0].id);
        });*/

        /* Program Selector */
        panel.find('*[data-field="id_indikator"]').select2({
            placeholder: 'Pilih indikator kinerja',
        });
        
        /* default value */
        //panel.find('*[data-field="id_bentuk_kegiatan"]').val(idx);

    },
    SetValues: function(idx, data) {
        var panel = this.GetPanel(idx);

        if(this.debug) console.log('Set values panel '+idx+' kegiatan:');

        panel.find('.panel-title label').html(data.bentuk_kegiatan);

        panel.find('*[data-field="id_kerma"]').val(data.id_kerma);
        panel.find('*[data-field="id_kegiatan"]').val(data.id_kegiatan);
        panel.find('*[data-field="id_bentuk_kegiatan"]').val(data.id_bentuk_kegiatan);
        panel.find('*[data-field="bentuk_kegiatan"]').val(data.bentuk_kegiatan);
        panel.find('*[data-field="nilai_kontrak"]').val(data.nilai_kontrak);
        panel.find('*[data-field="volume"]').val(data.volume);  
        panel.find('*[data-field="satuan"]').val(data.satuan);  
        panel.find('*[data-field="note_luaran"]').val(data.note_luaran);  
        
        this.SetProgram(idx, data.id_program, data.id_indikator);
        
    },
    SetField: function(idx, fieldname, params) {
        var panel = this.GetPanel(idx);
        var input = panel.find('*[data-field="'+fieldname+'"]');
        
        if(params.value!=undefined) {
            input.val(params.value);
        }

        if(params.enabled!=undefined) {
            input.select2('enable', params.enabled);
        }
    },
    Selector: function(idx, selector, opt) {
        var panel   = this.GetPanel(idx);
        var select  = panel.find(selector);
        var placeholder = (opt.placeholder) ? opt.placeholder: 'Cari';
        var request = (opt.request) ? opt.request: false;

        // select2 init
        if(opt.datasource!=undefined) {
            select.select2({
                ajax: {
                    url: opt.datasource,
                    dataType: 'json',
                    delay: 250,
                    method: 'POST',
                    data: function (params) {
                        return request(panel, params);
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
                templateResult: function(data) {
                    return data.html;
                },
                templateSelection: function(data) {
                    return data.text;
                },
                minimumInputLength: 3,
                placeholder: placeholder
            });
        }

        // select2 set value
        if(opt.selected!=undefined && opt.selected.length>0) {
            $.ajax({
                url: opt.selected,
                dataType: 'json'
            }).then(function(data) {
                var option = new Option(data.text, data.id, true, true);
                select.append(option).trigger('change');
                select.trigger({
                    type: 'select2:select',
                    params: { data: data }
                });
            });
        }

        return select;
    },
    SetProgram: function(idx, value, indikator) {
        if(this.debug) console.log('Set program  '+idx+' :'+value);

        var field = this;
        var panel = this.GetPanel(idx);
        var select = panel.find('*[data-field="id_program"]');
        var option = [{id:'', text:''}];
        
        $.ajax({
            type:'POST',
            dataType: 'json',
            url: this.dsRepo.GetUrl('program'),
            success: function(response){
                if(field.debug) console.log('Get master proggram');
                    
                select.empty().trigger('change');
                select.select2({
                    placeholder: 'Pilih sasaran program',
                    data: option.concat(response.items)
                })
                .on('change', function() {
                    var val = $(this).select2('data');
                    if(val.length==0) return;

                    field.SetIndikator(idx, val[0].id, indikator);
                    indikator = null;
                });

                if(value!=undefined) 
                    select.val(value).trigger('change'); 
                    
            }
        });
    },
    SetIndikator: function(idx, program, value) {
        if(this.debug) console.log('Set indikator  '+idx+': program:'+program+': '+value);

        var field = this;
        var panel = this.GetPanel(idx);
        var select = panel.find('*[data-field="id_indikator"]');
        var option = [{id:'', text:''}];
        
        $.ajax({
            type:'POST',
            dataType: 'json',
            data: {id_program: program},
            url: this.dsRepo.GetUrl('indikator'),
            success: function(response){
                if(field.debug) console.log('Get indikator kegiatan.');

                select.empty().trigger('change');
                select.select2({
                    placeholder: 'Pilih indikator kinerja',
                    data: option.concat(response.items)
                })
                .on('change', function() {
                    var val = $(this).select2('data');
                    if(val.length==0) return;

                    // do something
                    //panel.find('*[data-field="satuan"]').val(val[0].satuan);  
                    
                });

                if(value!=undefined) 
                    select.val(value).trigger('change'); 
                    
            }
        });

    },
    Remove: function(idx) {
        var panel = this.GetPanel(idx);
        panel.remove();
    },
};

</script>        </div>
        </div>
    </form>
    

<script>

var Datasources = {
    repo: false,
    Init: function() {
        // do init 
        this.repo = {"kerma":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/kerma\/xhr\/select2","selected":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/kerma\/xhr\/select2-selected"},"mitra":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/mitra\/xhr\/select2","selected":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/mitra\/xhr\/select2-selected"},"university":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2-universitas","selected":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2-selected"},"sms":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2","selected":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2-selected"},"prodi":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2-prodi","selected":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2-selected"},"fakultas":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2-fakultas","selected":"https:\/\/laporankerma.kemdikbud.go.id\/sys\/units\/xhr\/select2-selected"},"program":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/program\/xhr\/select2","selected":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/program\/xhr\/select2-selected"},"indikator":{"datasource":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/indikator\/xhr\/select2","selected":"https:\/\/laporankerma.kemdikbud.go.id\/kerma\/indikator\/xhr\/select2-selected"}};

        return this;
    },
    GetUrl: function(key) {
        return this.repo[key].datasource
    },
    GetUrlSelected: function(key, id) {
        var url = this.repo[key].selected;
        if(id!=undefined) url += '/'+id;
        return url
    }
};

var Page = {
    formid: '#kermaForm',
    a_pks: [6,7],
    jenis: false,
    data: false,
    debug: false,
    Init: function(data) {        
        var form = this;
                this.data = {"penggiat":[{"id_institusi":"fbc747a6-12de-44bd-94c6-dbd49288604d","a_lembaga":"university"},{"id_institusi":null,"a_lembaga":"mitra"}]};
        
        this.Bind(Datasources, 'dsRepo');
        this.Bind(PenggiatField, 'Penggiat');
        this.Bind(KegiatanField, 'Kegiatan');

        if(UploadField!=undefined)
            this.Bind(UploadField, 'Upload', {data: this.data.dokumens});
        
        $(this.formid).validate({
            wrapper:'div',
            errorClass: 'error small',
            errorPlacement: function(error, element){
                error.appendTo(element.parents('.col'));
            },
            rules: {
                id_jns_dok: { required: true },
                judul_kerma: { required: true },
                id_stat_kerma: { required: true },
                tgl_awal: { required: true }
            },
            messages: {
                id_jns_dok: { required: "Jenis dokumen kerjasama belum ditentukan" },
                judul_kerma: { required: "Judul kerjasama harus didisi" },
                id_stat_kerma: { required: "Status kerjasama belum ditentukan" },
                tgl_awal: { required: "Tanggal awal kerjasama harus di isi" }
            },
        });
        
        var dokumen = $("#id_jns_dok").select2({
            placeholder: 'Pilih jenis dokumen kerjasama',
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth:true
        })
        .change(function(){
            var data = $(this).select2("data"); 
            if(data.length==0) return;

            form.jenis = data[0].id;
            form.Mode();
        });

        var dasar = $("#id_parent").select2({
                ajax: {
                    url: this.dsRepo.GetUrl('kerma'),
                    dataType: 'json',
                    delay: 250,
                    method: 'POST',
                    data: function(params) {
                        var jns_dok = dokumen.val();
                        return {
                            q: params.term, 
                            page: params.page,
                            id_jns_dok: jns_dok
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
                templateResult: function(data) {
                    return data.html;
                },
                templateSelection: function(data) {
                    return data.text;
                },
                minimumInputLength: 3,
                placeholder: 'Cari dasar dokumen kerja sama'
        });

        $("#id_sumber_dana").select2({
            placeholder: 'Pilih sumber pendanaan',
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth:true
        })
        
        $("#id_stat_kerma").select2({
            placeholder: 'Status Kerja Sama'
        });

        $('#tgl_awal').datepicker({
			todayBtn: "linked",
		    keyboardNavigation: false,
		    forceParse: false,
		    calendarWeeks: false,
		    autoclose: true,
		    format: 'dd-mm-yyyy'
		}).on("dp.change", function (e) {
            $('#tgl_akhir').data("DateTimePicker").minDate(e.date);
        });

        $('#tgl_akhir').datepicker({
			todayBtn: "linked",
		    keyboardNavigation: false,
		    forceParse: false,
		    calendarWeeks: false,
		    autoclose: true,
		    format: 'dd-mm-yyyy'
		})

        // Set Value
        dokumen.trigger('change');
        
        // set dasar kerjasama
        if(this.data.id_parent!=undefined) {
            $.ajax({
                url: this.dsRepo.GetUrlSelected('kerma', this.data.id_parent),
                dataType: 'json'
            }).then(function(data) {
                var option = new Option(data.text, data.id, true, true);
                dasar.append(option).trigger('change');
                dasar.trigger({
                    type: 'select2:select',
                    params: { data: data }
                });
            });
        }
        delete this.Init;
        return this;
    },
    Mode: function() {
        var allow   = this.AllowPelaksana();
        if(allow) 
            $(this.formid).find(".form-group.teknis").show('slow');
        else
            $(this.formid).find(".form-group.teknis").hide('slow');

        this.Penggiat.EnablePelaksana();
    }, 
    AllowPelaksana: function() {
        return (in_array(this.jenis, this.a_pks)) ? true: false; 
    },
    Bind: function(object, attr, data) {
        this[attr] = object;
        this[attr].Parent = this;
        this[attr].Init(data);
    },  
    List: function() {
        location.href="https://laporankerma.kemdikbud.go.id/kerma/kerma";
    },
    Save: function() {
        if(!$(this.formid).valid()) return false;
        
        var files = this.Upload.GetFiles();
        var data = [];
        for(i in files) {
            data[i] = {
                name: files[i].name,
                type: files[i].type,
                size: files[i].size,
                tmp_name: files[i].tmp_name
            }
        }
        $('#files').val(JSON.stringify(data));
        
        this.Penggiat.Institution.Enabled(0, true);
        $(this.formid).submit();
    }
};
Page.Init();
</script>	</div>
</div>

		
        <!-- footer-->
        <div class="footer-container">
        <div class="row">
            <div id="footer" style="width: 100%;padding: 10px;background-color: white ;position: absolute;bottom: 0;">
                &copy; Copyright  <strong>DIKTI</strong> v2.3 2023
                <div class="pull-right" >
                    <ul style="display:flex; list-style:none;">
                        <li class="m-l-sm"><a href="#" class="text-muted">About</a></li>
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