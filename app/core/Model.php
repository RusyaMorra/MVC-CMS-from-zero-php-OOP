<?php
//*************************************************************************
//* Class  model
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\core;

//*************************************************************************
//* class loading
//*************************************************************************
use app\modules\DataBase;

abstract class Model{

	/**
     * @var
     */

    public $db;
	
	 /**
     *  Construct, and preloading
     */
	
	public function __construct() {
		$this->db = new DataBase;
        
	}
}