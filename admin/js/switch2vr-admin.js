(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	document.addEventListener('DOMContentLoaded', function(event) {
		if (window.File && window.FileReader && window.FileList && window.Blob) {
		  // Great success! All the File APIs are supported.
		} else {
		  alert('The File APIs are not fully supported in this browser.');
		}

		var xhr = new XMLHttpRequest();
		if (xhr.upload) {
			//XHR Supported
		} else {
			alert('XHR HTTP Requests not supported by your browser');
		}

		
		var filesEl = document.getElementById('files');

		filesEl.addEventListener('dragover', function(event) {
			event.preventDefault();
			console.log("dragging");
		});

		filesEl.addEventListener('change', function (e) {
			e.stopPropagation();
			e.preventDefault();

			var files = e.target.files;
			// var paths = "";
			
			var fd = new FormData();
			var xhr = new XMLHttpRequest();

			xhr.open("POST", "pano-upload.php", true);

			var zip = new JSZip();
			var paths = [];

			for (var i = 0, file; file = files[i]; i++) {				
			    // console.log(file.name);
			    zip.file(file.name, file);	
			    // zip.folder //change directory // possible to pass multiple dirs in?
			}
			console.log(zip);
			zip.generateAsync({type:"blob"}).then(function (content) {
				fd.append('zipTest1',content,'zipTest1.zip');	
			});
			

			xhr.upload.addEventListener("progress", function(e) {
				// console.log(Math.round(e.loaded / e.total * 100) +"% loaded");
			});
			xhr.send(fd);	
		});
		// var panoForm = document.getElementById('panoForm');
		// panoForm.addEventListener('submit', function(e) {
		// 	e.preventDefault();
		// 	e.stopPropagation();
		// 	var files = document.getElementById('files').files;
		// 	console.log(files);
		// });
	});

})( jQuery );
