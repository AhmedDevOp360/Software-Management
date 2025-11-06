<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        $company = $user->company;
        $companies = Company::all();

        return view('welcome', [
            'currentCompany' => $company,
            'companies' => $companies,
        ]);
    }

    /**
     * Get all companies for AJAX request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCompanies()
    {
        $companies = Company::select('id', 'name', 'phone')->get();

        return response()->json([
            'companies' => $companies
        ]);
    }
}
