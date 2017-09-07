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
			zip.workerScriptsPath = "/wp-admin/js/lib/";
			var zipFS = new zip.fs.FS();
			var fd = new FormData();
			var xhr = new XMLHttpRequest();

			xhr.open("POST", "pano-upload.php", true);

			var paths = [];
			var createdPaths = [];
			var workingDirectory;
			for (var i = 0, file; file = files[i]; i++) {
				paths.push(file.webkitRelativePath); 
				if (i==0) { //if first file
					workingDirectory = zipFS.root; 
				}
			    if(file.name[0]!=".") { //no hidden files
			    var pathParts = file.webkitRelativePath.split("/");
		    	for(var i = 0; i < pathParts.length; i++) {
		    		//if not file itself && dir not exist yet
					if (pathParts[i]!=file.name && typeof(zipFS.root.getChildByName(pathParts[i]))!="object") {
		    			zipFS.root.addDirectory(pathParts[i]);
		    			workingDirectory = zipFS.rootgetChildByName(pathParts[i]);// = the one just added
		    		} else {
		    			console.log(pathParts[i]);	
		    		}
		    		

		    		
		    		// if (		    			

		    			// (function(element){return element.name==pathParts[i]})) {
		    			// workingDirectory.addDirectory(pathParts[i]);
						// createdPaths[i-1]+="/"+pathParts[i];	
					// } else {
	    				// createdPaths.push(pathParts[i]);
	    			// }

		    		// zipFS.root.children.forEach(function(child) {
		    		// });

		    		// if() { //don't add the file as a directory!
		    			// console.log("at root level: "+ file.name);
		    		// }

	    			// console.log(pathParts[i]);
	    			
	    			 //only push at top level directory
	    				
	    			

		    			//add file here
		    	} } //endif

		    	// console.log(pathParts[pathParts.length - 2]);
		    	// zipFS.root.addDirectory(pathParts[pathParts.length - 2]);
		    	
		    	// zipFS.addData64URI(file.name, reader.readAsDataURL(file));
				
			    

			    // zip.file(file.name, file);	
			    // fd.append(file.name, file);
			    // zip.folder //change directory // possible to pass multiple dirs in?
			}

			console.log(zipFS.root);

			// fd.append(zipFS.exportBlob);

			  //   reader.onload = (function(file) { 
			  //   	return function(e) { 
					//     // use a BlobWriter to store the zip into a Blob object
					// 	zip.createWriter(new zip.BlobWriter(), function(writer) {
					// 	  // use a TextReader to read the String to add
					// 	  writer.add(file.name, new zip.BlobReader(e.target.result), function() {
					// 	    // onsuccess callback
					// 	    // close the zip writer
					// 	    writer.close(function(blob) {
					// 	      // blob contains the zip file as a Blob object
					// 	      // console.log(e.target.result);
					// 	    });
					// 	  }, function(currentIndex, totalIndex) {
					// 	    // onprogress callback
					// 	  });
					// 	}, function(error) {
					// 	  // onerror callback
					// 	});
					// 	// console.log(e.target.result); 
					// }; 
			  //   })(file);

			// fd.append('zipTest1',content,'zipTest1.zip');	

			xhr.upload.addEventListener("progress", function(e) {
				// console.log(Math.round(e.loaded / e.total * 100) +"% loaded");
			});
			// xhr.send(fd);	
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
