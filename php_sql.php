<?php
/**
 * DB table: MEMBERS
 * Columns: 
 * SN: Serial Number 
 * USERNAME: EMAIL
 * MOBILE: phone number
 * CHINESE_NAME: chinese name
 * 
 * Q1：use PHP/SQL to code create/delete/update functions.
 * 
 */

// DB Connection
include '/var/www/html/mshop/db.php';

function getMemberInfo($email){
    $result = false;
    $db = getMemberDB();
    $stmt = $db->prepare("SELECT * FROM MEMBERS  WHERE USERNAME = ?");
    $stmt->execute(array($email));
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    if($count>0)
        $result = $data[0];
    return $result;
}
$memberInfo = getMemberInfo($_SESSION["email"]);



?>