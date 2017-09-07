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
<!-- 
<script src="js/inflate.js" type="text/javascript"></script>
<script src="js/deflate.js" type="text/javascript"></script>
<script src="js/z-worker.js" type="text/javascript"></script> -->
<!-- <script src="js/lib/zip.js" type="text/javascript"></script>
<script src="js/lib/zip-fs.js" type="text/javascript"></script> -->
<!-- <script src="js/zip-ext.js" type="text/javascript"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.4/jszip.js" type="text/javascript"></script> -->
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
                <!-- <input type="file" webkitdirectory directory mozdirectory multiple name="files[]" id="files"> -->
                <input type="file" name="files[]" id="files">
                <!-- </div> -->
              </div>
            </form>
            <!-- <div class="create-project-text">Create New Project</div> -->
          </div>
        </div>
          
        <?php 
          $dir = __DIR__.'/panos';
          $fileCount = count(scandir($dir)) - 2; //don't include '.' and '..'
          $fileNum = 0;
          if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
              if ($dh1 = opendir($dir.'/'.$file)){
                while (($file1 = readdir($dh1)) !== false){
                  if($file1 == 'tour.xml') {
                    $fileNum++;
                    // echo $file;  
                    if(!$fileNum & 1) { //if $fileNum is even start a new row, 
              ?>      <div class="project-list-row w-row">
              <?php } ?>
                    <div class="project-list-col w-col w-col-6">
                      <div class="existing-project-div">  
                      <?php  echo $file; ?> <a class="show-code <?= $file; ?>">Show Embed Code</a>
                          <iframe class="pano-iframe" src="http://dev.addisonfreeman.com/wp-content/plugins/switch2vr/panos/<?= $file;?>/tour.html">
                          </iframe>
                          <textarea class="pano-embed <?= $file; ?>"><iframe class="pano-iframe" src="http://dev.addisonfreeman.com/wp-content/plugins/switch2vr/panos/<?= $file;?>/tour.html"></iframe>
                          </textarea> 
                      </div>
                    </div>
                    
            <?php   if($fileNum & 1) { //if odd, close at end
               ?>     </div>
            <?php   }
                  }
                }
              }
              closedir($dh1);
            }
            closedir($dh);
          }
        ?>
      </div>
    </div>
  </div>