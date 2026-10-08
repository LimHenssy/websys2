<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        // Query Builder database retrieval[cite: 2]
        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customerModel->findAll()
        ];

        return view('customers/index', $data);
    }
}