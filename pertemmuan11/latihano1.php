<?php
  $dta["NIM"]="21104053";
 $dta["NAMA"]="IVAN GIVARI";
  $dta["TGLLAHIR"]="14-09-2003";
   $dta["ALAMAT"]="BILEKERE";
   $dta["jkl"]="L";

 header("content-type: application/json; charset=utf-8");
  echo json_encode($dta);