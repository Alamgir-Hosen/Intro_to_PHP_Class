<?php

    require_once './Book.php';
    require_once './Customer.php';


    $book1 = new Book("12345", "Hello Bangladesh", "Alamgir", 28);
    $customer1 = new Customer(1234, "Alamgir", "Hosen", "mdalamgir25678@gmail.com");

    echo $book1->__toString();
    echo $customer1->__toString();

    
    echo "</br>".$book1->getCopy();

?>