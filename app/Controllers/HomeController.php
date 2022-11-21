<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\MovimentsModel;

class HomeController extends BaseController
{
    public function index() {
		$this->title = 'Home';
		$this->list(); } 
	public function list(){
		$model = $this -> load_model (" Home ");
		$listMoviments = $model -> list ();
		$data = $listMoviments ;

		$listInput = $model -> listInput ();
		$dataInput = $listInput ;

		$listOutput = $model -> listOutput ();
		$dataOutput = $listOutput ;

		$listSumInput = $model -> listSumInput ();
		$dataSumInput = $listSumInput ;

		$listSumOutput = $model -> listSumOutput ();
		$dataSumOutput = $listSumOutput ;

		$this -> view -> show ( 'home\home' , $data , $dataInput , $dataOutput , $dataSumInput , $dataSumOutput );
	}
} 