<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function addPhonePost(Request $request)
    {
        // Validate the input
        $request->validate([
            "os" => 'required',
            "display" => 'required',
            "name" => 'required',
            "xotira" => 'required',
            "batareka" => 'required|integer', // Ensure batareka is an integer
            "asosiy_kamera" => 'required',
            "old_kamera" => 'required',
            "sim_karta" => 'required',
            "narxi" => 'required',
            "image" => 'required'
        ]);

        // Create a new phone instance
        $phone = new Phone();

        // Handle the image upload
        $imagephone = $request->file('image');
        $newimagephone = rand() . '_' . $imagephone->getClientOriginalName();
        $imagephone->move(public_path('image'), $newimagephone);

        // Assign the validated input values to the phone object
        $phone->os = $request['os'];
        $phone->display = $request['display'];
        $phone->xotira = $request['xotira'];
        $phone->name = $request['name'];

        // Ensure batareka is an integer
        $batareka = $request->input('batareka');
        if (!is_numeric($batareka)) {
            return redirect()->back()->withErrors(['batareka' => 'The battery life must be a valid integer.']);
        }
        $phone->batareka = (int) $batareka;

        // Other fields
        $phone->asosiy_kamera = $request['asosiy_kamera'];
        $phone->old_kamera = $request['old_kamera'];
        $phone->sim_karta = $request['sim_karta'];
        $phone->narxi = $request['narxi'];
        $phone->user_id = $request->user()->id;
        $phone->image = $newimagephone;

        // Save the phone record
        if ($phone->save()) {
            $msg = "Telefon saqlandi";
        }

        // Redirect back with success message
        return redirect()->back()->with(['succses' => $msg]);
    }


    public function allPhone()
    {
        $phones=Phone::all();
        return view('tablephone',compact('phones'));
    }



    public function addPhone()
    {
        return view('addphone');
    }

    public function editPhone($id)
    {
        $phone=Phone::find($id);
        return view('editphone',['phone'=>$phone]);
    }

    public function editPhonepost(Request $request)
    {

        $request->validate([
            "phoneId" => 'required',
            "os" => 'required',
            "display" => 'required',
            "name" => 'required',
            "xotira" => 'required',
            "batareka" => 'required',
            "asosiy_kamera" => 'required',
            "old_kamera" => 'required',
            "sim_karta" => 'required',
            "narxi" => 'required',
        ]);


        $phone = Phone::find($request->phoneId);

        if (!$phone) {
            return redirect()->back()->withErrors(['phoneId' => 'Phone not found']);
        }

        $phone->os = $request['os'];
        $phone->display = $request['display'];
        $phone->xotira = $request['xotira'];
        $phone->name = $request['name'];
        $phone->batareka = $request['batareka'];
        $phone->asosiy_kamera = $request['asosiy_kamera'];
        $phone->old_kamera = $request['old_kamera'];
        $phone->sim_karta = $request['sim_karta'];
        $phone->narxi = $request['narxi'];
        $phone->user_id = $request->user()->id;

        if($request->hasFile('image')){
            if ($phone->image && file_exists(public_path('/image/' . $phone->image))) {
                unlink(public_path('/image/' . $phone->image));
            }
            $imagephone=$request->file('image');
            $newimagephone=rand().'_'.$imagephone->getClientOriginalName();
            $imagephone->move(public_path('image'),$newimagephone);
            $phone->image=$newimagephone;
        }

        $phone->save();

        return redirect()->route('admin_all.phone')->with('succses', 'Phone updated successfully!');
    }

    public function deletePhone($id)
    {
//        dd(Phone::find($id)); // Check if the model exists and is accessible

        $phone=Phone::find($id);

        if ($phone->image && file_exists(public_path('/image/' . $phone->image))) {
            unlink(public_path('/image/' . $phone->image));
        }
        $phone->delete();
        return redirect()->back()->with('succses', 'Phone deleted successfully!');
    }

}
