<?php

namespace App\Http\Controllers;

use App\Models\OrganisationModel;
use Illuminate\Http\Request;
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

    public function create(Request $request)
    {
        {
            $organisation = new OrganisationModel;
            $organisation->name = $request->input('name');
            $organisation->inn = $request->input('inn');
            $organisation->save();

            return redirect("adminOrganisation");
        }
    }

    public function update(Request $request)
    {
        {
            $organisation = new OrganisationModel;
            $organisation->name = $request->input('name');
            $organisation->inn = $request->input('inn');
            $organisation->save();

            return redirect("adminOrganisation");
        }
    }

    public function manageOrganisation(Request $request)
    {
        dd("sd");
    }
}
