<?php
session_start();

if (isset($_SESSION['status'])) $sessionStatus = $_SESSION['status'];
else $sessionStatus = false;

if (isset($_SESSION['name'])) $sessionName = $_SESSION['name'];
else $sessionNama = '';

if (isset($_SESSION['email'])) $sessionEmail = $_SESSION['email'];
else $sessionEmail = '';
