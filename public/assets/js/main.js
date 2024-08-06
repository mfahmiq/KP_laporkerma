/*
 * Script utama
 */

(function ($) {
	var ajaxtimeout = 20000;
	
	function encodeURL(str) {
		str = encodeURI(str);
		return str.replace(/'/g, "%27");  
	}

	/* CMODAL PLUGIN
	/*------------------------------------------------------------*/
	/* Digunakan untuk request konten dari server dan menampilkan
	/* kedalam modal container
	/* Author: Muchamad Nur Rochim
	/*------------------------------------------------------------*/
	
	// constructor
	var CModal = function(element, options){
		this.e = $(element);
		this.default = {
			id: this.e.attr('id'),
			title: "&nbsp;",
			subtitle: null,
			controller: null,
			handler: null,
			responsetype: 'html',
			data: {},
			
			submit: false,
			add: false,
			valid:false
		};
		
		this.template = '<div class="modal-dialog" >'+
				'<div class="modal-content animated bounceInRight">'+
				'<div class="modal-header">'+
				'<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>'+
				'<i class="modal-icon text-info fa fa-laptop "></i>'+
				'<h3 class="modal-title text-info"></h3>'+
				'<small class="modal-subtitle font-bold"></small>'+
				'</div>'+
				'<div class="modal-body"></div>'+
				'<div class="modal-footer"><small class="text-muted pull-left">MyModal v.1.0</small></div>'+
				'</div>'+
				'</div>';
				
		this.setoption(this, this.default);
		this.setoption(this, options);
		this.settemplate();
	};
	
	// Private
	CModal.prototype = {
		constructor: CModal,
		setoption: function(o, options) {
			for(var key in options) {
				o[key] = options[key];
			}
			return o;
		},
		settemplate: function(){
			var c = this;
			c.e.addClass('modal inmodal')
				.attr('tabindex',-1)
				.attr('role','dialog')
				.attr('aria-hidden','true');
			
			var content = null;
			if($.trim(c.e.html()))
				content = c.e.html();
			
			c.e.html(c.template);
			c.e.find('.modal-title').html(c.title);
			if(c.subtitle!=null)
				c.e.find('.modal-subtitle').html(c.subtitle);
			
			c.e.find('.modal-body').html(content);
			if(c.btn_close == true){
				var btn = '<button class="modal-btn-close btn btn-sm btn-warning" data-dismiss="modal" title="Batal"><i class="fa fa-undo"></i> Batal</button>';
				c.e.find('.modal-footer').append(btn);
			}

			if(typeof(c.valid) == "function"){
				var btn = '<button class="modal-btn-valid ladda-button btn btn-sm btn-success" data-style="zoom-in" title="Valid"><i class="fa fa-check-square-o"></i> Valid</button>';
				c.e.find('.modal-footer').append(btn);
				c.e.find('.modal-btn-valid').click(c.valid);
			}
			
			if(typeof(c.submit) == "function"){
				var btn = '<button type="submit" class="modal-btn-submit ladda-button btn btn-sm btn-primary" data-style="zoom-in" title="Simpan"><i class="fa fa-save"></i> Simpan</button>';
				c.e.find('.modal-footer').append(btn);
				c.e.find('.modal-btn-submit').click(c.submit);
			}
			
			if(typeof(c.add) == "function"){
				var btn = '<button class="modal-btn-add ladda-button btn btn-sm btn-primary" data-style="zoom-in" title="Tambah"><i class="fa fa-plus"></i> Tambah</button>';
				c.e.find('.modal-footer').append(btn);
				c.e.find('.modal-btn-add').click(c.add);
			}
			
		},
	
		setbutton: function(b, callback) {
			var c = this;
			var btn = {
				'submit': '<button type="submit" class="modal-btn-submit ladda-button btn btn-sm btn-primary" data-style="zoom-in" title="Simpan"><i class="fa fa-save"></i> Simpan</button>',
				'add': '<button class="modal-btn-add ladda-button btn btn-sm btn-primary" data-style="zoom-in" title="Tambah"><i class="fa fa-plus"></i> Tambah</button>',
				'close': '<button class="modal-btn-close btn btn-sm btn-warning" data-dismiss="modal" title="Batal"><i class="fa fa-undo"></i> Batal</button>'
			}
			if(btn[b]!=undefined && c[b]!=undefined) {
				if(typeof(callback) == "function"){
					if(c.e.find('.modal-btn-'+b).length==0) {
						c[b] = callback
						c.e.find('.modal-footer').append(btn[b]);
						c.e.find('.modal-btn-'+b).click(c[b]);
					}
				}
				else if(callback == false || callback == null){
					c.e.find('.modal-btn-'+b).remove();
				}
				else {
					if(c.e.find('.modal-btn-'+b).length==0) {
						c.e.find('.modal-footer').append(btn[b]);
					}
				}
			}
		},
		
		show: function(params) {
			var c = this;
			var p = $.extend({}, params);
			
			var _datatype = (p.responsetype) ? p.responsetype: c.responsetype;
			var _data = (p.data) ? p.data: {};

			if(p.title != null)
				c.e.find('.modal-title').html(p.title);

			if(p.subtitle != null)
				c.e.find('.modal-subtitle').html(p.subtitle);
			
			// request content from server
			if(c.controller && p.handler) {
				$.ajax({
					type: "POST",
					url: c.controller+'/'+p.handler,
					data: _data,
					dataType: _datatype,
					success: function(response){
						if(_datatype=='html') c.e.find('.modal-body').html(response);
						if(_datatype=='json') {
							// panggil fungsi callback
							if(typeof(p.callback) == "function")
								p.callback(response);
							else
								console.log('callback function is not define');
							
						}
						c.e.modal('show');
					}
				});
			}
			else
				c.e.modal('show');
		}, /**/
		
		close: function() {
			var c = this;
			c.e.modal('toggle');
		}
	}
	
	// alias registering
	$.fn.cmodal = function(options) {
		var args = Array.prototype.slice.call(arguments,1); // Get the arguments as Array
				
		return $(this).each(function() {
			var instance = $(this).data('CModal');
			if(instance===undefined){ 
				$(this).data('CModal',new CModal(this,options));
				return this;
			}
			
			// Call method if options is name of method
			if(options!=undefined && $.isFunction(CModal.prototype[options])) {
				return CModal.prototype[options].apply(instance, args); // Call the method
			}
			
			return this;
		});
	};
	$.fn.modal.Constructor.prototype.enforceFocus = $.noop;



	/* FORM MODAL SECTION
	/*--------------------------------------------------------*/
	var FormModal = function(element, options){
		this.e = $(element);
		var o = this.o = $.extend({}, options);
			
		this.id = "#Modal_Common";
		this.data = (o.data) ? o.data: {};
		this.title = (o.title) ? o.title: "Title";
		this.subtitle = (o.subtitle) ? o.subtitle: "Subtitle";
		this.url = (o.url) ? o.url: false;
		this.ctrl= (o.controller) ? o.controller: false;
		this.method = (o.method) ? o.method: false;
		this.retfunc = (o.retfunc) ? o.retfunc: false;
		this.btnShow = (o.button_show) ? o.button_show: false;
		this.template = '<div class="modal inmodal" id="Modal_Common" tabindex="-1" role="dialog" aria-hidden="true">'+
				'<div class="modal-dialog" >'+
				'<div class="modal-content animated bounceInRight">'+
				'<div class="modal-header">'+
				'<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>'+
				'<i class="fa fa-laptop modal-icon"></i>'+
				'<h4 class="modal-title" id="modal_title_id"></h4>'+
				'<small class="font-bold" id="modal_subtitle_id"></small>'+
				'</div>'+
				'<div class="modal-body" id="modal_cont_id"></div>'+
				'</div>'+
				'</div>'+
				'</div>';
		this.Init();
	}
	
	FormModal.prototype = {
		constructor: FormModal,
		Init: function(){
			var fr = this;
			fr.e.html(fr.template);
			$(fr.btnShow).click(function(){fr.Show(true)});
		},
		
		Show: function(clear) {
			if(clear === undefined) clear=0;
			
			var fr = this;
			$(fr.id).show();
			$.ajax({
				type: "POST",
				url: g_abs_url + this.url,
				data: {
					"method": this.method,
					"data": this.data,
					"title": this.title,
					"subtitle": this.subtitle,
					"retfunc": this.retfunc,
					"cleared": clear
				},
				success: function(json){
					var dt = JSON.parse(json);
					$("#modal_cont_id").html(dt.content);
					$("#modal_title_id").html(dt.title);
					$("#modal_subtitle_id").html(dt.subtitle);
					$("#Modal_Common").modal('show');
					$("#FM_BSearch").click(function(){
						var q = $('#FM_keyword').val();
						fr.Search(q);
						return false;
					});
					
				}
			});
				
			return false;
		},
		
		Select: function(dt) {
			eval(this.retfunc+"("+JSON.stringify(dt)+")"); 
		},
		
		Search: function(q) {
			var fr = this;
			$.ajax({
				type: "POST",
				url: g_abs_url + fr.url,
				data: {
					"method": this.method,
					"title": this.title,
					"subtitle": this.subtitle,
					"retfunc": this.retfunc,
					"keyword":q, 
				},
				success: function(json){
					var dt = JSON.parse(json);
					$("#modal_cont_id").html(dt.content);
					$("#modal_title_id").html(dt.title);
					$("#modal_subtitle_id").html(dt.subtitle);
					$("#Modal_Common").modal('show');
				}
			});
		}
	}
	
	$.fn.FModal = function (options) {
		//var ajaxurl = g_abs_url + "ajax/" + kode; 

		return $(this).each(function() {
			var fm = new FormModal(this, options)
		});
	};
	
	/* AUTOCOMPLETE SECTION
	/*--------------------------------------------------------*/
	
	var AutoComplete = function(element, options, callback){
		this.e = $(element);
		var o = this.o = $.extend({}, options);
		this.jdata = {};
		
		this.url = (o.url) ? o.url: false;
		this.ctrl= (o.controller) ? o.controller: false;
		this.method = (o.method) ? o.method: false;

		this.mode = (o.mode) ? o.mode: 'normal';

		this.Init(callback);
	};
	
	AutoComplete.prototype = {
		constructor: AutoComplete,
		Init: function(callback){
			var ac = this;
			$(ac.e).autocomplete({
				minLength: 2,
				source: function(request, response) {
					$.ajax({
						url: ac.url + "/" + encodeURL(request.term),
						timeout: ajaxtimeout,
						dataType: "json",
						success: function(data) {
							response($.map(data.items,function(item) {
								return {label: item.label, value: item.value, desc: item.desc}
							}));
						}
					});
				},
				select: function(event,ui) {
					event.preventDefault();
					
					ac.jdata = ui.item.value;
					$(this).val(ui.item.label);

					// panggil fungsi callback
					if(typeof(callback) == "function")
						callback(ui.item);
				},
				focus: function(event,ui){
					event.preventDefault();
					ac.jdata = ui.item.value;
					$(this).val(ui.item.label);
				}
				
			})
			.data("ui-autocomplete")._renderItem = function( ul, item ) {
					var str = '<b>'+item.label+'</b>';
					if(item.desc!=undefined) 
						str += "<br/>" + item.desc;
					return $( "<li>" )
						.attr( "data-value", item.value )
						.attr( "role", "presentation" )
						.addClass("ui-menu-item")
						.append( "<a class=\"ui-corner-all\" >" + str + "</a>" )
						.appendTo( ul );
			};
			/**/
		},
		
		seturl: function(url){
			this.url = url;	
		}
		
	};
	
	$.fn.AutoComplete = function (options, callback) {
		
		return $(this).each(function() {
			var ac = new AutoComplete(this, options, callback);	
		});
	};
	
	// untuk mendapatakan option select
	$.fn.xhrSetOption = function (kode, param, callback) {
		var ajaxurl = g_abs_url + "ajax/" + kode;
		if (typeof(param) == "object")
			ajaxurl += "/" + param.join("/");
		
		return $(this).each(function() {
			var jqelem = $(this);
			
			var jqxhr = $.ajax({
				url: ajaxurl,
				timeout: ajaxtimeout
			});
			jqxhr.done(function(data) {
				jqelem.html(data);
				
				// panggil fungsi callback
				if (typeof(callback) == "function")
					callback();
			});
		});
	};
	
	// untuk autocomplete dengan ajax (menggunakan jquery ui autocomplete)
	$.fn.xhrAutoCompleteSol = function (idtarget, kode, callback) {
		var ajaxurl = g_abs_url + "ajax/" + kode; 

		return $(this).each(function() {
			$(this).autocomplete({
				source: function(request, response) {
					ajaxurlac = ajaxurl + "/" + encodeURL(request.term);
					
					var jqxhr = $.ajax({
						url: ajaxurlac,
						timeout: ajaxtimeout,
						dataType: "json"
					});
					jqxhr.done(function(data) {
						response($.map(data.items,function(item) {
							return {
								label: item.label,
								value: item.value
							}
						}));
					});
				},
				minLength: 2,
				select: function(event,ui) {
					event.preventDefault();
					
					$("#"+idtarget).val(ui.item.value);
					$(this).val(ui.item.label);

					// panggil fungsi callback
					if(typeof(callback) == "function")
						callback();
				},
				focus: function(event,ui){
					$(this).val(ui.item.label);
				}/*,
				change: function(event,ui) {
					$("#"+idtarget).val("");
				} */
			});
		});
	}
	
	// untuk autocomplete dengan ajax (menggunakan jquery ui autocomplete)
	$.fn.xhrAutoCompleteplus = function (idtarget, kode, idplus, callback) {
		var ajaxurl = g_abs_url + "ajax/" + kode; 

		return $(this).each(function() {
			$(this).autocomplete({
				source: function(request, response) {
					ajaxurlac = ajaxurl + "/" + $('#'+idplus).val() + "/" + encodeURL(request.term);
					
					var jqxhr = $.ajax({
						url: ajaxurlac,
						timeout: ajaxtimeout,
						dataType: "json"
					});
					jqxhr.done(function(data) {
						response($.map(data.items,function(item) {
							return {
								label: item.label,
								value: item.value
							}
						}));
					});
				},
				minLength: 2,
				select: function(event,ui) {
					event.preventDefault();
					
					$("#"+idtarget).val(ui.item.value);
					$(this).val(ui.item.label);

					// panggil fungsi callback
					if(typeof(callback) == "function")
						callback();
				},
				focus: function(event,ui){
					$(this).val(ui.item.label);
				}/*,
				change: function(event,ui) {
					$("#"+idtarget).val("");
				} */
			});
		});
	}
	
	$.fn.xhrAutoSelect = function (kode) {
		var ajaxurl = g_abs_url + "ajax/" + kode;
		
		return $(this).each(function() {
			$(this).autocomplete({
				source: function(request, response) {
					ajaxurlac = ajaxurl + "/" + encodeURL(request.term);
					
					var jqxhr = $.ajax({
						url: ajaxurlac,
						timeout: ajaxtimeout,
						dataType: "json"
					});
					jqxhr.done(function(data) {
						response($.map(data.items,function(item) {
							return {
								label: item.label
							}
						}));
					});
				},
				minLength: 0
			});
			
			$(this).mousedown(function() {
				$(this).autocomplete("search","");
			});
		});
	}
	
	// untuk meload page
	$.fn.xhrSetHTML = function (kode, param, callback) {
		var ajaxurl = g_abs_url + "ajax/" + kode + "/" + param;
		
		return $(this).each(function() {
			var jqelem = $(this);
			
			// beri loading
			jqelem.html('<img src="' + g_assets_url + 'images/loading.gif" />');
			
			var jqxhr = $.ajax({
				url: ajaxurl,
				timeout: ajaxtimeout
			});
			jqxhr.done(function(data) {
				jqelem.html(data);
				
				// panggil fungsi callback
				if (typeof(callback) == "function")
					callback();
			});
		});
	}
	
})(jQuery);