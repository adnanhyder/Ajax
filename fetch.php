<?php
/**
 * Created by PhpStorm.
 * User: Adnan
 * Date: 2/27/2020
 * Time: 8:10 PM
 */


include("config.php");
$user_id = $_POST['user_id'];

if (!empty($user_id)) {

    $sql = "SELECT * FROM `posts` WHERE `user_id` = " . $user_id;

    $result = $conn->query($sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (!empty($result)) {
        // output data of each row
        $markup = [];

        foreach ($result as $single) {
            $markup[] = '<div class="posting"><h1>' . $single["post_title"] . '</h1><p>' . $single["post_content"] . '</p></div><hr>';
        }
        $data = [
            "user_id" => $user_id,
            "posts" => $markup,
        ];

    } else {
        $data = [
            "user_id" => $user_id,
            "posts" => "",
        ];
    }
} else {
    $data = [
        "user_id" => "",
        "posts" => "",
    ];
}


if (!empty($data['posts'])) {
    foreach ($data['posts'] as $single) {

        $file = 'template.html';
// Open the file to get existing content
        $current = file_get_contents($file);
// Append a new person to the file
        $current .= "<!doctype html><html>
<head><meta charset='utf-8'>
<title>Template</title>
</head><body> <p>" . $single . "</p>
</body></html>
";
// Write the contents back to the file
        file_put_contents($file, $current);
    }
}


echo json_encode($data);
exit();
