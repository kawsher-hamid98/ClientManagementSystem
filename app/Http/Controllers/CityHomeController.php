<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\city;
use App\installment;
use DateTime;

class CityHomeController extends Controller
{ 

    public function __construct() {
        $this -> middleware('auth');
    }

	public function home() 
	{
    	return view('cityHome');
    }

    public function cityHomeSystem(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customerName' => 'required|min:2|max:50',
            'customerFileNo' => 'required|size:5',
            'customerPhoneNo' => 'required|regex:/(01)/|size:11',
            'customerFatherName' => 'required|min:3|max:50',
            'customerMotherName' => 'required|min:3|max:50',
            'customerCurrentAddress' => 'required|min:4|max:50',
            'customerPermanentAddress' => 'required|min:4|max:50',
            'preferenceType' => 'required'
        ]);

        if ($validator -> fails()) {
            return redirect() -> back() -> withErrors($validator);
        } 
        else {

        	$customerName = $request -> input('customerName');
        	$customerFileNo = $request -> input('customerFileNo');
        	$customerPhoneNo = $request -> input('customerPhoneNo');
        	$additionalPhoneNo = $request -> input('additionalPhoneNo');
        	$customerFatherName = $request -> input('customerFatherName');
        	$customerMotherName = $request -> input('customerMotherName');
        	$customerCurrentAddress = $request -> input('customerCurrentAddress');
        	$customerPermanentAddress = $request -> input('customerPermanentAddress');
            $preferenceType = $request -> input('preferenceType');
            $apartmentType = $request -> input('apartmentType');
            $apartmentSize = $request -> input('apartmentSize');
            $commercialType = $request -> input('commercialType');
            $commercialSize = $request -> input('commercialSize');
            $pricePerSqFt = $request -> input('pricePerSqFt');
            $downPayment = $request -> input('downPayment');
            $totalInstallment = $request -> input('totalInstallment');

            if(empty($apartmentSize)) {
                $totalPrice = ($pricePerSqFt * $commercialSize);
            }
            else {
                $totalPrice = ($pricePerSqFt * $apartmentSize);
            }

            $dueAmount = ($totalPrice - $downPayment);
            $nextPayment = ($dueAmount / $totalInstallment);

        	$customer = new city();
            // $install = new installment();

        	$customer -> customerName = $customerName;
        	$customer -> customerFileNo = $customerFileNo;
        	$customer -> customerPhoneNo = $customerPhoneNo;
        	$customer -> additionalPhoneNo = $additionalPhoneNo;
        	$customer -> customerFatherName = $customerFatherName;
        	$customer -> customerMotherName = $customerMotherName;
        	$customer -> customerCurrentAddress = $customerCurrentAddress;
        	$customer -> customerPermanentAddress = $customerPermanentAddress;
            $customer -> preferenceType = $preferenceType;
            $customer -> apartmentType = $apartmentType;
            $customer -> apartmentSize = $apartmentSize;
            $customer -> commercialType = $commercialType;
            $customer -> commercialSize = $commercialSize;
            $customer -> pricePerSqFt = number_format($pricePerSqFt);
            $customer -> downPayment = number_format($downPayment);
            $customer -> totalPrice = number_format($totalPrice);
            $customer -> totalInstallment = $totalInstallment;
            $customer -> dueAmount = number_format($dueAmount);
            $customer -> nextPayment = number_format($nextPayment);
            $remainingBalance = ($dueAmount - $nextPayment);
            $customer -> remainingBalance = number_format($remainingBalance);

        	$customer -> save();
        	return redirect('/majumder_real') -> with('success', 'Customer data added successfully');
    	}
    }

    public function cityHomeListofCustomer()
    {
    	// $clients = DB::table('cities') -> paginate(5);

        if (request() -> has('preferenceType')) {
            $clients = city::where('preferenceType', request('preferenceType'))
            -> paginate(5)
            -> appends('preferenceType', request('preferenceType'));
        }
        else {
            $clients = city::paginate(5);
        } 

    	return view('cityHomeClientList', ['clients' => $clients]);
    }

    public function searchClients(Request $request)
    {
        $q = $request -> input('q');
        if ($q != "") {
            $user = city::where('customerName', 'LIKE', '%' . $q . '%')
                        -> orWhere('customerFileNo', 'LIKE', '%' . $q . '%')
                        -> orWhere('customerPhoneNo', 'LIKE', '%' . $q . '%')
                        -> get();
            if (count($user) > 0)
                return view ('welcome1') -> withDetails ( $user ) -> withQuery ($q);
        }
        return view ('welcome1')->withMessage ( 'No Details found. Try to search again !' );
    }

    public function getCustomer($id)
    {
        $customers = DB::table('cities') 
                        -> where('id', $id) 
                        -> get();
        $dueAmount = DB::table('cities') 
                        -> select('dueAmount') 
                        -> where('id', $id) 
                        -> first();
        $nextPayment = DB::table('cities') 
                        -> select('nextPayment') 
                        -> where('id', $id) 
                        -> first();
        $remainingBalance = DB::table('cities') 
                                -> select('remainingBalance') 
                                -> where('id', $id) 
                                -> first();
        $idueAmount = DB::table('installments') 
                        -> select('totalAmount') 
                        -> where('userid', $id) 
                        -> first();

        // dd($idueAmount);

        if (empty($idueAmount)) {
            $install = new installment();

            $install -> totalAmount = $dueAmount -> dueAmount;
            $install -> userid = $id;
            $now = new DateTime();
            $install -> installmentDate = $now;
            $install -> tempId = "1";
            $install -> installmentMoney = $nextPayment -> nextPayment;
            $install -> remainingBalance = $remainingBalance -> remainingBalance;
            $install -> save();
        }

        return view('customerDetails', ['customers' => $customers]);
    }

    public function editCustomer($id)
    {
        $customers = DB::table('cities') -> where('id', $id) -> get();
        return view('customerEdit', ['customers' => $customers]);
    }

    public function updateCustomer(Request $request)
    {
        $request -> validate([
            'customerPhoneNo' => 'regex:/(01)/|size:11',
            'additionalPhoneNo' => 'regex:/(01)/|size:11',
            'customerCurrentAddress' => 'min:4|max:50',
        ]);

        $customers = city::find($request -> customerId);
        $customers -> customerPhoneNo = $request -> customerPhoneNo;
        $customers -> additionalPhoneNo = $request -> additionalPhoneNo;
        $customers -> customerCurrentAddress = $request -> customerCurrentAddress;
        $customers -> save();

        return redirect('/cityCustomerData') -> with('success', 'Information updated successfully');
    }

    public function cityInstallment($id)
    {
        $installsId = DB::table('installments') 
                        -> max('id');
        $cinstalls = DB::table('installments') 
                        -> where('userid', $id) 
                        -> paginate(5);
        return view('installments', ['cinstalls' => $cinstalls]);
    }

    public function editInstaller($id)
    {
        $installs = DB::table('installments') 
                        -> where('id', $id) 
                        -> get();
        return view('updateInstallment', ['installs' => $installs]);
    }

    public function updateInstaller(Request $request)
    {
        $installsId = $request -> userhiddenId;
        $maxId = DB::table('installments') 
                    -> where('userid', $installsId)  
                    -> max('id');

        $dueAmount = DB::table('installments') 
                        -> select('totalAmount') 
                        -> where([ ['userid', $installsId], ['id', $maxId] ])
                        -> first();
        $tempId = DB::table('installments') 
                        -> select('tempId') 
                        -> where([ ['userid', $installsId], ['id', $maxId] ])
                        -> first();

        $nextPayment = DB::table('installments') 
                        -> select('installmentMoney') 
                        -> where([ ['userid', $installsId], ['id', $maxId] ]) 
                        -> first();
        $remainingBalance = DB::table('installments') 
                        -> select('remainingBalance') 
                        -> where([ ['userid', $installsId], ['id', $maxId] ]) 
                        -> first();

        $dueAmount1 = str_replace( ',', '', $dueAmount -> totalAmount );
        $nextPayment1 = str_replace( ',', '', $nextPayment -> installmentMoney);
        $remainingBalance1 = str_replace( ',', '', $remainingBalance -> remainingBalance);

        if ($remainingBalance1 >= 0) {

            $install = new installment();
            $install -> userid = $installsId;
            $install -> tempId = $tempId -> tempId + 1;
            // $install -> temp = $temp;
            $totalAmount = number_format($dueAmount1 - $nextPayment1);
            $install -> totalAmount = $totalAmount;
            $now = new DateTime();
            $install -> installmentDate = $now;
            $install -> installmentMoney = number_format($nextPayment1);
            $install -> remainingBalance = number_format(($dueAmount1 - $nextPayment1) - $nextPayment1);
            $install -> save();
            return redirect() -> back() -> with('success', 'Information updated successfully');
        }
        // return \Redirect::route('installments', [$k])->with('message', 'State saved correctly!!!');

        // return redirect() -> back() -> with('success', 'Information updated successfully');
        // return redirect('/cityInstallments/'.$request -> userhiddenId);
        // return redirect('/cityInstallments', $maxId)->with('message', 'State saved correctly!!!');


    }

}

