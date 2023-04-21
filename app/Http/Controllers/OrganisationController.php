<?php

namespace App\Http\Controllers;

use App\Models\OrganisationModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class OrganisationController extends Controller
{
    public function index()
    {
        $organisations = OrganisationModel::all();
        return view('admin.organisationPage', compact('organisations'));
    }

    public function destroy(OrganisationModel $organisation)
    {
        $organisation->delete();
        return redirect()->back()->with('success', 'Organisation deleted successfully.');
    }

    public function create()
    {
        dd("hello!");
    }
}
