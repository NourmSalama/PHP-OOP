<?php

class Customer {

    public $id = 0;

    public function getCustomer($id) {
        return $this->id = $id;
    }
}

$customer = new Customer();

echo $customer->getCustomer(22);