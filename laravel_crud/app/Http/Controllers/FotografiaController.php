<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Fotografia;
 
class FotografiaController extends Controller
{
    public function index()
    {
        $fotografit = Fotografia::all();
        return view ('fotografit.index')->with('fotografit', $fotografit);
    }
 
    
    public function create()
    {
        return view('fotografit.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Fotografia::create($input);
        return redirect('fotografia')->with('flash_message', 'Fotografia u shtua!');  
    }
 
    
    public function show($id)
    {
        $fotografia = Fotografia::find($id);
        return view('fotografit.show')->with('fotografit', $fotografia);
    }
 
    
    public function edit($id)
    {
        $fotografia = Fotografia::find($id);
        return view('fotografit.edit')->with('fotografit', $fotografia);
    }
 
  
    public function update(Request $request, $id)
    {
        $fotografia = Fotografia::find($id);
        $input = $request->all();
        $fotografia->update($input);
        return redirect('fotografia')->with('flash_message', 'Fotografia u perditsua!');  
    }
 
   
    public function destroy($id)
    {
        Fotografia::destroy($id);
        return redirect('fotografia')->with('flash_message', 'Fotografia u fshi!');  
    }
}