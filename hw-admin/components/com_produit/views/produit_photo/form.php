<form method="post" action="<?= $action; ?>" enctype="multipart/form-data" class="validateForm" id="produitPhotoForm">

    <div class="row">
        <div class="col-sm-12 msgbox"></div>
        <input type="hidden" name="id_produit" value="<?= $_GET['id']; ?>">
        <div class="col-md-3 form-group">
            <label>Titre
            </label>
            <input name="titre" type="text" value="<?= isset($photo) ? $photo->getTitre() : ""; ?>" class="form-control" />
        </div>

        <div class="col-md-2 form-group">
            <label>Ordre
            </label>
            <input name="ordre" type="number" value="<?= isset($photo) ? $photo->getOrdre() : ""; ?>" class="form-control" />
        </div>

        <div class="col-md-3 form-group">
            <label>Photo
            </label>
            <input type="file" name="photo[]" class="form-control" multiple />
        </div>

        <?php if (isset($photo) && $photo->getPhoto()) { ?>
            <div class="col-md-2 form-group mt-4">
                <img src="../images/produit/<?= $photo->getPhoto(); ?>" alt="" class="img-thumbnail" />
            </div>
        <?php } ?>



        <input type="hidden" name="id_produit" value="<?= $produit->getId() ?>" />
        <?php if (isset($photo)) { ?>
            <input type="hidden" name="id" value="<?= $photo->getId(); ?>" />
        <?php } ?>



    </div>

    <div class="text-right mt-4">
        <!-- <button type="reset" name="<?= $submitName; ?>" class="btn btn-light ">Anuller</button> -->
        <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
    </div>

</form>

<script>
    $(function() {

        // envoi du formulaire en ajax
        $('form#produitPhotoForm').ajaxForm({
            beforeSubmit: function() {
                $(".loading").fadeIn();
            },
            success: function(theResponse) {
                $(".loading").fadeOut();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                var msgvide = "Veuillez remplir Les champs obligatoires !";
                var msgsucces = "Photo ajoutée avec succès.";
                var msgfaild = "Erreur lors de l'ajout.";
                if ($(".submit").attr("name") === "edit") {
                    msgsucces = "Photo modifiée avec succès.";
                    msgfaild = "Erreur lors de la modification.";
                }
                if (parseInt(theResponse) === 1) {
                    $('#produitPhotoForm .msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> <strong>Succès</strong> ' + msgsucces + '</div>').slideDown();
                    setTimeout(function() {

                        <?php $loc = "index.php?option=com_produit&task=produitphotos&id=" . $_GET['id']; ?>
                        document.location = "<?= $loc ?>";

                    }, 1500);
                } else if (parseInt(theResponse) === 0) {
                    $('#produitPhotoForm .msgbox').html('<div class="alert alert-warning alert-dismissable"><i class="icon-remove-sign"></i> <strong>Attention!</strong> ' + msgvide + '</div>').slideDown();
                } else {
                    $('#produitPhotoForm .msgbox').html('<div class="alert alert-danger alert-dismissable"><i class="icon-remove-sign"></i> <strong>Erreur!</strong> ' + msgfaild + '</div>').slideDown();
                }
            }
        });
    })
</script>