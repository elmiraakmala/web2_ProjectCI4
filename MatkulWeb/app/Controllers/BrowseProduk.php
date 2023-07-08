<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\Session\Session;

class BrowseProduk extends BaseController
{
    protected $productData;

    public function __construct()
    {
        $this->productData = new ProductModel();
    }


    public function index()
    {
        $products = $this->productData->orderBy('hargabeliproduk', 'desc')->findAll();

        $data = [
            'products' => $products
        ];

        //echo $this->session->get("username");
        return view('BrowseProduk/index', $data);
        // if (isset($_SESSION['username'])) {
        //     session()->setFlashdata('message', 'Login failed! Please check your username or password!');
        //     return redirect()->to('/user/index');
        // } else {
        //     return false;
        // }
    }
    public function create()
    {

        return view('BrowseProduk/create');
    }

    public function save()
    {


        $this->productData->save([
            'product_name' => $this->request->getVar('product_name'),
            'kategorigroupproduk' => $this->request->getVar('product_group'),
            'stock' => $this->request->getVar('stock'),
            'price' => $this->request->getVar('price'),
            'hargabeliproduk' => $this->request->getVar('price')
        ]);
        session()->setFlashdata('message', 'Data successfully saved!');
        return redirect()->to('/BrowseProduk/index');
    }

    public function delete($id)
    {

        $this->productData->delete($id);
        session()->setFlashdata('message', 'Data successfully Delete!');
        return redirect()->to('/BrowseProduk/index');
    }

    public function edit($id)
    {


        $products = $this->productData->find($id);

        $data = [
            'row' => $products
        ];

        return view('BrowseProduk/edit', $data);
    }

    public function update()
    {

        $id = $this->request->getVar('id');
        //dd($id);
        $this->productData->update($id, [
            'product_name' => $this->request->getVar('product_name'),
            'kategorigroupproduk' => $this->request->getVar('product_group'),
            'stock' => $this->request->getVar('stock'),
            'price' => $this->request->getVar('price'),
            'hargabeliproduk' => $this->request->getVar('price')
        ]);
        session()->setFlashdata('message', 'Data successfully Update!');
        return redirect()->to('/BrowseProduk/index');
    }
}
