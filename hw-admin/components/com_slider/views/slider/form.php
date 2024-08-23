 <!--<h4 class="card-title">Basic Info</h4>-->
 <form method="post" action="<?php echo $action; ?>" id="sliderForm" enctype="multipart/form-data">
     <div class="row">
         <div class="col-md-12 msgbox"></div>
         <div class="col-md-6">
             <div class="form-group">
                 <label>Titre</label>
                 <input type="text" class="form-control" name="titre" value="<?php if (isset($slider)) echo $slider->getTitre(); ?>">
             </div>
         </div>

         <div class="col-md-2 form-group">
             <label class="mb-3">Actif</label>
             <label class="row toggle-switch">

                 <span class="col-4 col-sm-1">
                     <input type="checkbox" name="actif" class="toggle-switch-input" <?php if (isset($slider) && $slider->isActif()) echo "checked"; ?>>
                     <span class="toggle-switch-label ml-auto">
                         <span class="toggle-switch-indicator"></span>
                     </span>
                 </span>
             </label>
         </div>


         <?php if (isset($slider)) : ?>
             <input type="hidden" name="id" value="<?php echo $slider->getId(); ?>">
         <?php endif; ?>
     </div>
     <div class="text-right mt-4">
         <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
     </div>
 </form>

 <script>
     $(function() {

         // envoi du formulaire en ajax
         $('form#sliderForm').ajaxForm({
             beforeSubmit: function() {
                 $("#sliderForm .loading").css('display', 'inline-block');
             },
             success: function(theResponse) {
                 $("#sliderForm .loading").fadeOut();
                 $("html, body").animate({
                     scrollTop: 0
                 }, "slow");

                 var msgsucces = "Slider ajoutée avec succès";
                 if ($(".submit").attr("name") === "edit") {
                     msgsucces = "Slider modifiée avec succès";
                 }
                 if (parseInt(theResponse) === 1) {
                     $('#sliderForm .msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');

                     setTimeout(function() {
                         document.location = "index.php?option=com_slider";
                     }, 1500)

                 } else if (parseInt(theResponse) === 0) {
                     $('#sliderForm .msgbox').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Attention!</strong> Veuillez remplir les champs obligatoires<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                 } else {
                     $('#sliderForm .msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de l\'execution de l\'opération<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                 }
             }
         });
     })
 </script>