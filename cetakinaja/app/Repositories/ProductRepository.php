<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{

    public function all()
    {
        return Product::latest()->paginate(6);
    }

    public function findById($id)
    {
        return Product::findOrFail($id);
    }

    public function delete($id)
    {
        return Product::findOrFail($id)->delete();
    }
    public function update($id, array $data)
    {
        return Product::findOrFail($id)->update($data);
    }
}