<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class FinalController extends Controller
{
    <?php

    namespace App\Http\Controllers;
    
    use App\Contact;
    use Illuminate\Http\Request;
    
    class ContactController extends Controller
    {
       public function index(){
           $contact = Contact::all();
           return view('contact.index',compact('contact'));
       }
       public function create(){
           return view('contact.index');
       }
       public function store(Request $request){
           $request->validate([
               'Title'=>'required',
               'Description'=>'required',
               'Price'=>'required',
           ]);
            $contact = new Contact();
    
            $contact->Title = $request->Title;
            $contact->Description = $request->Description;
            $contact->Price = $request->Price;
    
            $contact->save();
    
            return redirect()->back();
    
       }
    
       public function edit(Contact $contact){
        // $contact = Co ntact::findOrFail($id);
        return view('contact.index', compact('contact'));
       }
    
       public function update(Request $request, Contact $contact){
        $request->validate([
            'Title'=>'required',
            'Description'=>'required',
            'Price'=>'required',
        ]);
    
        // $contact = Contact::findOrFail($id);
    
            $contact->Title = $request->Title;
            $contact->Description = $request->Description;
            $contact->Price = $request->Price;
    
            $contact->save();
    
            return redirect('/contact');
       }
    
       public function destroy($id){
        
        $task=Contact::find($id);
        $task->delete();
    
        return redirect()->back();
    }
    }
    
}
