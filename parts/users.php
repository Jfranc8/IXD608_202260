<?php 

include "../lib/php/functions.php";

$users_array = file_get_json(../data/users.json");

$filename = "../data/users.json";
$users = file_get_json($filename);



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete

print_p([$_GET,$_POST]);

if(isset($_POST['user-name'])) {
    $users[$_GET['id']]->name = $_POST['user name'];
    $users[$_GET['id']]->type = $_POST['user type'];
    $users[$_GET['id']]->email = $_POST['user-email'];
    $users[$_GET['id']]->classes = explode (", ", $_POST['user-classes']);

    file_put_contents($filename,json_encode($users));
}

function showUserPage($user) {

$classes = implode(", ", $user->classes);


// heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
<ul>
<li><a href="admin/users.php">Back</a></li>
<ul>
</nav>
<form method="post" action="">
<div class="form-control">
<label class="form-label" for="user-name">Name</label
<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter the User Name">
</div>
<div class="form-control">
<label class="form-label" for="user-type">Type</label>
<input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter the User Type">
</div>
<div class="form-control">
<label class="form-label" for="user-email">Email</label>
<input class="form-label" name="user-email" id="user-email" type="text" value="$user->email" placeholder= "Enter the User Email">
</div>
<div class=form-control">
<label class="form-label" for="user-classes">Classes</label>
<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder= "Enter the User Classes, comma separated">
</div>
<div class="form-control">
<input class="form-button" type="submit" value="Save Changes">
</div>
</form>
HTML;
}




<div>
    <h2>$user->name</h2>
<div>
    <strong>Type</strong>
    <span>$user->type</span>
    </div>
    <div>
        <strong>Email</strong>
    <span>$user->email</span>
    </div>
    <div>
        <strong>Classes</strong>
    <span>$classes</span>
    </div>
    <div>

HTML;
}

