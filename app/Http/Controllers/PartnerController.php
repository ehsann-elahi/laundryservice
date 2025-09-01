<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function ajaxStore(Request $request)
{

    
    $request->validate([
        'company_name' => 'required|string|max:255',
        'first_name'   => 'required|string|max:255',
        'last_name'    => 'required|string|max:255',
        'email'        => 'required|email|unique:partners,email',
        'phone'        => 'required|string|max:20',
        'location'     => 'required|string|max:255',
        'requirements' => 'nullable|string',
    ]);

    $partner = Partner::create($request->all());

    return response()->json([
        'status'  => true,
        'message' => 'Your request has been submitted successfully!',
        'data'    => $partner
    ]);

    
}

}
