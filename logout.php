<?php

session_start(); 

// destroy stored login session
unset ($_SESSION['user_id']); 
unset ($_SESSION['nama']); 
unset ($_SESSION['level']);

// redirect to index page after session break
header("location: index.php");