    <?php

    //Add to list items to DB
    $GLOBALS['to_do_item']  = isset($_POST["item"]) ? $_POST["item"] : null;
    function todo(){

        $to_do_item  = $GLOBALS['to_do_item'];
        return $to_do_item;
      
      }
    // Posting todo item
    echo "$to_do_item";
    error_log("$to_do_item" . "\n", 3, "./php_error.log");
    ?>

    