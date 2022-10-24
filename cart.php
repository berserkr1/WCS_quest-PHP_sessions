<?php

require 'inc/head.php';

if (!isset($_SESSION['loginname'])) {

    header("Location: login.php");
    exit();
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php
            if (!empty($_SESSION['cart'])) {
                $cart = array_count_values($_SESSION['cart']);
                foreach ($cart as $cookie => $quantity) {
                    echo "<li>" . $quantity . " X " . $cookie . "</li>";
                }
            } else {
                echo "empty cart";
            }
            ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>