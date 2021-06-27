<?php

namespace App\Repositories;

use App\Models\ThirdPayment;

class ThirdPaymentRepository
{
    public function all()
    {
        return ThirdPayment::latest()->paginate(6);
    }

    public function findById($id)
    {
        return ThirdPayment::findOrFail($id);
    }

    public function delete($id)
    {
        return ThirdPayment::findOrFail($id)->delete();
    }
    public function update($id, array $data)
    {
        return ThirdPayment::findOrFail($id)->update($data);
    }
}