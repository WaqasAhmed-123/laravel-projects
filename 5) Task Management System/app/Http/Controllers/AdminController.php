<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\User;
use App\GeneralPurpose;
use Carbon\Carbon;

class AdminController extends Controller
{

    //following middleware is checking authentications and role
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:1']);
    // }

    
    
    public function index()
    {
        return view('admin.index');
    }


    public function addUser()
    {
        return view('admin.addUser');
    }

    

    public function postAddUser(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'email' => 'required|max:355|unique:users,email',
            'password' => 'required|string|min:3',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->with('error', GeneralPurpose::getErrorString($validator->errors()));   
        }

        $user = new User;
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 2;
        $user->is_active = 1;
        $user->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->updated_at = null;
        $user->save();
        
        return redirect()->back()->with('success', 'User inserted successfully.');
    }


    public function viewUser()
    {

        $users = User::where('role', 2)->where('is_active', 1)->orderBy('id', 'desc')->get();

        return view('admin.viewUser', ['users' => $users]);
    }


    public function postUpdateUser(Request $request)
    {
        $user = User::where('id', $request->id)->get()->first();

        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'email' => 'required|max:355|unique:users,email,'.$user->id,
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->with('error', GeneralPurpose::getErrorString($validator->errors()));   
        }

        $name = $request->input('name');
        $contact = $request->input('contact');
        $email = $request->input('email');


        $updateUser = User::where('id', $user->id)->update(['name' => $name, 'contact' => $contact, 'email' => $email, 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);


        return redirect()->back()->with('success', 'User record updated successfully.');
    }


    public function deleteUser($id)
    {
        $user = User::where('id', $id)->get()->first();

        $updateUser = User::where('id', $id)->update(['is_active' => 0,  'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

        return redirect('/viewUser')->with('success', 'User record deleted successfully.');
    }

//Ajax


    public function getUsersList(Request $request)
    {
        $userList = User::where('role', 2);
        //$userList = $userList->where('name', "Ali Ahmed");

        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

         // Total records
         $totalRecords = User::where('role', 2)->select('count(*) as allcount')->count();
        
        //$totalRecords = $userList->count();
        // $totalRecordswithFilter = $userList->where('name', 'like', '%' .$searchValue . '%')
        //     ->orWhere('contact', 'like', '%' .$searchValue . '%')
        //     ->orWhere('email', 'like', '%' .$searchValue . '%')->count();
        
        $totalRecordswithFilter = User::where('role', 2)->select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();
     
     

        if($searchValue != "")
        {
            $userList = User::where('role', 2)->where('name', 'like', '%' .$searchValue . '%')
            ->orWhere('contact', 'like', '%' .$searchValue . '%')
            ->orWhere('email', 'like', '%' .$searchValue . '%');
        }

        $records = $userList
            ->skip($start)
            ->take($rowperpage)
            ->get();

        // Fetch records
        // $records = User::orderBy($columnName,$columnSortOrder)
        //    ->orWhere('name', 'like', '%' .$searchValue . '%')
        //    ->orWhere('contact', 'like', '%' .$searchValue . '%')
        //    ->orWhere('email', 'like', '%' .$searchValue . '%')
        //   //->select('users.*')
        //    ->skip($start)
        //    ->take($rowperpage)
        //    ->get();

        $data_arr = array();
     
        foreach($records as $user)
        {
            $id = $user->id;
            $name = $user->name;
            $contact = $user->contact;
            $email = $user->email;

            $data_arr[] = array(
              "id" => $id,
              "name" => $name,
              "contact" => $contact,
              "email" => $email
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        return json_encode($response);
        exit;
   }


    public function getUserById(Request $request) 
    {
        $user = User::where('id', $request->id)->get()->first();
      
        $response = array(
            'id' => $user->id,
            'name' => $user->name,
            'contact' => $user->contact,
            'email' => $user->email
        );

      return response()->json($response); 
   }

//Ajax
}
