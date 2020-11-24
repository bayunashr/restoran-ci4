<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Slider_M;

class Slider extends BaseController
{
	public function index()
	{
		$model=new Slider_M();

		$data=[
			'slider' => $model->findAll()
		];

		return view("slider/select",$data);
    }

    public function create()
	{
		return view("slider/insert");
	}
    
    public function insert()
	{
        helper(['form','url']);

        $database = \Config\Database::connect();
        $db = $database->table('tblslider');

        $input = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,1024]',
            ]
        ]);

        if (!$input) {
            print_r('Pilih gambar yang benar');
        } else {
            $img = $this->request->getFile('file');
            $img->move('upload/slider');
    
            $data = [
               'slider' =>  $img->getName(),
               'tipe'  => $img->getClientMimeType()
            ];
    
            $save = $db->insert($data);
            print_r('Sukses diupload');

            return redirect()->to(base_url("/admin/slider"));
        }
    }
    
    public function delete($id=null,$gambar=null)
	{
		$model=new Slider_M();
        $model->delete($id);
        
        // $pathgambar = base_url('/upload/slider/'.$gambar);
        // unlink($pathgambar);

		return redirect()->to(base_url("/admin/slider"));
	}


	//--------------------------------------------------------------------

}
