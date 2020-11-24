<?php namespace App\Controllers;

use App\Models\Kategori_M;
use App\Models\Menu_M;
use App\Models\Identitas_M;

class Detail extends BaseController
{
	public function index($id = null)
	{
		$modelmenu = new Menu_M();
		$menu = $modelmenu->find($id);

		$modelkategori = new Kategori_M();
        $kategori = $modelkategori->findAll();
        
        $modelidentitas = new Identitas_M();
		$identitas = $modelidentitas->find(1);
		
		$cart = \Config\Services::cart();

		$data = [
			'menu' => $menu,
            'kategori' => $kategori,
			'identitas' => $identitas,
			'cart' => $cart

		];
		return view('fp/detail',$data);
	}

	//--------------------------------------------------------------------

}