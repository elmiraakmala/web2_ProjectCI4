<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\Session\Session;

class Product extends BaseController
{
    protected $productData;

    public function __construct()
    {
        $this->productData = new ProductModel();
    }


    public function index()
    {
        $products = $this->productData->findAll();

        $data = [
            'products' => $products
        ];

        //echo $this->session->get("username");
        return view('Product/index', $data);
        // if (isset($_SESSION['username'])) {
        //     session()->setFlashdata('message', 'Login failed! Please check your username or password!');
        //     return redirect()->to('/user/index');
        // } else {
        //     return false;
        // }
    }

    public function create()
    {

        return view('Product/create');
    }

    public function save()
    {


        $this->productData->save([
            'product_name' => $this->request->getVar('product_name'),
            'stock' => $this->request->getVar('stock'),
            'price' => $this->request->getVar('price')
        ]);
        session()->setFlashdata('message', 'Data successfully saved!');
        return redirect()->to('/product/index');
    }


    public function delete($id)
    {

        $this->productData->delete($id);
        session()->setFlashdata('message', 'Data successfully Delete!');
        return redirect()->to('/product/index');
    }

    public function edit($id)
    {


        $products = $this->productData->find($id);

        $data = [
            'row' => $products
        ];

        return view('Product/edit', $data);
    }

    public function update()
    {

        $id = $this->request->getVar('id');
        //dd($id);
        $this->productData->update($id, [
            'product_name' => $this->request->getVar('product_name'),
            'stock' => $this->request->getVar('stock'),
            'price' => $this->request->getVar('price')
        ]);
        session()->setFlashdata('message', 'Data successfully Update!');
        return redirect()->to('/product/index');
    }
}
