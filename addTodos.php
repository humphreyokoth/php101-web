    <?php

    //Add to list items to DB
    $to_do_item = isset($_POST["item"]) ? $_POST["item"] : null;
    // Posting todo item
    echo "$to_do_item";
    error_log("$to_do_item" . "\n", 3, "./php_error.log");
    ?>

    