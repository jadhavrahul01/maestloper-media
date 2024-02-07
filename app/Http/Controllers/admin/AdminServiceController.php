<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;

class AdminServiceController extends Controller
{
    protected function index()
    {
        $posts = Post::all();
        $services = Service::all();
        return view('admin.addservice')->with('posts', $posts)->with('services', $services);
    }

    protected function store(Request $request)
    {
        $service = new Service([
            "service" => $request->service,
            "slug" => str_replace(' ', '-', strtolower(
                $request->service
            )),
        ]);
        $service->save();

        return redirect("/admin/addservice");
    }

    protected function editservice($id)
    {
        $services = Service::findOrFail($id);
        return view('admin.editservice')->with('services', $services);
    }

    protected function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $service->update([
            "service" => $request->service,
            "slug" => $request->slug,
        ]);
        return redirect("/admin/addservice");
    }

    protected function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return back();
    }
}
