<?php

class Kosar {
    /*
     * kosár kezelés session segítségével
     * A végén vagy eldobjuk vagy az adatbázisban tároljuk a cikkeket
     */

    protected $cartId;
    protected $items; //-- a kosár tartalma

    public function __construct() {
        $this->cartId = session_id();
        $this->items = [];
    }

    public function addItem($termekId, $termekNev, $egysegAr, $db) {
        
        $db=(preg_match('/^\d+$/', $db)) ? $db : 1;
        $egysegAr=(preg_match('/^\d+$/', $egysegAr)) ? $egysegAr : -1;
        $termekId=(preg_match('/^\d+$/', $termekId)) ? $termekId : 1;
        $this->items[] = array("id" => $termekId, "megnev" => $termekNev, "egysegar" => $egysegAr, "db" => $db);
    }

    public function removeItem($termekId) {
        unset($this->items[$termekId]);
    }

    public function setRendeles() {
        //-- kiírjuk az adatbázisba
    }

    public function getItems() {
        return $this->items;
    }
public function getItemsSum() {
        $sum=0;
        foreach ($this->items as $item) {
            $sum+=$item["egysegar"]*$item["db"];
        }
        return $sum;
    }
    public function getItemsCount() {
        $itemsCount = 0;
        foreach ($this->items as $item) {
            $itemsCount+=$item["db"];
        }
        return $itemsCount;
    }   
    public function getItemsCont() {
        return $this->itemsCount;
    }

    public function getCartTotalAmount() {
        
    }

    public function isEmpty() {
        return empty(array_filter($this->items));
    }

    public function clear() {
        $this->items = [];
    }
}
