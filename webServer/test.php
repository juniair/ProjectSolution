<?php
/**
 * Created by PhpStorm.
 * User: juniair
 * Date: 2016-05-16
 * Time: ���� 9:26
 */
$save_dir = "D:\\";
$gdb = mysqli_connect(..);
if(is_uploaded_file($_FILES["myFile"]["tmp_name"]))
{
    echo "���ε��� ���ϸ� : ".$_FILES["myFile"]["name"] ."<br />";
    echo "���ε��� ������ ũ�� : ".$_FILES["myFile"]["size"] ."<br />";
    echo "���ε��� ������ MIME Type : ".$_FILES["myFile"]["type"] ."<br />";
    echo "�ӽ� ���丮�� ����� ���ϸ� : ".$_FILES["myFile"]["tmp_name"]."<br />";

    //������ ������ ���丮 �� ���ϸ�
    $dest = $save_dir . $_FILES["myFile"]["name"];

    //������ ������ ���丮�� ����
    if(!move_uploaded_file($_FILES["myFile"]["tmp_name"], $dest))
    {
        die("������ ������ ���丮�� �����ϴµ� �����߽��ϴ�.");
    }
}
?>