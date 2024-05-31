<?php
$write = $_POST['write'];
$title = $_POST['title'];
$contents = $_POST['contents'];
echo $write;
echo $title;
echo $contents;

$sql = "  insert into board(title, contents,write_name,reg_date, read_num) values('"$title"',',sysdate(),0);
?>