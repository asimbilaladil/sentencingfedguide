<div class="responsive-header">
    <div class="topbar">
        <div class="container">
            <!-- Top Social -->
            <div class="pull-right">
                <ul class="contact-information">
                    <li><i class="fa fa-phone"></i>Tel: 0056 764 234 5621</li>          
                    <li><i class="fa fa-envelope-o"></i>Mail: office@eclipse.com</li>
                </ul><!-- Contact Information -->
                <form>
                    <input type="text" placeholder="search" />
                    <button><i class="fa fa-search"></i></button>
                </form><!-- Search Form -->
            </div>
        </div>
    </div><!-- Top Bar -->  

    <div class="responsive-logo">
        <a href="#" title=""><img src="<?php echo base_url("assets/images/logo.png") ?>" alt="Logo" /></a>
    </div><!-- Responsive Logo -->  
    <span><i class="fa fa-align-justify"></i></span>
    <ul>
        <li><a href="#" title=""><i class="fa fa-home"></i>Home</a>

    </ul>
</div><!--Responsive header-->

<section>
    <div class="block gray extra-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="resume">
                        <div class="row">
                            <div class="col-md-9 column">
                                <h5  style="font-weight: bold; font-size: -webkit-xxx-large;"><?php echo $data['user']->name; ?></h5>
                                <h4 class="user-title"><?php echo ($data['user']->title ? $data['user']->title : 'Title') ?> <a href="" data-toggle="modal" data-target="#editTitleModal" ><i class="ghostPencil"></i></a></h4>


                                <div class="col-md-12   user-description"  style="padding-left: 5px">
                                    
                                    <p>
                                        <a href="" data-toggle="modal" data-target="#editDescriptionModal" > 
                                            <i class="description-edit"> &nbsp;</i> 
                                        </a>
                                         <?php echo $data['user']->description ? $data['user']->description : 'Description' ?>
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-3 column">
                               
                                <div class="resume-img">
                                    <img src="<?php echo ($data['user']->image ? base_url() . $data['user']->image : 'https://graph.facebook.com/'. $data['user']->facebook_id .'/picture?type=large') ?>" alt="">
                                   
                                   <button onclick="clickImage()"  class="upload-button" style=" color: white; width:40%; background-color: #ff7c00; position: absolute; top: 40%; left: 30%; ">Upload</button>
                                <form action="<?php echo site_url('Home/upload') ?>" id="uploadImageForm" method="POST" enctype="multipart/form-data">
                                 <input style="display: none;" type="file" name="image" id="image"  />
                                    <input  type="hidden" name="email" value="<?php echo $data['user']->email ?>" />

                                </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- RESUME -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-page">

            <section>
                <div class="block white">
                    <div class="container">
                        <div class="row">
                            <div class="heading">
                                <h2><i>Run</i> A Report</h2>
                            </div>

                            <div class="col-md-6 column">
                                <div class="col-md-3">
                                </div>
                                    <button  style="background-color: #ff7c00" type="button" class="col-md-6 btn btn-success">Quick Run Report</button>


                            </div>
                            <div class="col-md-6 column">
                                <div class="col-md-3">
                                </div>
                                    <a href="<?php echo site_url("Report") ?>"><button style="background-color: #ff7c00" type="button" class="col-md-6 btn btn-success">Full Formal Report</button></a>


                            </div>                      

                        </div>
                    </div>
                </div>
            </section>


        </section>
<!-- Modal -->
<div id="editTitleModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
  <form action="<?php echo site_url('Home/update') ?>" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Title Edit</h4>
      </div>
      <div class="modal-body">
        <label class="col-md-2 topSpace">Title:</label>
        <input class="col-md-6 topSpace" value="<?php echo $data['user']->title ?>" type="text" name="title">
        &nbsp;&nbsp;
        <input type="hidden" name="email" value="<?php echo $data['user']->email ?>" />
        <input type="submit" class=" btn btn-success" value="Save" />
      </div>
    </div>
    </form>
  </div>
</div>    
<!-- Modal -->
<div id="editDescriptionModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
<form action="<?php echo site_url('Home/update') ?>" method="post">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Description Edit</h4>
      </div>
      <div class="modal-body">
        <label class="col-md-3 topSpace">Description:</label>
        <input class="col-md-6 topSpace" type="text" name="description" value="<?php echo $data['user']->description ?>">
        <input type="hidden" name="email" value="<?php echo $data['user']->email ?>" />
        &nbsp;&nbsp;
        <input type="submit" class=" btn btn-success" value="Save" />
      </div>
    </div>
</form>
  </div>
</div>    


<script type="text/javascript">
    var clickImage  = function () {
        document.getElementById('image').click();
    }
jQuery(function() {    

    jQuery(".upload-button").hide();
    jQuery('.resume-img').hover(function() {
         jQuery(this).find('.upload-button').fadeIn(1500);
    }, function() {
        jQuery(this).find('.upload-button').fadeOut(1000); 
    });
}); 

$('#image').change(function() {
  $('#uploadImageForm').submit();
});

</script>