<?php

session_start();

unset($_SESSION["acesso"]);
unset($_SESSION["nivel"]);

header("location:index.php");
