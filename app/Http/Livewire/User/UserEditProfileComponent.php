<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEditProfileComponent extends Component
{
    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $image;
    public $line1;
    public $line2;
    public $city;
    public $county;
    public $postcode;
    public $newimage;

    protected $rules = [
      'firstname' => 'required|max:30',
      'lastname' => 'required|max:30',
      'mobile' => 'required|max:15',
      'line1' => 'required|max:15',
      'city' => 'required',
      'county' => 'required',
      'postcode' => 'required',
    ];

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->email = $user->email;
        $this->mobile = $user->profile->mobile;
        $this->image = $user->profile->image;
        $this->line1 = $user->profile->line1;
        $this->line2 = $user->profile->line2;
        $this->city = $user->profile->city;
        $this->county = $user->profile->county;
        $this->postcode = $user->profile->postcode;

    }

    public function updateProfile()
    {
        $this->validateOnly('firstname');
        $this->validateOnly('lastname');
        $this->validateOnly('mobile');
        $this->validateOnly('line1');
        $this->validateOnly('city');
        $this->validateOnly('county');
        $this->validateOnly('postcode');


        $user = User::find(Auth::user()->id);
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->save();

        $user->profile->mobile = $this->mobile;
        if ($this->newimage)
        {
            if ($this->image)
            {
                unlink('asset/profile/' . $this->image);
            }
            $imageName = Carbon::now()->timestamp . "." . $this->newimage->extension();
            $this->newimage->storeAs('profile',$imageName);
            $user->profile->image = $imageName;
        }
        $user->profile->line1 = $this->line1;
        $user->profile->line2 = $this->line2;
        $user->profile->city = $this->city;
        $user->profile->county = $this->county;
        $user->profile->postcode = $this->postcode;

        #dump($user->profile);

        $user->profile->save();

        session()->flash('message','Profile has been updated successfully!');
    }


    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.user.user-edit-profile-component',compact('user'))->layout('dashboard-header');
    }
}
