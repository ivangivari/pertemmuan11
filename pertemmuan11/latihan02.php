<?php
  $dta[0]["NIM"]="21104053";
 $dta[0]["NAMA"]="IVAN GIVARI";
  $dta[0]["TGLLAHIR"]="14-09-2003";
   $dta[0]["ALAMAT"]="BILEKERE";
   $dta[0]["jkl"]="L";

   $dta[1]["NIM"]="21104063";
   $dta[1]["NAMA"]="gigih";
    $dta[1]["TGLLAHIR"]="14-09-2000";
     $dta[1]["ALAMAT"]="BILEKERE";
     $dta[1]["jkl"]="L";

     $dta[2]["NIM"]="21104043";
   $dta[2]["NAMA"]="ici";
    $dta[2]["TGLLAHIR"]="14-09-2004";
     $dta[2]["ALAMAT"]="BILEKERE";
     $dta[2]["jkl"]="P";

     $dta[3]["NIM"]="21104013";
     $dta[3]["NAMA"]="SAEPUL";
      $dta[3]["TGLLAHIR"]="14-09-2001";
       $dta[3]["ALAMAT"]="BILEKERE";
       $dta[3]["jkl"]="L";

       $dta[4]["NIM"]="21104074";
       $dta[4]["NAMA"]="PRAGOS";
        $dta[4]["TGLLAHIR"]="14-09-2002";
         $dta[4]["ALAMAT"]="PRINDAPAN";
         $dta[4]["jkl"]="L";


 header("content-type: application/json; charset=utf-8");
  echo json_encode($dta);