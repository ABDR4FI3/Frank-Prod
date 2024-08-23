<?php
if (isset($_GET['task']) && !empty($_GET['task'])) {
    $task = $_GET['task'];
    switch ($task) {
        case 'contact' :
            contact($_POST);
            break;
        case 'newsletter' :
            newsletter($_POST);
            break;
        case 'addTestimonial' :
            addTestimonial($_POST);
            break;
        case 'contactService':
            contactService($_POST);
            break;
    }
}

/* ----------------------------------------- contact ----------------------------------------- */
function contact($data){
	require_once('../../../includes/traduction.php');
    global $db, $siteURL;
    if (isset($data['nom']) && !empty($data['nom']) && isset($data['email']) && !empty($data['email']) && isset($data['tel']) && !empty($data['tel'])) {

        $config = new config($db, $_SESSION['lang']);
		
		$mailBody = '<html><body>
		<table border="0" width="100%">
		<tr>
		<td bgcolor="#F6F6F6" align="center">

		<table border="0" cellpadding="15" cellspacing="0" width="640">
			<tr>
				<td align="center"><img src="'.$siteURL.'/images/config/'.$config->getLogo().'" alt="'.$config->getNom().'" height="64" /></td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td align="center"><h1 style="font-weight:normal; margin-bottom:15px;">'.$lang["DEMANDE_DE_CONTACT"][$_SESSION['lang']].'</h1></td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td>
				<table border="0" cellpadding="5">
				<tr>
					<td><strong>'.$lang["NOM"][$_SESSION['lang']].' : </strong></td><td>' . $data['nom'] . '</td>
				</tr>
				<tr>
					<td><strong>'.$lang["EMAIL"][$_SESSION['lang']].' : </strong></td><td>' . $data['email'] . '</td>
				</tr>
				<tr>
					<td><strong>'.$lang["TEL"][$_SESSION['lang']].' : </strong></td><td>' . $data['tel'] . '</td>
				</tr>
				<tr>
					<td><strong>Sujet : </strong></td><td>' . $data['sujet'] . '</td>
				</tr>
				<tr>
					<td><strong>'.$lang["MESSAGE"][$_SESSION['lang']].' : </strong></td><td>' . $data['message'] . '</td>
				</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align="center"><p><font size="-3" color="#666666">'.$config->getNom().'<br/>
		Email: '.$config->getEmail().'<br/>
		T�l. : '.$config->getTel().' / '.$config->getTel2().' / '.$config->getFax().'</font></p></td>
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
        mail($to, 'Contact', $mailBody, $headers);
        echo '1';
    } else
        echo '0'; // champs requis
}

/* ----------------------------------------- newsletter ----------------------------------------- */
function newsletter($data)
{
    if (isset($data['email']) && !empty($data['email'])) {
        $email = addslashes($data['email']);
        global $db;
        $nom = (isset($data['nom']) && !empty($data['nom'])) ? $data['nom'] : "";
        if (unique(__prefixe_db__ . "newsletter", "email", $email)) {
            $SQLinsert = sprintf("INSERT INTO " . __prefixe_db__ . "newsletter (nom, email, date_add, confirm) VALUES (%s, %s, %s, %s)",
                GetSQLValueString($nom, "text"),
                GetSQLValueString($email, "text"),
                GetSQLValueString(date('Y-m-d'), "text"),
                GetSQLValueString(0, "int"));
            if (!$db->query($SQLinsert))
                echo '1'; // succes
            else
                echo '3'; // erreur
        } else
            echo '2'; // email existe deja dans la base de données
    } else
        echo '0'; // champs email obligatoir
}

/* ----------------------------------------- addTestimonial ----------------------------------------- */
function addTestimonial($data)
{
    global $db;
    if (isset($data['nom']) && !empty($data['nom']) && isset($data['temoignage']) && !empty($data['temoignage'])) {
        $insertSQL = sprintf("INSERT INTO " . __prefixe_db__ . "temoignages (actif, auteur, texte, date_add, last_edit) VALUES (%s, %s, %s, %s, %s)",

            GetSQLValueString(0, "int"),
            GetSQLValueString($data['nom'], "text"),
            GetSQLValueString($data['temoignage'], "text"),
            GetSQLValueString(date('Y-m-d'), "date"),
            GetSQLValueString(date('Y-m-d'), "date"));

        if (!$db->query($insertSQL)) {
            echo "1";
        } else
            echo '2';
    } else {
        echo "0";
    }
}

/* ----------------------------------------- contactService ----------------------------------------- */
function contactService($data){
	require_once('../../../includes/traduction.php');
    global $db;
    if (isset($data['nom']) && !empty($data['nom']) && isset($data['email']) && !empty($data['email']) && isset($data['tel']) && !empty($data['tel'])) {

        $config = new config($db, $_SESSION['lang']);
		
		$mailBody = '<html><body>
		<table border="0" width="100%">
		<tr>
		<td bgcolor="#F6F6F6" align="center">

		<table border="0" cellpadding="15" cellspacing="0" width="640">
			<tr>
				<td align="center"><img src="'.$siteURL.'/images/config/'.$config->getLogo().'" alt="'.$config->getNom().'" height="64" /></td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td align="center"><h1 style="font-weight:normal; margin-bottom:15px;">'.$lang["DEMANDE_DE_CONTACT"][$_SESSION['lang']].'</h1></td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td>
				<table border="0" cellpadding="5">
				<tr>
					<td><strong>'.$lang["NOM"][$_SESSION['lang']].' : </strong></td><td>' . $data['nom'] . '</td>
				</tr>
				<tr>
					<td><strong>'.$lang["EMAIL"][$_SESSION['lang']].' : </strong></td><td>' . $data['email'] . '</td>
				</tr>
				<tr>
					<td><strong>'.$lang["TEL"][$_SESSION['lang']].' : </strong></td><td>' . $data['tel'] . '</td>
				</tr>
				<tr>
					<td><strong>'.$lang["SERVICE"][$_SESSION['lang']].' : </strong></td><td>' . $data['service'] . '</td>
				</tr>
				<tr>
					<td><strong>'.$lang["MESSAGE"][$_SESSION['lang']].' : </strong></td><td>' . $data['message'] . '</td>
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
        mail($to, 'Contact service', $mailBody, $headers);
        echo '1';
    } else
        echo '0'; // champs requis
}
?>