<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User_M;

class User extends BaseController
{

    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new User_M();

        $data = [
            'judul' => 'DATA MENU',
            'user' => $model->paginate(4, 'g1'),
            'pager' => $model->pager
        ];

        return view("user/select", $data);
    }

    public function create()
    {
        $level = ['Admin', 'Koki', 'Kasir'];
        $data = [
            'level' => $level
        ];
        return view("user/insert", $data);
    }

    public function insert()
    {
        if (isset($_POST['password'])) {
            $data = [
                'user' => $_POST['user'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'level' => $_POST['level'],
                'aktif' => 1
            ];

            $model = new User_M();

            if ($model->insert($data) === false) {
                $error = $model->errors();
                session()->setFlashdata('info', $error);
                return redirect()->to(base_url("/admin/user/create"));
            } else {
                return redirect()->to(base_url("/admin/user"));
            }
        }
    }

    public function delete($id = null)
    {
        $model = new User_M();
        $model->delete($id);
        return redirect()->to(base_url("/admin/user"));
    }

    public function update($id = null, $isi = 1)
    {
        $model = new User_M();

        if ($isi == 1) {
            $isi = 0;
        } else {
            $isi = 1;
        }

        $data = [
            'aktif' => $isi
        ];

        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));
    }

    public function find($id = null)
    {
        $model = new User_M();
        $user = $model->find($id);
        $level = ['Admin', 'Koki', 'Kasir'];

        $data = [
            'judul' => 'UPDATE',
            'user' => $user,
            'level' => $level
        ];

        return view("user/update", $data);
    }

    public function ubah()
    {
        $id = $_POST['iduser'];
        $data = [
            'email' => $_POST['email'],
            'level' => $_POST['level']
        ];

        $model = new User_M();
        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));
    }

    //--------------------------------------------------------------------

}
