<?php
include 'create.php';
$read_file = fopen($name,'r') or die('unable to read contents');
?>
    <h4> <?php print 'File NAME: '. $name; ?></h4>
    <p> <?php print 'File CONTENTS: '. fread($read_file,$size); ?></p>

<?php fclose($read_file); ?>

