<?php
session_start();
unset($_SESSION["iid"]);
unset($_SESSION["nname"]);
header("Location:userlog.php");