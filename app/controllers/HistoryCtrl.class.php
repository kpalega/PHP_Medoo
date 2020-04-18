<?php namespace app\controllers;

class HistoryCtrl {
    
    private $datas;
    
    public function __construct(){
        $this->datas = array();
    }
    
    public function getParams(){
        try{
        $this->datas = getDB()->select('wynik', [
            "BMI",
            "waga",
            "wzrost",
            "data"
        ]);
        } catch (PDOException $ex){
            getMessages()->addError("Błąd pobierania rekordów");
            if(getConf()->debug) getMessages()->addError($ex->getMessage());
        }
        
    }
    
    public function action_history(){
        $this->getParams();
        $this->generateView();
    }
    
    public function generateView(){
        getSmarty()->assign('user', unserialize($_SESSION['user']));
        getSmarty()->assign('datas',$this->datas);
        
        getSmarty()->display('HistoryView.tpl');
    }
}
