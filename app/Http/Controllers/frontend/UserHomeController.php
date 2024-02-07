<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(10)->get();
        $services = Service::all();
        return view('frontend.home', compact('posts', 'services'));
    }

    protected function about()
    {
        return view('frontend.about');
    }

    protected function services()
    {
        return view('frontend.services');
    }

    protected function portfolio()
    {
        $posts = Post::latest()->get();
        $services = Service::all();
        return view('frontend.portfolio', compact('posts', 'services'));
    }

    protected function contact()
    {
        $services = Service::all();
        return view('frontend.contact', compact('services'));
    }

    protected function submit(Request $request)
    {
        $form = new Form([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "links" => $request->link,
            "service_id" => $request->select_req,
            "message" => $request->message,
        ]);
        $form->save();

        return back()->with('success', 'Form submitted successfully');
    }

    protected function privacy()
    {
        return view('frontend.privacy');
    }

    protected function terms()
    {
        return view('frontend.terms');
    }
}
