<?php

namespace App\Http\Controllers;

use App\Models\Printing;
use App\Repositories\PrintingRepository;
use Illuminate\Http\Request;

class PrintingsController extends Controller
{

    private $printingRepository;
 
    public function __construct(PrintingRepository $printingRepository)
    {
        $this->printingRepository = $printingRepository;
    }

    public function index()
    {
        
        $data = $this->printingRepository->all();
        return view('printing.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
            return view('printing.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'P_nama' => 'required',
            'P_email' => 'required',
            'P_alamat' => 'required',
            'P_notelp' => 'required',
        ]);

        Printing::create([
            'P_nama' => $data['P_nama'],
            'P_email' => $data['P_email'],
            'P_alamat' => $data['P_alamat'],
            'P_notelp' => $data['P_notelp'],
        ]);

        return redirect()->route('printing.index')->with('success','Printing created successfully.');
    }

    public function show($id)
    {
         $printing= $this->printingRepository->findById($id);  
         return view('printing.show', compact('printing'));
     }

    public function edit($id)
    {
        $printing= $this->printingRepository->findById($id);    
        return view('printing.edit', compact('printing'));
    }

    public function update($id, Request $request)
    {
        $data = request()->validate([
            'P_nama' => 'required',
            'P_email' => 'required',
            'P_alamat' => 'required',
            'P_notelp' => 'required',
        ]);

        $this->printingRepository->update($id, $request->all());

        return redirect('/printing')->with('success', 'Printing telah diupdate.');
    }

    public function destroy($id)
    {
        $this->printingRepository->delete($id);
        return redirect('/printing')->with('success', 'Printing dihapus');
    }
}
