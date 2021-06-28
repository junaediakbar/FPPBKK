<?php

namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{

    public function all()
    {
        return Review::latest()->paginate(6);
    }

    public function findById($id)
    {
        return Review::findOrFail($id);
    }

    public function delete($id)
    {
        return Review::findOrFail($id)->delete();
    }
    public function update($id, array $data)
    {
        return Review::findOrFail($id)->update($data);
    }
}