<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('1621ICT.db');
    }
}

function getCustomers($searchTerm = null) {

    $db = new MyDB();
    if(!$db){
        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
    } else {
        //echo "Opened database successfully\n";
    }
    if(!$searchTerm) {
        $sql ='SELECT * from CUSTOMERS;';
    } else {
        $sql ='SELECT * FROM CUSTOMERS WHERE FIRSTNAME LIKE "'.$searchTerm.'" OR LASTNAME LIKE "'.$searchTerm.'" OR ADDRESS LIKE "'.$searchTerm.'" OR PHONE  LIKE "'.$searchTerm.'"';
    }
    $ret = $db->query($sql);
    $array = [];
    if(!$ret){
        echo $db->lastErrorMsg();
        return [];
    } else {
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
        }
        $db->close();
        return $array;
    }
}


function getProducts($p_id=null,$searchTerm = null,$limit=null) {

    $db = new MyDB();
    if(!$db){
        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
    } else {
        //echo "Opened database successfully\n";
    }

    $sql ='SELECT * from PRODUCTS;';
    if($searchTerm) {
        $sql ='SELECT * FROM PRODUCTS WHERE PRODUCTNAME LIKE "'.$searchTerm.'%" OR MANUFACTURER LIKE "'.$searchTerm.'" OR DESCRIPTION LIKE "'.$searchTerm.'" OR PRICE LIKE "'.$searchTerm.'"';
    }
    if($p_id){
        $sql ='SELECT * from PRODUCTS where PRODID ="'.$p_id.'";';
    }
    if($limit){
        $sql ='SELECT * from PRODUCTS limit '.$limit;
    }
    $ret = $db->query($sql);
    $array = [];
    if(!$ret){
        echo $db->lastErrorMsg();
        return [];
    } else {
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
        }
        $db->close();
        return $array;
    }
}


function getEvents($searchTerm = null) {
    $db = new MyDB();
    if(!$db){
        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
    } else {
        //echo "Opened database successfully\n";
    }

    if(!$searchTerm) {
        $sql ='SELECT * from EVENTS;';
    } else {
        $sql ='SELECT * FROM EVENTS WHERE EVENTNAME LIKE "'.$searchTerm.'" OR DESCRIPTION LIKE "'.$searchTerm.'" OR LOCATION LIKE "'.$searchTerm.'" OR DATE LIKE "'.$searchTerm.'"';
    }
    $ret = $db->query($sql);
    $array = [];
    if(!$ret){
        echo $db->lastErrorMsg();
        return [];
    } else {
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
        }
        $db->close();
        return $array;
    }
}



function addCustomer($fname, $lname, $address, $phone) {

    $db = new MyDB();
    if(!$db){
        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
    } else {
        //echo "Opened database successfully\n";
    }

    $sql ='INSERT INTO CUSTOMERS (FIRSTNAME, LASTNAME, ADDRESS, PHONE) VALUES ("'.$fname.'", "'.$lname.'", "'.$address.'", "'.$phone.'");';
    if($db->query($sql)){
        return true;
    }
    return false;
}


function addProduct($pname, $man, $desc, $price) {

    $db = new MyDB();
    if(!$db){
        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
    } else {
        //echo "Opened database successfully\n";
    }

    $sql ='INSERT INTO PRODUCTS (PRODUCTNAME, MANUFACTURER, DESCRIPTION, PRICE) VALUES ("'.$pname.'", "'.$man.'", "'.$desc.'", "'.$price.'");';
    if($db->query($sql)){
        return true;
    }
    return false;
}


function addEvent($ename, $loc, $desc, $date) {

    $db = new MyDB();
    if(!$db){
        echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
    } else {
        //echo "Opened database successfully\n";
    }

    $sql ='INSERT INTO EVENTS (EVENTNAME, LOCATION, DESCRIPTION, DATE) VALUES ("'.$ename.'", "'.$loc.'", "'.$desc.'", "'.$date.'");';
    $db->query($sql);
}


?>