<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Identitas_M;

class Identitas extends BaseController
{
	public function index()
	{
		$model=new Identitas_M();

		$data=[
			'identitas' => $model->findAll()
		];

		return view("identitas/select",$data);
    }

    public function find($id=null)
	{
		$model=new Identitas_M();
		$identitas = $model -> find($id);

		$data=[
			'identitas'=>$identitas
		];

		return view("identitas/update", $data);
    }
    
    public function update()
	{
		$model=new Identitas_M();
		$id=$_POST['idrestoran'];

		if($model->save($_POST)===true){
			return redirect()->to(base_url("/admin/identitas"));
		}
		
	}


	//--------------------------------------------------------------------

}
