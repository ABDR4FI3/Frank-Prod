/*
Author       : Dreamguys
Template Name: Kanakku - Bootstrap Admin Template
Version      : 1.0
*/

(function($) {
    "use strict";
	
	$(".chosen-select").chosen();
	
	// Formulaire login
	$('form#loginForm').ajaxForm({
		beforeSubmit: function () {
			//chargement
			$("#loginForm .loading").show();
		},
		success: function (theResponse) {

			$("#loginForm .loading").hide();
			if (parseInt(theResponse) === 1) {
				$('#loginForm .msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Vous êtes connecté.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
				setTimeout(function () {
					document.location = "index.php?option=com_dashboard";
				}, 1500)
			}
			else if (parseInt(theResponse) === 2) {
				$('#loginForm .msgbox').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Attention!</strong> Login ou mot de passe incorrecte <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
			}
			else if (parseInt(theResponse) === 0) {
				$('#loginForm .msgbox').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Attention!</strong> Veuillez entrer votre login et mot de passe<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
			}
			else {
				$('#loginForm .msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de l\'execution de l\'opération<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
			}
		}
	});
	
	// Déconnexion
	$('.logout').click(function (event) {
		event.preventDefault();
		var order = '';
		$.post("components/com_login/controleurs/router.php?task=logout", order, function (theResponse) {
			if (parseInt(theResponse) === 1) {
				document.location.reload();
			}
		});
	});

	// language swicher
	$(".switch-lang").click(function(){
		var order = 'lang='+$(this).attr('data-lang');
		$.post("components/com_config/controleur/config.php?task=switchLang", order, function (theResponse) {
			if (parseInt(theResponse) === 1) {
				document.location.reload();
			}
		});
	})
	
})(jQuery);