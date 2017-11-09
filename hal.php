<?php

function bacaHTML($url){
         // inisialisasi CURL
         $data = curl_init();
         // setting CURL
         curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($data, CURLOPT_URL, $url);
         // menjalankan CURL untuk membaca isi file
         $hasil = curl_exec($data);
         curl_close($data);
         return $hasil;
    }

    $kodeHTML =  bacaHTML('http://jurnal.umk.ac.id/index.php/simet'); //sumber content
    $pecah = explode('<table class="announcements">', $kodeHTML);

    $pecahLagi = explode('</table>', $pecah[1]);

    //css table sesuaikan dengan format css web anda 
    echo '<table class="announcements">'.$pecahLagi[0].'</table>';

?>