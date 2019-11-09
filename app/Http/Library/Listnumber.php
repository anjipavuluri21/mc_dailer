<?php
namespace App\Http\Library;
use Auth;

class Listnumber extends LibraryAbstract{

protected $_repo = null;
	public function saveLeadnumber($data){
		return $this->getRepo()->saveLeadnumber($data);
	}
    public function allLeads(){
        return $this->getRepo()->allLeads();
    }
    public function getLeadnumber($id){
        return $this->getRepo()->getLeadnumber($id);
    }
    public function getSinglelist($id){
        return $this->getRepo()->getSinglelist($id);
    }
    
    public function allLists(){
        return $this->getRepo()->allLists();
    }
    public function saveList($data){
        return $this->getRepo()->saveList($data);
    }
    public function updateLeadnumber($data){
        return $this->getRepo()->updateLeadnumber($data);
    }
	public function getRepo() { 
        if (!($this->_repo instanceof \App\Http\Repository\ListRepository)) {
            $this->_repo = new \App\Http\Repository\ListRepository();
        }
        return $this->_repo;
    }
}