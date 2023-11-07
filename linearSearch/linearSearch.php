<?php
/*
 *
 * Linear Search Algorithm
 *
 *1-Start from the first element of the array.
*2-Compare the current element with the target element.
*3-If they are equal, return the current index.
*4-Move to the next element and repeat step 2.
*5-If you've gone through all the elements without finding the target, return a value indicating that the element is not present (commonly -1).
 * */

/*
 * Searching for a user in a user list.(User Authentication)
 * */


/*
 * function searches through the $users array to find a user with the provided username and password.
 * */
function linearSearch($users, $username, $password)
{
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['username'] == $username && $users[$i]['password'] == $password) {
            return $i;
        }
    }
    return -1;
}

$users = [
    ["username" => "alice", "password" => "password123"],
    ["username" => "bob", "password" => "securepass"],
    ["username" => "charlie", "password" => "mysecretpassword"],
    ["username" => "dave", "password" => "davepassword"],
    ["username" => "John", "password" => "johndoepassword"],
    // ... more users ...
];

$attemptedUsername = "John";
$attemptedPassword = "johndoepassword";

$index = linearSearch($users, $attemptedUsername, $attemptedPassword);

if ($index != -1) {
    echo "Login successful! Welcome, $attemptedUsername.";
} else {
    echo "Login failed! Incorrect username or password.";
}
?>
