<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\employer;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class employerController extends Controller
{
    public function desktab()
    {
        if(Auth::guard('employer')->check())
        {
            $employer = Auth::guard('employer')->user()->toArray();
            return view('employer.desktab',compact('employer'))->with('page_title','Employer Desktab');
        }
        return redirect()->route('employer.login');
    }

    public function login()
    {
        if(!Auth::guard('employer')->check())
        {
            return view("employer.login")->with('page_title','Employer Login');
        }
        return redirect()->route('employer.desktab');
    }

    public function register()
    {
        return view("employer.register")->with('page_title','Employer Register');
    }
    public function dologin(Request $request)
    {
        $remember = $request->has('remember');
        if(Auth::guard('employer')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')],$remember))
        {
            return redirect()->route("employer.desktab");
        }
        return view('employer.login')->with(['page_title'=>'ورود کارفرما','error'=>"نام کاربری با رمز عبور اشتباه می باشد."]);
    }

    public function doregister(Request $request)
    {
        $new = [
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
        ];
        $new_user = employer::create($new);
        $d = Auth::guard('employer')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')]);
        return redirect()->route("employer.desktab");
    }

    public function edit()
    {
        if(Auth::guard('employer')->check())
        {
            $employer = Auth::guard('employer')->user()->toArray();
            return view('employer.edit',compact('employer'))->with(['page_title'=>'Employer Edit']);
        }
        return redirect()->route('employer.login');
    }

    public function doedit(Request $request)
    {
        if(Auth::guard('employer')->check())
        {
            $id = Auth::guard('employer')->user()->id;
            $employer = employer::find($id);            
            $new = [
                'username'=>$request->input('username'),
                'firstname'=>$request->input('firstname'),
                'lastname'=>$request->input('lastname')
            ];
            $employer->update($new);
        }
        return redirect()->route('freelancer.desktab');
    }

    public function delete()
    {
        if(Auth::guard('freelancer')->check())
        {
            $id = Auth::guard('employer')->user()->id;
            $employer = employer::find($id);
            $employer->delete();
        }
        return redirect()->route('employer.login');
    }

    public function add_project()
    {
        if(Auth::guard('employer')->check())
        {
            return view('employer.add_project')->with(['page_title'=>'Add project']);
        }
        return redirect()->route('employer.login');
    }

    public function doadd_project(Request $request)
    {
        if(Auth::guard('employer')->check())
        {
            $description_file = str::random(10).'.'.$request->file('description_file')->getClientOriginalExtension();
            $owner_id = Auth::guard('employer')->user()->id;
            $new_project = [
                'owner_id'=>$owner_id,
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'abilitis'=>$request->input('abilitis'),
                'price'=>$request->input('price'),
                'file_name'=>$description_file,
            ];
            $result1 = $request->file('description_file')->move(public_path('project_file'),$description_file);
            project::create($new_project);
            return redirect()->route('employer.project_list');//->with(['page_title'=>'لیست پروژه ها','success'=>'پروژه جدید با موفقیت اضافه شد.']);
        }
        return redirect()->route('employer.login');
    }

    public function project_list()
    {
        if(Auth::guard('employer')->check())
        {
            $owner_id = Auth::guard('employer')->user()->id;
            $projects = project::where('owner_id',$owner_id)->get()->toArray();
            return view('employer.project_list',compact('projects'))->with(['page_title'=>'List of my project']);
        }
    }

    public function test()
    {
        // $projests = file_get_contents("1.txt");
        // $projests = explode("\n",$projests);
        // for ($i=0;$i<=12;$i++)
        // {
        // $projests[$i] = explode(",",$projests[$i]);
        // }
        // foreach($projests as $projest){
        //     $new_project = [
        //         'owner_id'=>(int)$projest[0],
        //         'title'=>$projest[1],
        //         'description'=>$projest[2],
        //         'abilitis'=>$projest[3],
        //         'price'=>(int)$projest[4],
        //         'file_name'=>"1.pdf",
        //     ];
        //     dd($new_project);
        //     project::create($new_project);
        //}
    }
    public function logout()
    {
        Auth::guard('employer')->logout();
        return redirect()->route('employer.login');
    }
}
