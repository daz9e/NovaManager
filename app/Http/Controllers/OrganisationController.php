<?php

namespace App\Http\Controllers;

use App\Models\OrganisationModel;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Organisation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\RedirectResponse;
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

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'inn' => 'required|min:10|max:10|unique:'.OrganisationModel::class,
        ]);
        $organisation = new OrganisationModel();
        $organisation->name = $request->name;
        $organisation->inn = $request->inn;
        $organisation->save();

        return redirect(RouteServiceProvider::ORGANISATIONS);
    }
}
