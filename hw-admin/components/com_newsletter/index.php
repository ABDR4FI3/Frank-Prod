    <?php
    @$task = $_GET['task'];
    switch ($task) {
        default:
            if ($_SESSION['user']->hasDroit('view', 'com_newsletter')) {
                $newsletters = newsletter::findAll();
                include_once("components/com_newsletter/views/newsletter/list.php");
            } // Charge la liste des articles
    }
