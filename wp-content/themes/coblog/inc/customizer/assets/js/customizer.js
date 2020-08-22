jQuery(document).ready(function($){ 'use strict';

    // Alpha Color Picker
    if( typeof alphaColorPicker != 'undefined' ){
        $( 'input.alpha-color-control' ).alphaColorPicker();
	}

    // Export Cuatomizer Data
    $(document).on('click', '#coblog-export-data', function (e) {
		e.preventDefault();
        window.location.href = coblog_kit.ajax_url+'?action=coblog_export_data';
	});

    // Import Cuatomizer Data
    $('body').on('click', '#coblog-import-data', function (e) {
		e.preventDefault();

		const file_data = $('#coblog-import-data-file').prop('files')[0],
			status = $('#coblog-import-status');

		if (typeof file_data == 'undefined') {
			status.addClass('coblog-import-error')
			status.text(coblog_kit.file_error);
			setTimeout(function () {
				status.removeClass('coblog-import-error')
				status.text('');
			}, 10000);
			return;
		}

		let form_data = new FormData(); 
		form_data.append('file', file_data);
    	form_data.append('name', file_data.name);
		form_data.append('action', 'coblog_import_data');
		
		$.ajax({
			url: coblog_kit.ajax_url,
			cache: false,
            contentType: false,
            processData: false,
			method: "POST",
			data: form_data,
			success: function (html) {
				if (html == 1) {
					status.addClass( 'coblog-import-success' )
					status.text( coblog_kit.import_success );
					setTimeout( function () { location.reload(); }, 2000);
					setTimeout( function () {
                        status.removeClass('coblog-import-success'); 
                        status.text('');
					}, 10000 );
				} else {
					status.addClass('coblog-import-error')
					status.text(coblog_kit.import_error);
					setTimeout(function () {
						status.removeClass('coblog-import-error')
						status.text('');
					}, 10000);
				}
			},
			error: function () {
				status.addClass('coblog-import-error')
				status.text(coblog_kit.import_error);

				setTimeout(function () {
					status.removeClass('coblog-import-error')
					status.text('');
				}, 10000);
			}
		});
	});

	// Customizer Dependency

	$(window).load(function() {

		// Checkbox
		$( '.coblog-checkbox' ).each( function(){ customizerDepends(this); });
		$( '.coblog-checkbox-change' ).on( 'change', function(e){
			const select = $(this).parents('.coblog-checkbox');
			select.data('value', $(select).data('value') ? 0 : 1 )			
			customizerDepends(select);
		});

		// Select
		$( '.coblog-select' ).each( function(){ customizerDepends(this); });
		$( '.coblog-customizer-select' ).on( 'change', 'select', function(e){
			const select = $(this).parents('.coblog-select');
			select.data('value', $(this).val())			
			customizerDepends(select);
		});

		// Layout
		$( '.coblog-layout' ).each( function(){ customizerDepends(this); });
		$( '.coblog-customizer-layout' ).on( 'change', 'input', function(e){
			const select = $(this).parents('.coblog-layout');
			select.data('value', $(this).val())			
			customizerDepends(select);
		});


		function customizerDepends(that) {
			const condition = $(that).data('condition')
			const value = $(that).data('value')

			if(condition){
				condition.split(',').forEach( data => {
					data = data.split('#')
					if (data[1] == '=') {
						if (value == data[2]) { // is equal
							$('#customize-control-'+data[0]).show();
						} else {
							$('#customize-control-'+data[0]).hide();
						}
					} else if (data[1] == '!=') {
						if (value != data[2]) { // not equal
							$('#customize-control-'+data[0]).show();
						} else {
							$('#customize-control-'+data[0]).hide();
						}
					}
				});
			}
			
		}


	});


});
