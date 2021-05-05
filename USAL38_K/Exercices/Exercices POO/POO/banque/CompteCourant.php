<?php

class CompteCourant{
    private $number;
    private $owner;
    private $pay;
    private $overdraft;

    public function __construct($number, $owner, $pay, $overdraft)
    {
        $this->number = $number;
        $this->owner = $owner;
        $this->pay = $pay;
        $this->overdraft = 500;
    }
    public function get_number(){
        return $this->number;
    }
    public function set_number($number){
        $this->number = $number;
    }

    public function get_owner(){
        return $this->owner;
    }
    public function set_owner($owner){
        $this->owner = $owner;
    }

    public function get_pay(){
        return $this->pay;
    }
    public function set_pay($pay){
        $this->pay = $pay;
    }

    public function get_overdraft(){
        return $this->overdraft;
    }
    public function set_overdraft($overdraft){
        $this->overdraft = $overdraft;
    }

}


public function virement($autre_compte, $montant){
    //décrémenter le compte courant <source>
    Ex: solde = 1000€
    virement de 200€
    nouveau solde après virement = 800€
    
    //incrémenter le compte courant destination
    Ex/ solde 500€
    nouveau solde après virement = 700€
}
