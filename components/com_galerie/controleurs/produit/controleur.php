<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addCoeur':
            addCoeur($_POST);
            break;
        case 'viderSelection':
            viderSelection();
            break;
        case 'showFormSendUsSelection':
            showFormSendUsSelection();
            break;
        case 'sendSelectionToUs':
            sendSelectionToUs($_POST);
            break;
		case 'sendRequest':
            sendRequest($_POST);
            break;
		case 'loadProduct':
            loadProduct($_POST);
            break;
		case 'switchSort':
            switchSort($_POST);
            break;
		case 'switchCurrency':
            switchCurrency($_POST);
            break;	
		case 'switchView':
            switchView($_POST);
            break;		
		case 'sendEstimer':
            sendEstimer($_POST);
            break;
		case 'uploadPhoto':
            uploadPhoto($_POST);
            break;	
    }
}

/* ----------------------------------------------------------------
Changement affichage produit
---------------------------------------------------------------- */
function switchView($data){
	if(isset($data['view']) && !empty($data['view'])){
		$view = $data['view'];
		$_SESSION['view'] = $view;
		echo '1';	
	}
}

/* ----------------------------------------------------------------
Changement devise
---------------------------------------------------------------- */
function uploadPhoto($data){
	global $db;
	
	$pics = isset($_SESSION['photos']) ? $_SESSION['photos'] : array();
	if (isset($_FILES['file']) && $_FILES['file']['name'][0] != '') {
		$photos = uploadFiles('file', '../../../uploads/', array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
		foreach($photos as $photo){
			array_push($pics,$photo);
		}
		$_SESSION['photos'] = $pics;
	}
}

/* ----------------------------------------------------------------
Changement devise
---------------------------------------------------------------- */
function switchCurrency($data){
	if(isset($data['id']) && !empty($data['id'])){
		$id = intval($data['id']);
		$devise = devise::find($id);
		$_SESSION['currency'] = $devise;
		echo '1';	
	}
}

/* ----------------------------------------------------------------
Changement trie
---------------------------------------------------------------- */
function switchSort($data)
{
	if(isset($data['trie']) && !empty($data['trie'])){
		$_SESSION['trie'] = $data['trie'];
		echo '1';
	}
	else
		echo '0';
}
/* ----------------------------------------------------------------
loadProduct
---------------------------------------------------------------- */
function loadProduct($data)
{
	require_once('../../../includes/traduction.php');

        global $db, $siteURL;
        $config = new config($db, $_SESSION["lang"]);
		
		$currentPage = isset($data['page']) && !empty($data['page']) ? intval($data['page']) : 1;
		$productPerPage = 12;
		$limit = (($currentPage - 1) * $productPerPage).", ".$productPerPage;
		
		$id_operation = isset($data["op"]) && !empty($data["op"]) ? intval($data["op"]) : null;
        $id_categorie = isset($data["cat"]) && !empty($data["cat"]) ? intval($data["cat"]) : null;
		$id_localisation = isset($data["loc"]) && !empty($data["loc"]) ? intval($data["loc"]) : null;
		$prix = isset($data["prix"]) && !empty($data["prix"]) ? intval($data["prix"]) : null;
	
		$produits = produit::search($_SESSION["lang"], $id_categorie, $id_localisation, $id_operation, $prix, null, null, $limit);
		
		foreach ($produits as $produit){ ?>  
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="project project-light">
                <figure>
			      <a href="<?php echo $produit->getLink(); ?>" title="<?php echo $produit->getTitre(); ?>">
                  <img alt="<?php echo $produit->getTitre(); ?>" src="<?php echo $siteURL; ?>images/produits/<?php echo $produit->getPhoto(); ?>">
				  </a> 
                  
                    <h3 class="project-title">
                      <?php echo $produit->getTitre(); ?>
                    </h3>
                    <h4 class="project-category">
                      <?php echo $produit->getOperation()->getTitre(); ?>
                    </h4>
					<?php if($produit->getVideo() != ''): ?>
					  <a href="javascript:void(0)" data-src="https://www.youtube.com/watch?v=<?php echo $produit->getVideo(); ?>" data-fancybox class="btn-video"><i class="fa fa-play"></i></a>
					<?php endif; ?>  
					
					<?php
                    // bouton ajouter à ma selection
                    $classCoeur = "";
                    $icoCoeur = "far fa-heart";
					$title = $lang["AJOUT_SELECTION"][$_SESSION['lang']];
                    if (isset($_COOKIE['sunset']) && !empty($_COOKIE['sunset'])) {
                        $cookie = $_COOKIE['sunset'];
                        $cookie = stripslashes($cookie);
                        $ids = json_decode($cookie, true);
                        if ($ids) {
                            foreach ($ids as $id) {
                                if ($id == $produit->getId()) {
                                    $classCoeur = "actif";
                                    $icoCoeur = "fas fa-heart";
									$title = $lang["SUPP_SELECTION"][$_SESSION['lang']];
                                }
                            }
                        }
                    }
                    ?>
					<a href="javascript:void(0)" data-id="<?= $produit->getId();?>" class="btn-selection <?php echo $classCoeur; ?>" data-toggle="tooltip" data-placement="right"><i class="<?php echo $icoCoeur; ?>" title="<?php echo $title; ?>"></i></a>
                    
					<?php if($produit->isVendu()): ?>
					<?php 
					switch($produit->getOperation()->getId()){
						case 1 : $sold = $lang["VENDU"][$_SESSION['lang']]; break;
						case 2 : $sold = $lang["LOUE"][$_SESSION['lang']]; break;
						default : $sold = $lang["VENDU"][$_SESSION['lang']];
					}
					?>
					<span class="sold"><?php echo $sold; ?></span>
					<?php endif; ?>
                </figure>
				
				<?php if($produit->isAffaire()): ?>
				<span class="exclusive-badge"><?php echo $lang["EXCLUSIF"][$_SESSION['lang']]; ?></span>
				<?php endif; ?>

				  <div class="textbox">
					<ul class="options">
						<li><i class="fa fa-crop"></i><span><?php echo $produit->getSurfaceGlobale(); ?> m²</span></li>  
						<li><i class="fa fa-bed"></i><span><?php echo $produit->getChambres(); ?> <?php echo $lang["CHAMBRE"][$_SESSION['lang']]; ?></span></li>  
						<li><i class="fa fa-bath"></i><span><?php echo $produit->getBains(); ?> <?php echo $lang["SDB"][$_SESSION['lang']]; ?></span></li>   
					</ul> 
			    </div> 
				<?php
				if($produit->getOperation()->getId() == 2)
					$par = " /".$lang["MOIS"][$_SESSION['lang']];
				elseif($produit->getOperation()->getId() == 3)
					$par = " /".$lang["JOUR"][$_SESSION['lang']];
				else
					$par = "";	

				$prix = ($produit->getPrix() == -1) ? $lang["NOUS_CONSULTER"][$_SESSION['lang']] : number_format($produit->getPrix(), 0, ',', ' ') . " € " . $par; 
				$from = ($produit->getOperation()->getId() == 3) ? $lang["APARTIR_PRIX"][$_SESSION['lang']] . ' ' : '';						
				?>
				<div class="footer-product">
					<div class="price"><?php echo $from . $prix; ?></div>  
					<a href="<?php echo $produit->getLink(); ?>" class="btn-more"><?php echo $lang["DISCOVER"][$_SESSION['lang']]; ?></a>
				</div>
              </div>
            </div>
			<?php }
}
/* ----------------------------------------------------------------
sendRequest
---------------------------------------------------------------- */
function sendRequest($data)
{
	require_once('../../../includes/traduction.php');
    if(isset($data['email']) && !empty($data['email']) && isset($data['nom']) && !empty($data['nom']) && isset($data['tel']) && !empty($data['tel']) && isset($data['produit']) && !empty($data['produit'])){

        global $db, $siteURL;
        $config = new config($db, $_SESSION["lang"]);
		
		$produit = produit::find($data['produit'], $_SESSION["lang"]);
        $request = new request();
        $request->setProduit($produit, $_SESSION["langue"]);
        $request->setNom($data['nom']);
        $request->setTel($data['tel']);
        $request->setEmail($data['email']);
		if(isset($data['date_debut']) && !empty($data['date_debut']))
        	$request->setArrivalDate($data['date_debut']);
        //$request->setDepartureDate($data['departure_date']);
        //$request->setPax($data['pax']);
        $request->setMessage($data['message']);
        $request->setVu(0);
        $request->setDateAdd(date('Y-m-d'));
        $request->setLastEdit(date('Y-m-d'));
		$request->add();

        $message='<html>
		<body>
		<h1 style="font-weight:normal">'.$lang["DEMANDE_DE_CONTACT"][$_SESSION['lang']].'</h1>
		<table border="0" cellpadding="5">
		<tr>
			<td><strong>'.$lang["NOM"][$_SESSION['lang']].' : </strong></td><td>'.$data['nom'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["TEL"][$_SESSION['lang']].' : </strong></td><td>'.$data['tel'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["EMAIL"][$_SESSION['lang']].' : </strong></td><td>'.$data['email'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["BIEN"][$_SESSION['lang']].' : </strong></td><td><a href="'.$produit->getLink().'">'.$produit->getTitre().'</a></td>
		</tr>';
		if(isset($data['date_debut']) && !empty($data['date_debut'])){
			$message .= '
		<tr>
			<td><strong>'.$lang["DATE_ARRIVEE"][$_SESSION['lang']].' : </strong></td><td>'.$data['date_debut'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["NB_JOURS"][$_SESSION['lang']].' : </strong></td><td>'.$data['nbr_jour'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["NB_ADULTES"][$_SESSION['lang']].' : </strong></td><td>'.$data['adultes'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["NB_ENFANTS"][$_SESSION['lang']].' : </strong></td><td>'.$data['enfants'].'</td>
		</tr>';
		}
		$message .= '<tr>
			<td><strong>'.$lang["MESSAGE"][$_SESSION['lang']].' : </strong></td><td>'.nl2br($data['message']).'</td>
		</tr>
		</table>';
        $message .= '</body>
		</html>';

        # send mail ###############################################################################
        $from = $data['email'];
        $to = $config->getEmail();

        $subject = $lang["DEMANDE_DE_CONTACT"][$_SESSION['lang']];

        $headers ='From: <'.$from.'>'."\n";
        $headers .='Reply-To: '.$from."\n";
        $headers .='Content-Type: text/html; charset="utf-8"'."\n";
        $headers .='Content-Transfer-Encoding: 8bit';
        mail($to, $subject, $message, $headers);
        echo '1';
    } else {
        echo '0';
    }
}

function addCoeur($data)
{
    if (isset($data['id']) && !empty($data['id']) && isset($data['option']) && !empty($data['option'])) {
        $option = $data['option'];
        $id = intval($data['id']);
        $tab_ids = array();
        $cookie_name = "meurice";
        if (isset($_COOKIE[$cookie_name]) && !empty($_COOKIE[$cookie_name])) {
            $cookie = $_COOKIE[$cookie_name];
            $cookie = stripslashes($cookie);
            $tab_ids = json_decode($cookie, true);
            if (!$tab_ids) {
                $tab_ids = array();
            }
        }
        if ($option == "non") {
            array_push($tab_ids, $id);
            $cookie_value = json_encode($tab_ids);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            echo "1";
        } else if ($option == "oui") {
            $new_tab = array();
            foreach ($tab_ids as $tab_id) {
                if ($tab_id != $id) {
                    array_push($new_tab, $tab_id);
                }
            }
            $cookie_value = json_encode($new_tab);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            echo "2";
        }
    }
}

function viderSelection()
{
    $cookie_name = "meurice";
    unset($_COOKIE[$cookie_name]);
    setcookie($cookie_name, '', time() - 3600, "/");
    echo '1';
}

function showFormSendUsSelection(){
	require_once('../../../includes/traduction.php');
    global $db, $siteURL;
    ?>

    <form method="post" class="form-template"
          action="<?= $siteURL; ?>components/com_produit/controleurs/router.php?task=sendSelectionToUs" id="sendSelectionUsForm">
        <div class="row">
            <div class="msgbox col-sm-12"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="<?php echo $lang["NOM"][$_SESSION['lang']]; ?>" required="required"/>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="<?php echo $lang["EMAIL"][$_SESSION['lang']]; ?>" required="required"/>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="tel" class="form-control" placeholder="<?php echo $lang["TEL"][$_SESSION['lang']]; ?>"/>
                </div>
            </div>

            <div class="form-group col-sm-12">
            <textarea name="message" class="form-control" placeholder="Votre message" rows="10"><?php echo $lang["BJR_MA_LIST_SELECTION"][$_SESSION['lang']]; ?>
                <?php
                $cookie_name = "meurice";
                if (isset($_COOKIE[$cookie_name]) && !empty($_COOKIE[$cookie_name])) {
                    $cookie = $_COOKIE[$cookie_name];
                    $cookie = stripslashes($cookie);
                    $produits = json_decode($cookie, true);
                    foreach($produits as $id_produit) {
                        $produit = produit::find($id_produit, $_SESSION["lang"]);
                        echo "\n- " . $produit->getTitre() . " | Réf. " . $produit->getRef() . " | URL: " . $produit->getLink();
                    }
                }
                ?>
                <?php echo "\n" . $lang["CDT"][$_SESSION['lang']]; ?></textarea>
            </div>

            <div class="col-sm-12 form-submit text-right"style="margin-bottom:0;">
				<button type="submit" class="btn btn-primary "><i class="fa fa-spinner loading"></i><?php echo $lang["ENVOYER"][$_SESSION['lang']]; ?><i class="icon-next"></i></button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function () {
            // Envoi du formulaire "envoyer nous vos coups de coeur"
            $('form#sendSelectionUsForm').ajaxForm({
                beforeSubmit: function () {
                    // chargement
                    $("#sendSelectionUsForm .loading").show();
                },
                success: function (theResponse) {
                    $("#sendSelectionUsForm .loading").hide();
                    if (theResponse == '1') {
                        $('#sendSelectionUsForm .msgbox').html('<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $lang["SELECTION_ENVOYEE"][$_SESSION['lang']]; ?></div>');
                        $('form#sendSelectionUsForm').resetForm();
                    }
                    else if (theResponse == '0') {
                        $('#sendSelectionUsForm .msgbox').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button> <?php echo $lang["CHAMPS_OBLIG"][$_SESSION['lang']]; ?></div>');
                    }
                    else {
                        $('#sendSelectionUsForm .msgbox').html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button> <?php echo $lang["ERREUR_EXEC"][$_SESSION['lang']]; ?></div>');
                    }
                }
            });
        })
    </script>

    <?php
}

function sendSelectionToUs($data)
{
    if(isset($data['email']) && !empty($data['email']) && isset($data['nom']) && !empty($data['nom']) && isset($data['tel']) && !empty($data['tel'])){
		require_once('../../../includes/traduction.php');
        global $db, $siteURL;
        $config = new config($db, $_SESSION["lang"]);

        $message='<html>
		<body>
		<h1 style="font-weight:normal">'.$lang["SELECTION_BIEN"][$_SESSION['lang']].' '.$config->getNom().'</h1>
		<table border="0" cellpadding="5">
		<tr>
			<td><strong>'.$lang["NOM"][$_SESSION['lang']].' : </strong></td><td>'.$data['nom'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["TEL"][$_SESSION['lang']].' : </strong></td><td>'.$data['tel'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["EMAIL"][$_SESSION['lang']].': </strong></td><td>'.$data['email'].'</td>
		</tr>
		<tr>
			<td><strong>'.$lang["MESSAGE"][$_SESSION['lang']].' : </strong></td><td>'.nl2br($data['message']).'</td>
		</tr>
		</table>';
        $message .= '</body>
		</html>';

        # send mail ###############################################################################
        $from = $data['email'];
        $to = $config->getEmail();
        //$to = "zakaria.hab@gmail.com";

        $subject = $lang["CNTCT_SELCTION"][$_SESSION['lang']];

        $headers ='From: <'.$from.'>'."\n";
        $headers .='Reply-To: '.$from."\n";
        $headers .='Content-Type: text/html; charset="utf-8"'."\n";
        $headers .='Content-Transfer-Encoding: 8bit';
        mail($to, $subject, $message, $headers);
        echo '1';
    } else {
        echo '0';
    }
}

/* ----------------------------------------- sendEstimer ----------------------------------------- */
function sendEstimer($data){
	require_once('../../../includes/traduction.php');
    global $db, $siteURL;
    if (isset($data['adresse']) && !empty($data['adresse']) && isset($data['ville']) && !empty($data['ville']) && isset($data['etage']) && !empty($data['etage'])) {

        $config = new config($db, $_SESSION['lang']);
		
		if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
            $photos = uploadFiles('photo', '../../../uploads/', array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
			var_dump($photos);
        }
		
		$mailBody = '<html><body>
		<table border="0" width="100%">
		<tr>
		<td bgcolor="#F6F6F6" align="center">

		<table border="0" cellpadding="15" cellspacing="0" width="640">
			<tr>
				<td align="center"><img src="'.$siteURL.'/images/config/'.$config->getLogo().'" alt="'.$config->getNom().'" height="64" /></td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td align="center"><h1 style="font-weight:normal; margin-bottom:15px;">Estimer un bien</h1></td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td>
				<table border="0" cellpadding="5">
				<tr bgcolor="#f8f8f8"><td colspan="2"><strong>Localisation du bien</strong></td></tr>
				<tr>
					<td><strong>Type de bien : </strong></td><td>' . $data['type'] . '</td>
				</tr>
				<tr>
					<td><strong>Adresse : </strong></td><td>' . $data['adresse'] . '</td>
				</tr>
				<tr>
					<td><strong>Code postal : </strong></td><td>' . $data['cp'] . '</td>
				</tr>
				<tr>
					<td><strong>Ville : </strong></td><td>' . $data['ville'] . '</td>
				</tr>
				<tr bgcolor="#f8f8f8"><td colspan="2"><strong>Caractéristique du bien</strong></td></tr>
				<tr>
					<td><strong>Etage : </strong></td><td>' . $data['etage'] . '</td>
				</tr>
				<tr>
					<td><strong>Nbr étages : </strong></td><td>' . $data['nbr_etage'] . '</td>
				</tr>
				<tr>
					<td><strong>Surface habitable : </strong></td><td>' . $data['surface'] . '</td>
				</tr>
				<tr>
					<td><strong>Nbr de pièces : </strong></td><td>' . $data['nbr_piece'] . '</td>
				</tr>
				<tr bgcolor="#f8f8f8"><td colspan="2"><strong>Photos</strong></td></tr>
				<tr>
					<td>Photos</td><td>';
				if(isset($_SESSION['photos'])){
				foreach ($_SESSION['photos'] as $photo) {
					$message .= '<a href="' . $siteURL . 'uploads/' . $photo . '" target="_blank"><img src="' . $siteURL . 'uploads/' . $photo . '" height="100" style="margin:0 15px" /></a>';
				}
				}
				$mailBody .= '</td>
				</tr>
				<tr bgcolor="#f8f8f8"><td colspan="2"><strong>Coordonnées</strong></td></tr>
				<tr>
					<td><strong>Nom complet : </strong></td><td>' . $data['nom'].' '.$data['prenom'] . '</td>
				</tr>
				<tr>
					<td><strong>Téléphone : </strong></td><td>' . $data['tel'] . '</td>
				</tr>
				<tr>
					<td><strong>E-mail : </strong></td><td>' . $data['email'] . '</td>
				</tr>
				<tr>
					<td><strong>Remarque : </strong></td><td>' . $data['message'] . '</td>
				</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align="center"><p><font size="-3" color="#666666">'.$config->getNom().' Contact<br/>
		Email: '.$config->getEmail().'<br/>
		Tél. : '.$config->getTel().' / '.$config->getTel2().' / '.$config->getFax().'</font></p></td>
			</tr>
		</table>
		</td>
		</tr>
		</table>
		</body>
		</html>';

		# send mail ###############################################################################
        $from = $data['email'];
        $to = $config->getEmail();

        $headers = 'From: <' . $from . '>' . "\n";
        $headers .= 'Reply-To: ' . $from . "\n";
        $headers .= 'Content-Type: text/html; charset="utf-8"' . "\n";
        $headers .= 'Content-Transfer-Encoding: 8bit';
        mail($to, 'Estimer un bien', $mailBody, $headers);
        echo '1';
    } else
        echo '0'; // champs requis
}