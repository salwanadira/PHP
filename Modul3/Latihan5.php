<?php
  $day = date("D");
  switch ($day) {
      case 'Sun' : $hari = "Minggu"; break;
      case 'Mon' : $hari = "Senin"; break;
      case 'Tue' : $hari = "Selasa"; break;
      case 'Wed' : $hari = "Rabu"; break;
      case 'Thu' : $hari = "Kamis"; break;
      case 'Fri' : $hari = "Jum'at"; break;
      case 'Sst' : $hari = "Sabtu"; break;
  }
    echo "Sekarang hari <b> $hari</b>";
?>
