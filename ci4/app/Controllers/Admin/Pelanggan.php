<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Pelanggan_M;

class Pelanggan extends BaseController
{
	public function index()
	{
		$pager = \Config\Services::pager();
		$model = new Pelanggan_M();

		$data = [
			'judul' => 'DATA PELANGGAN',
			'pelanggan' => $model->paginate(4, 'g1'),
			'pager' => $model->pager
		];

		return view("pelanggan/select", $data);
	}

	public function delete($id = null)
	{
		$model = new Pelanggan_M();
		$model->delete($id);
		return redirect()->to(base_url("/admin/pelanggan"));
	}

	public function update($id = null, $isi = 1)
	{
		$model = new Pelanggan_M();

		if ($isi == 1) {
			$isi = 0;
		} else {
			$isi = 1;
		}

		$data = [
			'aktif' => $isi
		];

		$model->update($id, $data);
		return redirect()->to(base_url("/admin/pelanggan"));
	}

	//--------------------------------------------------------------------

}
