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

		// var dropDiv = document.getElementById('dropDiv');

		// dropDiv.addEventListener('dragover', function(event) {
		// 	event.preventDefault();
		// });

		// dropDiv.addEventListener('drop', function (e) {
		// 	e.stopPropagation();
		// 	e.preventDefault();
		// 	// var files = e.target.files || e.dataTransfer.files;
		// 	console.log(e.dataTransfer.files);
		// });
		
		var filesEl = document.getElementById('files');

		filesEl.addEventListener('dragover', function(event) {
			event.preventDefault();
			console.log("dragging");
		});

		filesEl.addEventListener('change', function (e) {
			e.stopPropagation();
			e.preventDefault();

			// console.log(e.target.files);
			// $.ajax({
			// 	type: "POST",
			// 	url: "pano-upload.php",
			// 	data: $("#panoForm").serialize(),
			// 	success: function(data) {
			// 		// console.log("form submit sucess, data: ");
			// 		// console.log(data);
			// 	}
			// });

			var files = e.target.files;
			var paths = "";
			
			// console.log(files);

				var fd = new FormData();
				var xhr = new XMLHttpRequest();

				xhr.open("POST", "pano-upload.php", true);
				
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200) {
						// console.log(xhr.responseText);
					}
				}

				for (var i = 0, file; file = files[i]; i++) {
					
					// if(~file.webkitRelativePath.indexOf(".tiles")) { //only upload files inside a .tiles folder
						// console.log(file.webkitRelativePath);	
						paths += file.webkitRelativePath+"###";
						fd.append("file_"+i, file);	
					// }
				}
				// console.log(paths);
				// console.log("server: ");
				fd.append("paths", paths);


				
				xhr.upload.addEventListener("progress", function(e) {
					// console.log(Math.round(e.loaded / e.total * 100) +"% loaded");
				});
				xhr.send(fd);
			
		});

		var panoForm = document.getElementById('panoForm');

		panoForm.addEventListener('submit', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var files = document.getElementById('files').files;

			console.log(files);
			


		});
	});

})( jQuery );
