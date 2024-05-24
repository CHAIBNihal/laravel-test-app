<?php

namespace App\Http\Controllers;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    // Remplacer les tables des bases de données par cette liste
    //getData() est une fonction qui nous créer une table des machine
// private static function getData(){
//     return [
//         ["id"=>1, 'name'=>"LG", 'origine'=>"Koria"],
//         ["id"=>2, 'name'=>"dell", 'origine'=>"USA"],
//         ["id"=>3, 'name'=>"siemens", 'origine'=>"Germany"],
//     ];
// }

// Show All data
    public function index()
    {
        // Computer/index == Computer.index
       return view("computer.index", [
        // Là j'ai forcer l'attribution de tous les element de tableau qu'elle sera stocker dans la variable computers
       // cette variable est passer au view page index.blade.php et elle va etre traiter par le blon @if et @endif et @foreach et @endforeach
       //"computers"=> self::getData();

        "computers"=> Computer::all()


       ]);
    }


    public function create()
    {
        return view('computer.create');
    }


    public function store(Request $request)
    {
      $request->validate([
        'computer-name' => 'required',
        'computer-origin' => 'required',
        'computer-price' => ['required','integer'],
      ]);
        // Instansiation d'un objet Computer et qui peut prendre generalement des parametres et parfois non selon le besoin d'utilisation
       $computer= new Computer();
       $computer-> name = strip_tags($request->input('computer-name'));
       $computer -> origin =strip_tags( $request->input('computer-origin'));
       $computer->price= strip_tags($request->input('computer-price'));

       // Garder tous se qui est envoyer au mpodel
       $computer->save();
       return redirect()->route('computer.index');
    }


    public function show($computer)
    {
          return view("computer.show", [
            "computer" => Computer::findOrFail($computer)]);

        // $computers  = self::getData();
        // $index = array_search($id, array_column($computers, "id"));
        // if($index === false){
        //      abort(404);

        // }
        // return view("computer.show", [
        //     "computer" => $computers[$index]]);

        // if($index === false){ -> j'ai eliminer cette ligne parceque j'ai utiliser findOrFail

        //      abort(404);

        // }


    }


    public function edit($computer)
    {
        return view('computer.edit',[
            "computer" => Computer::findOrFail($computer)
        ]);
    }


    public function update(Request $request, $computer)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required','integer'],
          ]);
         $to_update= Computer::findOrFail($computer);
         $to_update-> name = strip_tags($request->input('computer-name'));
         $to_update -> origin =strip_tags( $request->input('computer-origin'));
         $to_update->price= strip_tags($request->input('computer-price'));

         // Garder tous se qui est envoyer au mpodel
         $to_update->save();
         return redirect()->route('computer.show' , $computer);
    }


    public function destroy($computer)
    {
        $to_delete = Computer::findOrFail($computer);
        $to_delete->delete();
        return redirect()->route('computer.index');
    }

}
