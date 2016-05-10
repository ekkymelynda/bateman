<?php
unset(
        $_SESSION['username']
);
session_destroy();
header("Location: ".base_url()."")
?>