<?php
include_once 'classes/class.user.php';
$user = new User();
$user_id = $user->get_user_id($_SESSION['user_email']);
$user_access_level = $user->get_user_access($user_id); 
?>
<div id="submenu">
    <a href="index.php?page=users">List Users</a> | 
    <?php
    if ($user_access_level != 'Staff') {
    ?>
        <a href="index.php?page=users&action=create">New User</a> | 
    <?php
    }
    ?>
    Search <input type="text" id="search" name="search" onkeyup="showResults(this.value)">
</div>
<div id="subcontent">
    <?php
    switch ($action) {
        case 'create':
            require_once 'users/create-user.php';
            break;
        case 'profile':
            require_once 'users/view-profile.php';
            break;
        case 'result':
            require_once 'users/search.php';
            break;
        default:
            require_once 'users/main.php';
            break;
    }
    ?>
</div>
<script>
function showResults(str) {
    if (str.length == 0) {
        document.getElementById("search-result").innerHTML = "";
        return;
    } else {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "users/search.php?q=" + str, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById("search-result").innerHTML = xhr.responseText;
            } else {
                console.error("Error loading search results: " + xhr.status);
            }
        };
        xhr.send();
    }
}
</script>