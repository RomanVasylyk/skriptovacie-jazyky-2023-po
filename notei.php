<?php
require_once('reg/db.php');

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_POST['add_note'])){
    $_SESSION['popup'] = false;
    $user_id = $_POST['user_id'];
    $title_note = $_POST['title_note'];
    $note_text = $_POST['note_text'];
    
    $sql = mysqli_query($conn, "INSERT INTO `note` (title_note, note_text,id) VALUES ('$title_note','$note_text' ,'$user_id' )");
    
    if(mysqli_affected_rows($conn) > 0){
        header("Location: notes.php");
    }else{
        header("Location: notes.php?error=noteadded");
    }

}
if(isset($_POST['delete_note'])){
    $id = $_POST['note_id'];
    $sql2 = mysqli_query($conn, "DELETE FROM `note` WHERE `idn` = '$id'");
    header("Location: notes.php?error=notedeleted");
}
?>