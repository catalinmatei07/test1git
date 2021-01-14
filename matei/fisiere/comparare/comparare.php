<?php
$check = 0;
$textfile1x = fopen("1.txt", "r");
$textfile1 = fread($textfile1x, filesize("1.txt"));
$textfile2x = fopen("2.txt", "r");
$textfile2 = fread($textfile2x, filesize("2.txt"));

if (filesize("1.txt") == filesize("2.txt"))
{
    for ($i = 0;$i < filesize("1.txt");$i++)
    {
        if (strcmp($textfile1[$i], $textfile2[$i]) == 0)
        {
            $check = 1;
        }
        else
        {
            $check = 0;
            break;
        }
    }
}
if ($check == 1)
{
    echo "fisierele sunt identice";
}
else
{
    echo "nu sunt identice";
}

?>
