<?php
// Load WordPress environment
require( dirname(__FILE__) . '/wp-load.php' );

// Define username and new password
$username = 'dbatourine@gmail.com'; // Replace with the username (email in this case)
$new_password = 'newpassword'; // Replace with the new password

// Get the user object by email
$user = get_user_by('email', $username);

if ($user) {
    // Update the password
    wp_set_password($new_password, $user->ID);
    echo 'Password reset successfully for user: ' . $username;
} else {
    echo 'User not found.';
}
?>