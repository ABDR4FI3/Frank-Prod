 <!--<h4 class="card-title">Basic Info</h4>-->
 <form method="post" action="<?php echo $action; ?>" id="menuForm" enctype="multipart/form-data">
     <div class="row">
         <div class="col-md-12 msgbox"></div>
         <div class="col-md-6">
             <div class="form-group">
                 <label>Titre</label>
                 <input type="text" class="form-control" name="titre" value="<?php if (isset($menu)) echo $menu->getTitre(); ?>">
             </div>
         </div>


         <?php if (isset($menu)) : ?>
             <input type="hidden" name="id" value="<?php echo $menu->getId(); ?>">
         <?php endif; ?>
     </div>
     <div class="text-right mt-4">
         <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
     </div>
 </form>

 <script>
     $(function() {

         // envoi du formulaire en ajax
         $('form#menuForm').ajaxForm({
             beforeSubmit: function() {
                 $("#menuForm .loading").css('display', 'inline-block');
             },
             success: function(theResponse) {
                 $("#menuForm .loading").fadeOut();
                 $("html, body").animate({
                     scrollTop: 0
                 }, "slow");

                 var msgsucces = "Menu ajoutée avec succès";
                 if ($(".submit").attr("name") === "edit") {
                     msgsucces = "Menu modifiée avec succès";
                 }
                 if (parseInt(theResponse) === 1) {
                     $('#menuForm .msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');

                     setTimeout(function() {
                         document.location = "index.php?option=com_menu";
                     }, 1500)

                 } else if (parseInt(theResponse) === 0) {
                     $('#menuForm .msgbox').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Attention!</strong> Veuillez remplir les champs obligatoires<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                 } else {
                     $('#menuForm .msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de l\'execution de l\'opération<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                 }
             }
         });
     })
 </script>