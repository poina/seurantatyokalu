<?php

//aloittaa session
session_start();

//tyhjent�� session
unset($_SESSION['user']);

// session_destroy();

//menee index.php
header('Location: index.php');

?>