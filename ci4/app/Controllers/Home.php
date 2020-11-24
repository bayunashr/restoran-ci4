<?php namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Menu_M;
use App\Models\Slider_M;
use App\Models\Identitas_M;

class Home extends BaseController
{
	public function index()
	{
		$pager = \Config\Services::pager();

		$menu = new Menu_M();
		$slider = new Slider_M();
		$identitas = new Identitas_M();
		$cart = \Config\Services::cart();
		
		$data = [
			'menu' => $menu->paginate(8,'g1'),
            'pager' => $menu->pager,
			'slider' => $slider->findAll(),
			'identitas' => $identitas->find(1),
			'cart' => $cart
		];
		return view('fp/home',$data);
	}

	public function rawTemplate()
	{
		$menu = new Menu_M();
		$slider = new Slider_M();
		$identitas = new Identitas_M();
		$cart = \Config\Services::cart();
		
		$data = [
			'menu' => $menu->findAll(),
			'slider' => $slider->findAll(),
			'identitas' => $identitas->find(1),
			'cart' => $cart
		];
		return view('fp/template/raw',$data);
	}

	//--------------------------------------------------------------------

}
