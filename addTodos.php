    <?php

    //Add to list items to my todolist.
    $GLOBALS['to_do_item'] = isset($_POST["item"]) ? $_POST["item"] : null;
    function todo(){

        $to_do_item = $GLOBALS['to_do_item'];
        error_log("$to_do_item" . "\n", 3, "./php_error.log");
        echo $to_do_item;
      
    }
    
 
    ?>

    