<!DOCTYPE html>
<html lang="en">
  
  <body class="layout layout-header-fixed">
  <br><br>
  
            <div class="col-xs-10">
              
              <div class="card">
                
                <div class="card-header">
                  <div class="card-actions">
                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                    <button type="button" class="card-action card-reload" title="Reload"></button>
                    <button type="button" class="card-action card-remove" title="Remove"></button>
                    
                  </div>
                  <strong>แสดงข้อมูลแผนก</strong>
                </div>
                <div class="card-body">
        <div class="panel-body collapse in">      
        <a class="btn btn-success pull-lift " href="<?php echo base_url(); ?>admin/insert_department_index">เพิ่ม</a>
              <div class="table-responsive">
                <div class="card-body ">
                <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        
                        <th>ลำดับ</th>
                        <th>ชื่อแผนกวิชา</th>
                        <th>manage</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php $c = 0; ?>
                    <?php foreach($result as $res){ 
                    $c++;    
                    ?>
                          <tr>
                            <td><?php echo $c ?></td>
                            <td><?php echo $res->dpm_name ?></td>
                            <td><a type ='button'   onclick="javascript:window.location='<?php echo base_url() . 'admin/edit_department/' . $res->dpm_id; ?>';"><label class='btn btn-warning'>แก้ไข</label></a> &nbsp 
                            &nbsp;<a class="btn btn-danger " data-toggle="modal" data-target="#warningModalAlert" >ลบ</a>    
                            </td>
                            </tr>
                            <?php  } ?> 
                           
                    </tbody>                
                  </table>
                </div>  
              </div>                              
        </div>
        </div>
      </div>
      
      <div id="warningModalAlert" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog polaroid ">
        <div class="modal-content">
          <div class="modal-body ">
            <div class="text-center">
              <span class="text-warning icon icon-exclamation-triangle icon-5x"></span>
              <h3 class="text-warning">คำเตือน</h3>
              <h1>กรุณากด "ยืนยัน" เพื่อลบ</h1>
              <div class="m-t-lg">
              <?php echo "<a type='button' href='".base_url()."admin/delete_department/".$res->dpm_id."' ' ><label class='btn btn-danger'>ยืนยัน</label></a>";?>
                <button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>




    <div class="theme">
      <div class="theme-panel theme-panel-collapsed">
        <div class="theme-panel-controls">
          <button class="theme-panel-toggler" title="Expand theme panel ( ] )" type="button">
            <span class="icon icon-cog icon-spin" aria-hidden="true"></span>
          </button>
        </div>
        <div class="theme-panel-body">
          <div class="custom-scrollbar">
            <div class="custom-scrollbar-inner">
              <h5 class="theme-heading">
                <a href="/elephant/buy" class="btn btn-primary btn-block">Buy Elephant Now!</a>
              </h5>
              <ul class="theme-settings">
                <li class="theme-settings-heading">
                  <div class="divider">
                    <div class="divider-content">Theme Settings</div>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Header fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-header-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar sticky*</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-sticky" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar collapsed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-collapsed" data-sync="false">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Footer fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-footer-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-description">
                  <span>
                    <strong>Sidebar sticky*</strong> - by scrolling up and down the page, the menu placed on the sidebar moves along with the content until the bottom of the menu is reached. <a href="page-layouts.html">Learn more</a></span>
                </li>
              </ul>
              <hr class="theme-divider">
              <ul class="theme-variants">
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-1/" title="Theme 1">
                    <img class="img-responsive" src="img/f420a3cea0fb04862eb630f5a54b2733.jpg" alt="Theme 1">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-2/" title="Theme 2">
                    <img class="img-responsive" src="img/3dd124286157b729cc38d9bd7045e384.jpg" alt="Theme 2">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-3/" title="Theme 3">
                    <img class="img-responsive" src="img/35e0765272cd421a5352331003ae2ab1.jpg" alt="Theme 3">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-4/" title="Theme 4">
                    <img class="img-responsive" src="img/4fcb4322807f1fd92aa3140adb37d4d9.jpg" alt="Theme 4">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-5/" title="Theme 5">
                    <img class="img-responsive" src="img/b787e62313c23880e0797bfbbc3d150c.jpg" alt="Theme 5">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-6/" title="Theme 6">
                    <img class="img-responsive" src="img/7489e404fb5088d63e5a5d55b27d546c.jpg" alt="Theme 6">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-7/" title="Theme 7">
                    <img class="img-responsive" src="img/972b6c5882a45ee73d83a90a9852660c.jpg" alt="Theme 7">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-8/" title="Theme 8">
                    <img class="img-responsive" src="img/0100e8b81ad03f81a64a0a5f49c5be41.jpg" alt="Theme 8">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-9/" title="Theme 9">
                    <img class="img-responsive" src="img/69ece2eb60bdd2126e2acf27af43aa9b.jpg" alt="Theme 9">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-10/" title="Theme 10">
                    <img class="img-responsive" src="img/2ef1cfdcf1da5256d7b994983bd8d457.jpg" alt="Theme 10">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-11/" title="Theme 11">
                    <img class="img-responsive" src="img/cca2226fdaba079b321ba5cf05ba0adc.jpg" alt="Theme 11">
                  </a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="/elephant-v1.4.0/theme-12/" title="Theme 12">
                    <img class="img-responsive" src="img/7a4ee939781f6165006cff1b5b8096d4.jpg" alt="Theme 12">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="theme-panel-footer">
          <a class="rounded sq-36 bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&t=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device" title="Share on Facebook" target="_blank">
            <span class="icon icon-facebook"></span>
          </a>
          <a class="rounded sq-36 bg-twitter" href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&text=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device:%20http%3A%2F%2Fdemo.madebytilde.com%2Felephant&via=madebytilde" title="Tweet" target="_blank">
            <span class="icon icon-twitter"></span>
          </a>
          <a class="rounded sq-36 bg-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Share on Google+" target="_blank">
            <span class="icon icon-google-plus"></span>
          </a>
          <a class="rounded sq-36 bg-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&title=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&summary=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.&source=http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Share on LinkedIn" target="_blank">
            <span class="icon icon-linkedin"></span>
          </a>
          <a class="rounded sq-36 bg-pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fdemo.madebytilde.com%2Felephant&media=http://demo.madebytilde.com/elephant.jpg&description=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner." title="Pin it" target="_blank">
            <span class="icon icon-pinterest-p"></span>
          </a>
          <a class="rounded sq-36 bg-default" href="mailto:?subject=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&body=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.:%20http%3A%2F%2Fdemo.madebytilde.com%2Felephant" title="Send email" target="_blank">
            <span class="icon icon-envelope-o"></span>
          </a>
        </div>
      </div>
    </div>
    
  </body>

    <script src="<?php echo base_url()?>asset/js/vendor.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/elephant.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/application.min.js"></script>                                   
    <script src="<?php echo base_url()?>asset/js/demo.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
</html>