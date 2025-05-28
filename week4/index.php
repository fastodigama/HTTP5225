<?php
// Function to fetch user data from the JSONPlaceholder API
    function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}
// Get the list of users
    $users = getUsers();

    for($i=0; $i < count($users); $i++){
        echo $users[$i]['name'] . "<br>";
        echo '<a href="mailto:'. $users[$i]['name'] . '">'.$users[$i]['email'] .'</a>';
        echo 'Street:';
        
        echo $users[$i]['address']['street'] . "<br>";
    }

    
?>