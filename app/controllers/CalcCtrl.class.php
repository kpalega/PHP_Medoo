<?php namespace app\controllers;

use \app\forms\CalcForm;
use \app\transfer\CalcResult;

class CalcCtrl {
    private $form;
    private $result;
    
    public function __construct() {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }
    
    public function getParams() {
	$this->form->height = getFromRequest('height');
	$this->form->weight = getFromRequest('weight');
        $this->form->meter = getFromRequest('meter');
    }
    
    public function validate(){
	
	if (! (isset($this->form->height) && isset($this->form->weight) && isset($this->form->meter))) {
		return false;
	}
        
        getMessages()->addInfo("Przekazano parametry.");
	
        if ( $this->form->height == "") {
            getMessages()->addError ('Nie podano wzrostu.');
        }
	if ( $this->form->weight == "") {
            getMessages()->addError ('Nie podano wagi.');
        }
	if (!getMessages()->isError()) {
	
            if(! is_numeric( $this->form->height )){ 
                getMessages()->addError('Wzrost nie jest liczbą');
            }
            
            if(! is_numeric( $this->form->weight )) {
                getMessages()->addError('Waga nie jest liczbą');
            }
        
	}
        return ! getMessages()->isError();
        
    }
    
    public function action_calcCompute(){
	
    $this->getParams();
    if ($this->validate()) {
        
	$this->form->height = doubleval($this->form->height);
	$this->form->weight = doubleval($this->form->weight);
        getMessages()->addInfo("Parametry poprawne.");
	
	switch ($this->form->meter) {
            case 'cm' :
		$this->form->height = $this->form->height/100;
		$this->result->result = $this->form->weight/($this->form->height*$this->form->height);
                $this->form->height = $this->form->height*100;
                $this->result->op = 'w centymetrach';
		break;
            case 'm' :
                if(inRole('admin')){
		$this->result->result = $this->form->weight/($this->form->height*$this->form->height);
                $this->result->op = 'w metrach';
                } else {
                    getMessages()->addError("Tylko administrator może wykonać tę operację.");
                }
                break;		
	}
        getMessages()->addInfo("Wykonano oblicznia.");
    }
    
    try{
        getDB()->insert("wynik",[
            "BMI" => $this->result->result,
            "waga" => $this->form->weight,
            "wzrost" => $this->form->height,
            "data" => date("Y-m-d H:i:s")
        ]);
    }
    catch(\PDOException $ex){
        getMessages()->addError("DB Error: ".$ex->getMessage());
    }
    
    $this->generateView();
    }
    
    public function action_calcShow(){
        getMessages()->addInfo("Witaj w kalkulatorze");
        $this->generateView();
    }
    
    public function generateView(){

        getSmarty()->assign('page_title','Kalkulator BMI');
        getSmarty()->assign('page_description','Obliczanie prawidlowej masy ciala');
        getSmarty()->assign('page_header','Kalkulator');
        
        getSmarty()->assign("user", unserialize($_SESSION['user']));
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('result',$this->result);

        getSmarty()->display('calcView.tpl');
    }
   
}


