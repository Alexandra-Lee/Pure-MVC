<?php
var_dump($_POST['action']);
    if (isset($_POST['action'])) {

        if ($_POST['action'] == 'createArt'){
            Dispatcher::getInstance()->callAction('createArt');
        } 
        if ($_POST['action'] == 'deleteArt') {
            Dispatcher::getInstance()->callAction('deleteArt');
        }
        if ($_POST['action'] ==  'displayArt') {
            Dispatcher::getInstance()->callAction('displayArt');
        }
        if ($_POST['action'] ==  'editArt') {
            Dispatcher::getInstance()->callAction('editArt');
        }
    }
?>
<h1>The Writers Page to manage Article Submissions</h1>
