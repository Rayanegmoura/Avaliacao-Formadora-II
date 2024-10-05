<?php 

$fileID = '1l0of5nBLWaSoAqBQQ-hoZpxL_2pQqbsF';

$fileURL = 'https://drive.google.com/uc?export=download&id=' . $fileID;

header("Location: $fileURL", true, 302);
exit();

?>