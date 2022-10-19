<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    // strlen( "String iin moriin urt oldog func()");

    switch ($email){
        case "":
            echo "Email xayag xooson bna";
            break;
        case "amraa@gmail.com":
            echo "Amraagiin gmail oruullaa bayrlalaa";
            break;
        case "apprentice@gmail.com":
            echo "Apprentice-iin gmail oruullaa bayrlalaa";
            break;
        default :
            echo "Oruulsan mail oldsongu dahian orldono uu";
    }







    if($email == ""){
        echo "<p>Email enougn</p>";
        echo "<br>";
        die();
    }else if($name == ""){
        echo "<p>Name enough</p>";
        echo "<br>";
        die();
    }else if($message == ""){
        echo "<p>Message enough</p>";
        echo "<br>";
        die();
    }
    // print_r($_POST);
    // echo"<hr>";
    // print_r($form_information);
    // echo"<hr>";
    // print_r($email);
?>

<h1>
    <?php
        echo $name;
    ?>
    (<span class="badge bg-secondary"> 
        <?php 
            echo $email;
        ?>
    ) 
</h1>
<p>
    <?php
    echo $message;
    ?>
</p>