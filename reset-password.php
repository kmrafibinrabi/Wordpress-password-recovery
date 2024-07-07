<?php
// Load WordPress environment
require( dirname(__FILE__) . '/wp-load.php' );

// Define username and new password
$username = 'Hungrycasino'; // Replace with the username
$new_password = 'newpassword#01'; // Replace with the new password

// Get the user object
$user = get_user_by('login', $username);

if ($user) {
    // Update the password
    wp_set_password($new_password, $user->ID);
    echo 'Password reset successfully.';
} else {
    echo 'User not found.';
}
?>