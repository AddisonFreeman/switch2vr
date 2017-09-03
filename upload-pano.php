<!-- <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script>
    var client = filestack.init('AN8Iv0aDnS3etX1QTBO4bz');
    function showPicker() {
        client.pick({
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded))
        });
    }
</script>
<input type="button" value="Upload" onclick="showPicker()" /> -->
<style>
<?php include 'upload-pano.css';
      include 'webflow.css'; ?>
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.4/jszip.js" type="text/javascript"></script>
<?php ?>
  <div class="projects-wrapper">
    <div>
      <div class="project-list-row w-row">
        <div class="project-list-col w-clearfix w-col w-col-6">
          <div id="newProject" class="new-project-div">
            
              <form id="panoForm" action="pano-upload.php" method="post" enctype="multipart/form-data">
                <div class="new-project-bg-image">
                <!-- Type Pano Project title: -->
                <!-- <input type="textfield" name="panoname" id="panoname"> -->
                <!-- Select image to upload: -->
                <!-- <div id=dropDiv> -->
                  <!-- Drop krpano output folder here. -->
                <input type="file" webkitdirectory directory mozdirectory multiple name="files[]" id="files">
                <!-- <input type="submit" value="Upload Image" name="submit"> -->
                <!-- </div> -->
                </div>
              </form>
            
            <!-- <div class="create-project-text">Create New Project</div> -->
          </div>
        </div>
        <div class="project-list-col w-col w-col-6">
          <div class="existing-project-div">
            <!-- <img class="project-preview-image" sizes="(max-width: 767px) 100vw, 50vw" src="pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM.png" srcset="pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM-p-500.png 500w, pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM-p-800.png 800w, pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM.png 1052w"></div> -->
        </div>
      </div>
    </div>
    <!-- <div>
      <div class="project-list-row w-row">
        <div class="project-list-col w-col w-col-6">
          <div class="existing-project-div"><img class="project-preview-image" sizes="(max-width: 767px) 100vw, 50vw" src="pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM.png" srcset="pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM-p-500.png 500w, pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM-p-800.png 800w, pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM.png 1052w"></div>
        </div>
        <div class="project-list-col w-col w-col-6">
          <div class="existing-project-div"><img class="project-preview-image" sizes="(max-width: 767px) 100vw, 50vw" src="pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM.png" srcset="pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM-p-500.png 500w, pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM-p-800.png 800w, pano-images/Screen-Shot-2017-08-19-at-8.12.15-AM.png 1052w"></div>
        </div>
      </div>
    </div> -->
    <!-- <div>
      <div class="project-list-row w-row">
        <div class="project-list-col w-col w-col-6"></div>
        <div class="project-list-col w-col w-col-6"></div>
      </div>
    </div> -->
  </div>