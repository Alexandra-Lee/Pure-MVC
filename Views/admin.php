<?php
//var_dump($_POST['action']);
    if (isset($_POST['action'])) {

        if ($_POST['action'] == 'createUser'){
            Dispatcher::getInstance()->callAction('createUser');
        } 
        if ($_POST['action'] == 'deleteUser') {
            Dispatcher::getInstance()->callAction('deleteUser');
        }
        if ($_POST['action'] ==  'displayUser') {
            Dispatcher::getInstance()->callAction('displayUser');
        }
        if ($_POST['action'] ==  'editUser') {
            Dispatcher::getInstance()->callAction('editUser');
        }
    }
?>
<h1>The Administration Page</h1>

<div class="row">
                <div class="column_left">
                    <h3>USERS</h3><br/><br/>
                    <form id="clear" class="buttons_left" action="admin" method="post">
                        <div class="user_button">
                            <input type="submit"  name="action" value="createUser" />
                            <input type="submit"  name="action" value="deleteUser" />
                            <input type="submit"  name="action" value="editUser" />
                            <input type="submit"  name="action" value="displayUser" />
                        </div><br/>
                    </form>
                </div>



