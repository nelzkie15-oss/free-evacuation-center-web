<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalamityType;
use App\Models\BarangayInformation;
use App\Models\EvacuationCenter;
use App\Models\EvacueeInformation;
use App\Models\Lgu;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{


    public function index(){
        return view('index');
    }

    public function AdminHome(){
        return view('admin.home');
    }

    public function ViewallCalamitytype(){
        $calamitytype = CalamityType::all();
        return view('admin.calamity-type', compact('calamitytype'));

        return redirect()->route('admin.calamity-type')->with('update-completed', 'Calamity type has been updated');

        
        return redirect()->route('admin.calamity-type')->with('delete-completed', 'Calamity Type has been deleted.');
    }


    //add calamity type
    public function AddCalamityType(Request $request){

        $request->validate([
            'calamity_name' => 'required|max:255',
          ]);

          CalamityType::create($request->all());

          return redirect()->route('admin.calamity-type')->with('mgs', 'Calamity Type created successfully.');

    }

    //end add calamity type.

    //get id 
    public function EditCalamitytype($id){
        $ctype = CalamityType::findOrFail($id);
        $calamitytype = CalamityType::all();
        return view('admin.edit-calamitytype', compact('ctype', 'calamitytype'));
    }

    //end get id

    //update calamitytype

    public function UpdateCalamitytype(Request $request, $id){

        $updateData = $request->validate([
            'calamity_name' => 'required|max:255',
        ]);

        CalamityType::whereId($id)->update($updateData);
        return redirect()->route('admin.calamity-type')->with('update-completed', 'Calamity type has been updated');

    }

    //end update calamitytype

    //delete calamitytype

    public function DeleteCalamitytype($id){

        $ctypes = CalamityType::findOrFail($id);
        $ctypes->delete();
        return redirect()->route('admin.calamity-type')->with('delete-completed', 'Calamity Name has been deleted.');

    }

    //end delete calamitytype

    public function ViewDashboard(){

        $numberoffamily =  EvacueeInformation::count(); 
        $numberofevacuees =  EvacueeInformation::count();
        $numberoffemale =  EvacueeInformation::where('gender','Female')->count();
        $numberofmale =  EvacueeInformation::where('gender','Male')->count();
        $numberofbarangay =  BarangayInformation::count();  
        $numberofevacuationcenter =  EvacuationCenter::count();     

        return view('admin.index', compact('numberoffamily','numberofevacuees','numberoffemale','numberofmale','numberofbarangay','numberofevacuationcenter'));
    }

    public function ViewallBarangay(){
        $brgyInfo = BarangayInformation::all();
        return view('admin.barangay', compact('brgyInfo'));
    }

    public function AddBarangayInfo(Request $request){

        $request->validate([
            'barangay_name' => 'required|max:255',
          ]);

          BarangayInformation::create($request->all());

          return redirect()->route('admin.barangay')->with('mgs_brgyinfo', 'Barangay Information created successfully.');
        
    }

    public function EditBarangayInfo($id){
        $binfo = BarangayInformation::findOrFail($id);
        $brgyInfo = BarangayInformation::all();

        return view('admin.edit-barangayinfo', compact('binfo', 'brgyInfo'));

    }

    public function UpdateBarangayInfo(Request $request, $id){

        $updateData = $request->validate([
            'barangay_name' => 'required|max:255',
        ]);

        BarangayInformation::whereId($id)->update($updateData);
        return redirect()->route('admin.barangay')->with('update-completed2', 'Barangay Information has been updated');

    }

    public function DeleteBarangayInfo($id){

        $ctypes = BarangayInformation::findOrFail($id);
        $ctypes->delete();
        return redirect()->route('admin.barangay')->with('delete-completed2', 'Barangay Name has been deleted.');

    }

    public function ViewallEvacuationCenter(){
        $evaCenter = EvacuationCenter::all();

        return view('admin.evacuation-center', compact('evaCenter'));
    }

    public function AddEvacuationCenter(Request $request){

        $request->validate([
            'center_name' => 'required|max:255',
            'address' => 'required|max:255',
            'contact_info' => 'required|max:11',
          ]);

          EvacuationCenter::create($request->all());

          return redirect()->route('admin.evacuation-center')->with('mgs_evacen', 'Evacuation Center created successfully.');

    }

    public function EditEvacuationCenter($id){

        $eCenter = EvacuationCenter::findOrFail($id);
        $evaCenter = EvacuationCenter::all();

        return view('admin.edit-evacuationcenter', compact('eCenter', 'evaCenter'));

    }

    public function UpdateEvacuationCenter(Request $request, $id){

        $updateData = $request->validate([
            'center_name' => 'required|max:255',
            'address' => 'required|max:255',
            'contact_info' => 'required|max:11',
        ]);

        EvacuationCenter::whereId($id)->update($updateData);
        return redirect()->route('admin.evacuation-center')->with('update-completed3', 'Evacuation Center has been updated');

    }

    public function DeleteEvacuationCenter($id){

        $ctypes = EvacuationCenter::findOrFail($id);
        $ctypes->delete();
        return redirect()->route('admin.evacuation-center')->with('delete-completed3', 'Center Name has been deleted.');

    }

    public function ViewallAddEvacuees(){


       $bgryInfo = BarangayInformation::all();
       $evaCenter = EvacuationCenter::all();
       $ctype = CalamityType::all();

        return view('admin.add-evacuees', compact('bgryInfo','evaCenter','ctype'));
    }

    public function AddEvacueesInformation(Request $request){

        $request->validate([
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'contacts' => 'required|max:11',
            'age' => 'required|max:2',
            'gender' => 'required|max:255',
            'barangay' => 'required|max:255',
            'address' => 'required|max:255',
            'head_of_family' => 'required|max:255',
            'type_of_calamity' => 'required|max:255',
            'evacuation_center' => 'required|max:255',
          ]);

          EvacueeInformation::create($request->all());

          return redirect()->route('admin.manage-evacuees')->with('mgs_evacueesinfo', 'Evacuees Information created successfully.');

    }

    public function DeleteEvacueeInformation($id){
        $ctypes = EvacueeInformation::findOrFail($id);
        $ctypes->delete();
        return redirect()->route('admin.manage-evacuees')->with('delete-completed4', 'Evacuees Information has been deleted.');

    }

    public function ViewallManageEvacuees(){
        $evaInfo = EvacueeInformation::all();
        return view('admin.manage-evacuees', compact('evaInfo'));
    }

    public function EditEvacueeInformation($id){

        $eInfo = EvacueeInformation::findOrFail($id);
        $evaInfo = EvacueeInformation::all();

        $bgryInfo = BarangayInformation::all();
        $evaCenter = EvacuationCenter::all();
        $ctype = CalamityType::all();

        return view('admin.edit-evacueeinformation', compact('eInfo', 'evaInfo','bgryInfo','evaCenter','ctype'));

    }

    public function UpdateEvacueeInformation(Request $request, $id){

        $updateData = $request->validate([
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'contacts' => 'required|max:11',
            'age' => 'required|max:2',
            'gender' => 'required|max:255',
            'barangay' => 'required|max:255',
            'address' => 'required|max:255',
            'head_of_family' => 'required|max:255',
            'type_of_calamity' => 'required|max:255',
            'evacuation_center' => 'required|max:255',
        ]);

        EvacueeInformation::whereId($id)->update($updateData);
        return redirect()->route('admin.manage-evacuees')->with('update-completed4', 'Evacuee Information has been updated');

    }

    public function ViewallAddUser(){
        return view('admin.add-user');
    }

    public function ViewallLgu(){
        return view('admin.lgu');
    }

    public function AddLgu(Request $request){
        $request->validate([
            'city' => 'required|max:255',
            'contact_info' => 'required|max:11',
            'email_address' => 'required|max:255',
            'website' => 'required|max:255',
            'facebook_page' => 'required|max:255',
          ]);

          Lgu::create($request->all());

          return redirect()->route('admin.lgu')->with('mgs_lgu', 'Lgu created successfully.');

    }

    public function ViewallManageUser(){

        $users = User::all();
        return view('admin.manage-user', compact('users'));
    }

    public function AddUser(Request $request){
      
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'role' => 'required|max:11',
            'password' => 'required|max:255',

          ]);

          User::create($request->all());

          return redirect()->route('admin.manage-user')->with('mgs_user', 'User created successfully.');
        

    }

    public function EditUser($id){

        $getsingleuser = User::findOrFail($id);
        //$users = User::all();

        return view('admin.edit-user',  compact('getsingleuser'));

    }

    public function UpdateUser(Request $request, $id){

        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'role' => 'required|max:11',
            'password' => 'required|max:255',
        ]);

        User::whereId($id)->update($updateData);
        return redirect()->route('admin.manage-user')->with('update-completed5', 'User has been updated');

    }

    public function DeleteUser($id){

        $ctypes = User::findOrFail($id);
        $ctypes->delete();
        return redirect()->route('admin.manage-user')->with('delete-completed5', 'User has been deleted.');

    }

    public function ViewallEvacueesReport(){
        $evaperson = EvacueeInformation::all();
        return view('admin.evacuees-report', compact('evaperson'));
    }

    public function ViewallGenderReport(){

            $gender = EvacueeInformation::selectRaw('
            COUNT(CASE WHEN gender = "Male" THEN "Male" ELSE NULL END) as "male",
            COUNT(CASE WHEN gender = "Female" THEN "Female" ELSE NULL END) as "female",
            COUNT(*) as "all"
        ')->get();


            $rs = DB::table('evacuee_information')
            ->selectRaw("count(case when gender = 'Male' then 1 end) as male")
            ->selectRaw("count(case when gender = 'Female' then 1 end) as female")
            ->first();
            $data = [];       
            $data['data'] = $rs;
            $data['title'] = "Count Gender";

        return view('admin.gender-report', compact('gender'),  ['data'=>$data]);
    }

    public function ViewallBarangayReport(){

        $evinfocountbgry = EvacueeInformation::select('barangay', DB::raw("count(barangay) as Countevacuees"))
        ->groupBy('barangay')
        ->get();
   
        $evacueeBrgy = EvacueeInformation::select(
            DB::raw('barangay as brgyname'))
            ->groupBy('barangay')->get();

        $result[] = ['brgyname'];

        foreach ($evacueeBrgy as $key => $value) {

            $result[++$key] = [$value->brgyname];

            info($result);
        }

        $evacueeBrgy2 = EvacueeInformation::select(
            DB::raw('count(barangay) as brgyCount'))
            ->groupBy('barangay')->get();

        $result2[] = ['brgyCount'];

        foreach ($evacueeBrgy2 as $key => $value2) {

            $result2[++$key] = $value2->brgyCount;

            info($result2);
        }

        return view('admin.barangay-report', compact('evinfocountbgry'))
        ->with('brgyname', json_encode($result))
        ->with('brgyCount', json_encode($result2));
    }

    // public function ViewallAgeReport(){
    //     return view('admin.age-report');
    // }

    public function ViewallCalamityReport(){
        
        $evinfocountcalamity = EvacueeInformation::select('type_of_calamity', DB::raw("count(type_of_calamity) as Countofcalamitytype"))
        ->groupBy('type_of_calamity')
        ->get();

        $calamitytypecount = EvacueeInformation::select(
            DB::raw('type_of_calamity as calamityName'))
            ->groupBy('type_of_calamity')->get();

        $result[] = ['calamityName'];

        foreach ($calamitytypecount as $key => $value) {

            $result[++$key] = $value->calamityName;

            info($result);
        }

        $calamitytypecount2 = EvacueeInformation::select(
            DB::raw('count(type_of_calamity) as calamityCount'))
            ->groupBy('type_of_calamity')->get();

        $result2[] = ['calamityCount'];

        foreach ($calamitytypecount2 as $key => $value2) {

            $result2[++$key] = $value2->calamityCount;

            info($result2);
        }



        return view('admin.calamity-report', compact('evinfocountcalamity'))
        ->with('calamityName', json_encode($result))
        ->with('calamityCount', json_encode($result2));
    }

    public function ViewallCenterReport(){

        $evinfocountevacuationcenter = EvacueeInformation::select('evacuation_center', DB::raw("count(evacuation_center) as Countevacuationcenter"))
        ->groupBy('evacuation_center')
        ->get();


        $evacuationcentername = EvacueeInformation::select(
            DB::raw('evacuation_center as evcenterName'))
            ->groupBy('evacuation_center')->get();

        $result[] = ['evcenterName'];

        foreach ($evacuationcentername as $key => $value) {

            $result[++$key] = $value->evcenterName;

            info($result);
        }

        $evacuationcentercount = EvacueeInformation::select(
            DB::raw('count(evacuation_center) as evacuationcenterCount'))
            ->groupBy('evacuation_center')->get();

        $result2[] = ['evacuationcenterCount'];

        foreach ($evacuationcentercount as $key => $value2) {

            $result2[++$key] = $value2->evacuationcenterCount;

            info($result2);
        }



        return view('admin.center-report', compact('evinfocountevacuationcenter'))
        ->with('evcenterName', json_encode($result))
        ->with('evacuationcenterCount', json_encode($result2));
    }
}
