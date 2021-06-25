<?php

namespace App\Http\Controllers\freelancer;
use App\Models\freelancer;
use App\Models\project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\chat;
class freelancerController extends Controller
{
    public function desktab()
    {
        if(Auth::guard('freelancer')->check())
        {
            $freelancer = Auth::guard('freelancer')->user()->toArray();
            $abilitis = explode(',',$freelancer['abilitis']);
            $languages = explode(',',$freelancer['languages']);
            return view('freelancer.desktab',compact('freelancer','abilitis','languages'))->with(['page_title'=>'Freelancer Desktab']);
        }
        return redirect()->route('freelancer.login');
    }

    public function login()
    {
        if(!Auth::guard('freelancer')->check())
        {
            return view("freelancer.login")->with(['page_title'=>'Freelancer Login']);
        }
        return redirect()->route('freelancer.desktab');
    }

    public function register()
    {
        return view('freelancer.register')->with('page_title','Freelancer register');
    }

    public function dologin(Request $request)
    {
        $remember = $request->has('remember');
        if(Auth::guard('freelancer')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')],$remember))
        {
            return redirect()->route("freelancer.desktab");
        }
        return view('freelancer.login')->with(['page_title'=>'Freelancer Login']);
    }

    public function doregister(Request $request)
    {
        if(!Auth::guard('freelancer')->check())
        {
            $photo_name = str::random(10).'.'.$request->file('photo')->getClientOriginalExtension();
            $CV_name = str::random(10).'.'.$request->file('CV_name')->getClientOriginalExtension();
            $new = [
                'username'=>$request->input('username'),
                'password'=>$request->input('password'),
                'firstname'=>$request->input('firstname'),
                'lastname'=>$request->input('lastname'),
                'age'=>$request->input('age'),
                'phone_number'=>$request->input('phone_number'),
                'email'=>$request->input('email'),
                'gender'=>$request->input('gender'),
                'Marital_status'=>$request->input('Marital_status'),
                'abilitis'=>$request->input('abilitis'),
                'education'=>$request->input('education'),
                'bio'=>$request->input('bio'),
                'languages'=>$request->input('languages'),
                'profile_photo_name'=>$photo_name,
                'CV_name'=>$CV_name,
            ];
            $result1 = $request->file('photo')->move(public_path('profilePhoto'),$photo_name);
            $result2 = $request->file('CV_name')->move(public_path('cvFile'),$CV_name);
            $result3 = freelancer::create($new);
            Auth::guard('freelancer')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')]);
        }
        return redirect()->route("freelancer.desktab");
    }
    public function delete()
    {
        if(Auth::guard('freelancer')->check())
        {
            $id = Auth::guard('freelancer')->user()->id;
            $freelancer = freelancer::find($id);
            unlink(public_path('cvFile').'\\'.$freelancer->CV_name);
            unlink(public_path('profilePhoto').'\\'.$freelancer->profile_photo_name);
            $freelancer->delete();
        }
        return redirect()->route('freelancer.login');
    }

    public function edit()
    {
        if(Auth::guard('freelancer')->check())
        {
            $freelancer = Auth::guard('freelancer')->user()->toArray();
            return view('freelancer.edit',compact('freelancer'))->with(['page_title'=>'Freelancer Edit']);
        }
        return redirect()->route('freelancer.login');
    }

    public function doedit(Request $request)
    {
        if(Auth::guard('freelancer')->check())
        {
            $id = Auth::guard('freelancer')->user()->id;
            $freelancer = freelancer::find($id);            
            $new = [
                'username'=>$request->input('username'),
                'firstname'=>$request->input('firstname'),
                'lastname'=>$request->input('lastname'),
                'age'=>$request->input('age'),
                'phone_number'=>$request->input('phone_number'),
                'email'=>$request->input('email'),
                'gender'=>$request->input('gender'),
                'Marital_status'=>$request->input('Marital_status'),
                'abilitis'=>$request->input('abilitis'),
                'education'=>$request->input('education'),
                'bio'=>$request->input('bio'),
                'languages'=>$request->input('languages'),
            ];
            $freelancer->update($new);
        }
        return redirect()->route('freelancer.desktab');
    }

    public function project_list()
    {
        if(Auth::guard('freelancer')->check())
        {
            $freelancer = Auth::guard('freelancer')->user()->toArray();
            $abilitis = explode(',',$freelancer['abilitis']);
            $projects = [];
            foreach(project::all()->toArray() as $project)
            {
                foreach(explode(',',$project['abilitis']) as $abiliti)
                {
                    if(in_array($abiliti,$abilitis))
                    {
                        array_push($projects,$project);
                        break;
                    }
                }
            }
            return view('freelancer.project_list',compact('freelancer','projects'))->with(['page_title'=>'Freelancer project']);
        }
        return redirect()->route('freelancer.login');
    }

    public function chat()
    {
        if(Auth::guard('freelancer')->check())
        {
            $freelancer = Auth::guard('freelancer')->user()->toArray();
            $name = $freelancer['firstname'];
            $messages = chat::all()->toArray();
            $result = "";
            foreach($messages as $message)
            {
                if($message['name'] == $name)
                {
                    $result .= "<div><pre class='my-message'> ".$message['message']." </pre></div><br><br><br>";
                }
                else
                {
                    $result .= "<div class='you-message'><div class='message-title'>".$message['name']."</div><pre class='you-message'> ".$message['message']." </pre></div><br><br>";
                }
            }
            echo json_encode($result);
        }
    }

    public function dochat(Request $request)
    {
        $freelancer = Auth::guard('freelancer')->user()->toArray();
        $new =[
            'name'=>$freelancer['firstname'],
            'message'=>$_POST['message']
        ];
        $result = chat::create($new);
    }

    public function cv()
    {
        if(Auth::guard('freelancer')->check())
        {
            $freelancer = Auth::guard('freelancer')->user()->toArray();
            $abilitis = explode(',',$freelancer['abilitis']);
            $languages = explode(',',$freelancer['languages']);
            return view('freelancer.cv',compact('freelancer','abilitis','languages'));
        }
    }

    

    public function logout()
    {
        Auth::guard('freelancer')->logout();
        return redirect()->route('freelancer.login');
    }
}