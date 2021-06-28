<?php
 
namespace App\Repositories;
 
use App\Models\Printing;
 
class PrintingRepository
{
    public function all()
    {
        return Printing::latest()->paginate(6);
    }
 
    public function findById($id)
    {
        return Printing::findOrFail($id);
    }
 
    public function delete($id)
    {
        return Printing::findOrFail($id)->delete();
    }
    public function update($id, array $data)
    {
        return Printing::findOrFail($id)->update($data);
    }
}