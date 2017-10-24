<?php

require_once 'cobian2.php';

$io = new bio('Persib','BDG','terbawah','King Of Draw');
echo "namanya...".$io->get_nama().'<br>';
echo "tempat lahir...".$io->get_tempatlahir().'<br>';
echo "kelas...".$io->get_kelas().'<br>';
echo "status...".$io->get_status().'<br>';


?>