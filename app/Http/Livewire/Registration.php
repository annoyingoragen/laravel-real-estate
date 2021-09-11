<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\userplot;
use App\Models\plotfile;
use App\Models\plotimages;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class Registration extends Component
{
    use WithFileUploads;


    public $name;
    public $fathername;
    public $email;
    public $age;
    public $permanentaddress;
    public $cnic;
    public $mailingaddress;
    public $occupation;
    public $telephone;
    public $cellno;

    public $plotaddress;
    public $regnum;
    public $pricepermarla;
    public $bookingdate;
    public $plotprice;
    public $plotfile;
    public $photo = [];
    public $plotimagedockey;

    protected $rules = [
        'name' => 'required|max:20',
        'fathername' => 'required|max:20',
        'email' => 'required|email',
        'cnic' => 'required|max:15',
        'occupation' => 'required',
        'telephone' => 'required|max:15',
        'cellno' => 'required|max:15',
        'mailingaddress' => 'required|max:100',
        'permanentaddress' => 'required|max:100',
        'age' => "required",

        'plotaddress' => "required",
        'regnum' => "required",
        'pricepermarla' => "required",
        'bookingdate' => "required",
        'plotprice' => "required",
        'plotfile' => "required",
        'photo.*' => 'required|max:1024',
    ];

    public function update($id)
    {

        $userdetails = userplot::find($id);

        $userdetails->name = request('name');
        $userdetails->fathername = request('fathername');
        $userdetails->email = request('email');
        $userdetails->cnic = request('cnic');
        $userdetails->occupation = request('occupation');
        $userdetails->telephone = request('telephone');
        $userdetails->cellno = request('cellno');
        $userdetails->mailingaddress = request('mailingaddress');
        $userdetails->permanentaddress = request('permanentaddress');
        $userdetails->age = request('age');
        $userdetails->plotaddress = request('plotaddress');
        $userdetails->regnum = request('regnum');
        $userdetails->pricepermarla = request('pricepermarla');
        $userdetails->bookingdate = request('bookingdate');
        $userdetails->plotprice = request('plotprice');
        $userdetails->save();
        $randomNumber = $userdetails->plotimagedockey;

        $photodetails = plotimages::where('plotimagedockey', $randomNumber)->first();

        $photo = array();
        $photo = request('photo');

        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */

        /**************deleting previous photos from photo folders */

        if (!empty($photo)) {
            $previousphotonames = $photodetails->plotimagetitle;
            $previousphotonames = json_decode($previousphotonames, true);

            if (count($previousphotonames) > 0) {

                foreach ($previousphotonames as $f) {
                    $filen = str_replace('"', '', $f);
                    if (File::exists(public_path('storage/photos/' . $filen))) {
                        File::delete(public_path('storage/photos/' . $filen));
                    } else {
                        dd(public_path('storage\photos\\' . $filen));
                    }
                }
            } else {

                $filen = str_replace('"', '', $previousphotonames->plotimagetitle);
                if (File::exists(public_path('storage/photos/' . $filen))) {
                    File::delete(public_path('storage/photos/' . $filen));
                } else {
                    dd(public_path('storage\photos\\' . $filen));
                }
            }
        }

        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /**************updating  photos in photo folders and in database */
        $stack = array();
        if (!empty($photo)) {

            foreach ($photo as $p) {
                $type = explode(".", $p->getClientOriginalName());
                $name = $type[0];
                $type = $type[1];

                $imageName = $name . $randomNumber . "." . $type;
                $p->storePubliclyAs('photos', $imageName, 'public');
                $p->storeAs('photos', $imageName);

                array_push($stack, $imageName);
            }
            $photo = json_encode($stack);
            $photodetails->plotimagetitle = $photo;
            $photodetails->save();
        }
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */

        $filedetails = plotfile::where('plotimagedockey', $randomNumber)->first();

        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /**************deleting previous files from file folders */
        $file = request('plotfile');
        if(!empty($file)){
            $previousfilename = $filedetails->plotfiletitle;
            $previousfilename = json_decode($previousfilename, true);
            if (File::exists(public_path('storage/files/' . $previousfilename))) {
                File::delete(public_path('storage/files/' . $previousfilename));
            } else {
                dd(public_path('storage\files\\' . $previousfilename));
            }    
        }

        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */

        /**************updating files in file folders and in db */
        if(!empty($file)){
            $type = explode(".", $file->getClientOriginalName());
            $name = $type[0];
            $type = $type[1];
            $fileName = $name . $randomNumber . "." . $type;
            $file->storeAs('files', $fileName);
            $file->storePubliclyAs('files', $fileName, 'public');

            $file = json_encode($fileName);
            $filedetails->plotfiletitle = $file;
            $filedetails->save();
        }
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        $userdetails = userplot::find($id)->join('plotimages', 'userplots.plotimagedockey', '=', 'plotimages.plotimagedockey')
            ->join('plotfiles', 'userplots.plotimagedockey', '=', 'plotfiles.plotimagedockey')
            ->get(['userplots.*', 'plotimages.plotimagetitle', 'plotfiles.plotfiletitle']);
            if(count($userdetails)>1)
            {
                foreach($userdetails as $userdetail)
                {
                    if ($userdetail->id==$id)
                    {
                        return view('admin.show')->with('userdetail', $userdetail);
                    }
                }
            }
        }

    public function submit()
    {

        $this->validate();
        $randomNumber = random_int(100000, 999999);
        $this->plotimagedockey = $randomNumber;

        $stack = array();
        foreach ($this->photo as $p) {
            $type = explode(".", $p->getClientOriginalName());
            $name = $type[0];
            $type = $type[1];

            $imageName = $name . $randomNumber . "." . $type;
            $p->storePubliclyAs('photos', $imageName, 'public');
            $p->storeAs('photos', $imageName);



            array_push($stack, $imageName);
        }

        $this->photo = json_encode($stack);

        plotimages::create([
            'plotimagetitle' => $this->photo,
            'plotimagedockey' => $this->plotimagedockey
        ]);


        $type = explode(".", $this->plotfile->getClientOriginalName());
        $name = $type[0];
        $type = $type[1];
        $fileName = $name . $randomNumber . "." . $type;
        $this->plotfile->storeAs('files', $fileName);
        $this->plotfile->storePubliclyAs('files', $fileName, 'public');

        $this->plotfile = json_encode($fileName);

        plotfile::create([

            'plotfiletitle' => $this->plotfile,
            'plotimagedockey' => $this->plotimagedockey
        ]);

        // Add registration data to modal
        // dd( $validatedData );
        userplot::create([

            'name' => $this->name,
            'fathername' => $this->fathername,
            'email' => $this->email,
            'cnic' => $this->cnic,
            'occupation' => $this->occupation,
            'telephone' => $this->telephone,
            'cellno' => $this->cellno,
            'mailingaddress' => $this->mailingaddress,
            'permanentaddress' => $this->permanentaddress,
            'age' => $this->age,

            'plotaddress' => $this->plotaddress,
            'regnum' => $this->regnum,
            'pricepermarla' => $this->pricepermarla,
            'bookingdate' => $this->bookingdate,
            'plotprice' => $this->plotprice,
            'plotimagedockey' => $this->plotimagedockey
        ]);

        return redirect()->to('/admin/dashboard');
    }

    public function viewshow($id)
    {
        $userdetails = userplot ::find($id)->join('plotimages', 'userplots.plotimagedockey', '=', 'plotimages.plotimagedockey')
            ->join('plotfiles', 'userplots.plotimagedockey', '=', 'plotfiles.plotimagedockey')
            ->get(['userplots.*', 'plotimages.plotimagetitle', 'plotfiles.plotfiletitle']);
            
            if(count($userdetails)>1)
            {
                foreach($userdetails as $userdetail)
                {
                    if ($userdetail->id==$id)
                    {
                        return view('admin.show')->with('userdetail', $userdetail);
                    }
                }
            }
    }
    
    public function viewedit($id)
    {
        
        $userdetails = userplot ::find($id)->join('plotimages', 'userplots.plotimagedockey', '=', 'plotimages.plotimagedockey')
            ->join('plotfiles', 'userplots.plotimagedockey', '=', 'plotfiles.plotimagedockey')
            ->get(['userplots.*', 'plotimages.plotimagetitle', 'plotfiles.plotfiletitle']);
            
            if(count($userdetails)>1)
            {
                foreach($userdetails as $userdetail)
                {
                    if ($userdetail->id==$id)
                    {
                        return view('admin.edit')->with('userdetail', $userdetail);
                    }
                }
            }
        
    }

    public function viewaallusers()
    {

        $products = userplot::join('plotimages', 'userplots.plotimagedockey', '=', 'plotimages.plotimagedockey')
            ->join('plotfiles', 'userplots.plotimagedockey', '=', 'plotfiles.plotimagedockey')
            ->get(['userplots.*', 'plotimages.plotimagetitle', 'plotfiles.plotfiletitle']);
        // $products=userplot::orderBy('id','desc')->paginate(5);
        return view('admin.display')->with('products', $products);
    }

    public function view_properties_for_sale()
    {
        
        $products = userplot::join('plotimages', 'userplots.plotimagedockey', '=', 'plotimages.plotimagedockey')
            ->join('plotfiles', 'userplots.plotimagedockey', '=', 'plotfiles.plotimagedockey')->paginate(4,array('userplots.*', 'plotimages.plotimagetitle', 'plotfiles.plotfiletitle'));
            // ->get(['userplots.*', 'plotimages.plotimagetitle', 'plotfiles.plotfiletitle']);
        // $products=userplot::orderBy('id','desc')->paginate(5);
        return view('Rent & Sell.index')->with('products', $products);

    }
    

    public function viewphotos($id)
    {   
        $plotimages=plotimages::where('plotimagedockey', $id)->first();
        return view('admin.displayphotos')->with('images',$plotimages);
    }    
    public function deleteuser()
    {
        
        $id=request('id');
        $user =userplot::find($id);
        $file = plotfile::where('plotimagedockey', $user->plotimagedockey)->first();
        

        $randomNumber =$user->plotimagedockey;

        
        $filedetails = plotfile::where('plotimagedockey', $randomNumber)->first();

        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /**************deleting previous files from file folders */
        $file = request('plotfile');
        if(!empty($file)){
            $previousfilename = $filedetails->plotfiletitle;
            $previousfilename = json_decode($previousfilename, true);
            if (File::exists(public_path('storage/files/' . $previousfilename))) {
                File::delete(public_path('storage/files/' . $previousfilename));
            } else {
                dd(public_path('storage\files\\' . $previousfilename));
            }    
        }




        $file->delete();


        $photo = plotimages::where('plotimagedockey', $user->plotimagedockey)->first();



        $photodetails = plotimages::where('plotimagedockey', $randomNumber)->first();

        $photo = array();
        $photo = request('photo');

        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */
        /*********************************************************************** */

        /**************deleting previous photos from photo folders */

        if (!empty($photo)) {
            $previousphotonames = $photodetails->plotimagetitle;
            $previousphotonames = json_decode($previousphotonames, true);

            if (count($previousphotonames) > 0) {

                foreach ($previousphotonames as $f) {
                    $filen = str_replace('"', '', $f);
                    if (File::exists(public_path('storage/photos/' . $filen))) {
                        File::delete(public_path('storage/photos/' . $filen));
                    } else {
                        dd(public_path('storage\photos\\' . $filen));
                    }
                }
            } else {

                $filen = str_replace('"', '', $previousphotonames->plotimagetitle);
                if (File::exists(public_path('storage/photos/' . $filen))) {
                    File::delete(public_path('storage/photos/' . $filen));
                } else {
                    dd(public_path('storage\photos\\' . $filen));
                }
            }
        }


        


        $photo->delete();
         $user->delete();
        
         return redirect('display');
    }
    public function uploadphotos()
    {
        $id=request('id');
        $plot=plotimages::find($id);
        
        $photo = array();
        $photo = request('photo');
        if (!empty($photo)) {
            $previousphotonames = $plot->plotimagetitle;
            $previousphotonames = json_decode($previousphotonames, true);
            // dd($photo);

            foreach ($photo as $p) {
                
                $type = explode(".", $p->getClientOriginalName());
                $name = $type[0];
                $type = $type[1];
               
                $imageName = $name . $plot->plotimagedockey . "." . $type;
                // dd($imageName);
                //dd($p);
                $p->storePubliclyAs('photos', $imageName, 'public');
                $p->storeAs('photos', $imageName);

                array_push($previousphotonames, $imageName);
            }
            
            $previousphotonames = json_encode($previousphotonames);
            
            $plot->plotimagetitle = $previousphotonames;
            $plot->save();
            
            // $previousphotonames = json_decode($previousphotonames, true);
            // dd($previousphotonames);
        }
        return redirect('/showphotos/'.$plot->plotimagedockey);

    }

    public function removephotos($id,$photoid)
    {
        
        $plot=plotimages::find($id);
        $previousphotonames = $plot->plotimagetitle;
        $previousphotonames = json_decode($previousphotonames, true);
        $i=0;
            foreach($previousphotonames as $p)
            { 
                if($p==$photoid)
                // dd($previousphotonames);
              { 
                 array_splice($previousphotonames,$i,1);
                   
                   if (File::exists(public_path('storage/photos/' . $p))) {
                       File::delete(public_path('storage/photos/' . $p));
                        
                        $previousphotonames = json_encode($previousphotonames);
                        $plot->plotimagetitle = $previousphotonames;
                        $plot->save();
                        return redirect('/showphotos/'.$plot->plotimagedockey);
                   } 
                   else {
                       dd(public_path('storage\photos\\' . $p));
                   }    
               
              }
               $i++;
            }

    }

    public function updateuserstatus($id,$statusvalue)
    {
        
        $plot=userplot::find($id);
        
        $plot->status=$statusvalue;
        $plot->save();
        return redirect('display');

    }
    public function render()
    {
        return view('livewire.registration');
    }
}
