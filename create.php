<?php
$name = 'entries.txt';

// initialize file
$create_file = fopen($name,'w') or die('unable to open file');

//add some text
fwrite($create_file,'confirmation entry'.'\n ');

?>

<form action="read.php" method="post">
    <div>
        <label for="txt1">Enter text 1</label>
        <input type="text" name="txt1" id="txt1">
    </div>
    <button type="submit">submit</button>
</form>

<?php
    if(isset($_POST['txt1']))
        fwrite($create_file,$_POST['txt1']);

    fclose($create_file);
    $size = filesize($name);
?>