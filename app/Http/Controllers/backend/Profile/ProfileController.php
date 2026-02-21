<?php

namespace App\Http\Controllers\Backend\Profile;

use App\Models\Contact\Email;
use App\Models\Contact\Number;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Models\Contact\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //Index
    public function index(){
        $metaTitle = 'Profile Update';
        $authenticateUserInfo  = Auth::user();
        return view('backend.profile.index', compact('authenticateUserInfo',('metaTitle')));
    }

    //Store
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.Auth::id(),
        ]);
        $authenticateUserUpdate = Auth::user();
        $authenticateUserUpdate->name = $request->name;
        $authenticateUserUpdate->email = $request->email;
        $authenticateUserUpdate->save();
        Swal::success([
            'title' => 'Profile updated successfully!',
        ]);
        return back();
    }

    //*Password Update
    public function passwordUpdate(Request $request){
        $request->validate([
            'current_password' => 'required',
        ]);

        $passUpdate = Auth::user();

        if(!Hash::check($request->current_password, $passUpdate->password)){
            return back();
        }

        if($request->new_password != $request->confirm_password){
            return back();
        }

        $passUpdate->password = Hash::make($request->new_password);
        $passUpdate->save();
        Swal::success([
            'title' => 'Password updated successfully!',
        ]);
        return back();
    }

    //Image Update
    public function imageUpdate(Request $request){
        $authenticateUserImage = Auth::user();

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageUniqueName = 'profile-'.time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('profile/', $imageUniqueName, 'public');
            $authenticateUserImage->image = $imageUniqueName;
            $authenticateUserImage->save();
            Swal::success([
                'title' => 'Profile image updated successfully!',
            ]);
            return back();
        }
    }

    //contact
    public function contactIndex()
    {
        $metaTitle = 'Contact Add';
        $contacts = Contact::with(['emails', 'numbers'])->get();
        return view('backend.contact.index', compact('contacts','metaTitle'));
    }

    // Contact Store
    public function contactStore(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'emails.*' => 'required|email',
            'numbers.*' => 'required|string|max:20',
        ]);

        $contact = Contact::create([
            'address' => $request->address,
        ]);

        if($request->emails){
            foreach($request->emails as $email){
                $contact->emails()->create(['email' => $email]);
            }
        }

        if($request->numbers){
            foreach($request->numbers as $number){
                $contact->numbers()->create(['number' => $number]);
            }
        }

        Swal::success([
            'title' => 'Contact saved successfully!',
        ]);

        return redirect()->back();
    }

    // Show all contacts
    public function contactShow()
    {
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $metaTitle = 'Contact Information';
        return view('backend.contact.show', compact('contacts', 'metaTitle'));
    }

    // Edit contact form
    public function contactEdit($id)
    {
        $contact = Contact::with(['emails', 'numbers'])->findOrFail($id);
        $metaTitle = 'Contact Update';
        return view('backend.contact.edit', compact('contact', 'metaTitle'));
    }

    // Update contact
    public function contactUpdate(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $request->validate([
            'address' => 'required|string|max:255',
            'emails.*' => 'required|email',
            'numbers.*' => 'required|string|max:20',
        ]);

        $contact->update(['address' => $request->address]);

        $contact->emails()->delete();
        if($request->emails){
            foreach($request->emails as $email){
                $contact->emails()->create(['email' => $email]);
            }
        }

        $contact->numbers()->delete();
        if($request->numbers){
            foreach($request->numbers as $number){
                $contact->numbers()->create(['number' => $number]);
            }
        }

        Swal::success([
            'title' => 'Contact updated successfully!',
        ]);

        return redirect()->route('dashboard.contact.show');
    }

    // Delete contact
    public function contactDelete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        Swal::success([
            'title' => 'Contact deleted successfully!',
        ]);

        return redirect()->route('dashboard.contact.show');
    }


}
