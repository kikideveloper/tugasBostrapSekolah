<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'lib/class-Ff.php';
session_start();

unset($_SESSION['user']);
$ff->redirect('login.php');
//session_destroy();