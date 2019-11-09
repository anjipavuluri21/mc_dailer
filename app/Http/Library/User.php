<?php
namespace App\Http\Library;
use Auth;

class User extends LibraryAbstract{

protected $_repo = null;
	public function saveUser($data){
		return $this->getRepo()->saveUser($data);
	}
    public function allUser(){
        return $this->getRepo()->allUser();
    }
    public function getuser($id){
        return $this->getRepo()->getuser($id);
    }
    public function updateUser($data){
        return $this->getRepo()->updateUser($data);
    }    
    
	public function getRepo() { 
        if (!($this->_repo instanceof \App\Http\Repository\UserRepository)) {
            $this->_repo = new \App\Http\Repository\UserRepository();
        }
        return $this->_repo;
    }
}