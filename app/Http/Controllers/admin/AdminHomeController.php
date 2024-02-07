<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Post;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminHomeController extends Controller
{
    protected function index()
    {
        $posts = Post::all();
        $services = Service::all();
        $forms = Form::latest()->take(5)->get();
        $messages = Form::all();
        $mytime = Carbon::now()->format('Y-m-d');
        return view('admin.dashboard', compact('posts', 'services', 'forms', 'messages', 'mytime'));
    }

    protected function profile()
    {
        return view('admin.profile');
    }

    protected function allposts()
    {
        $posts = Post::all();
        return view('admin.allposts')->with('posts', $posts);
    }

    protected function featuredposts()
    {
        $posts = Post::latest()->take(10)->get();
        return view('admin.featuredpost')->with('posts', $posts);
    }

    protected function form()
    {
        $forms = Form::latest()->paginate(10);
        return view('admin.form')->with('forms', $forms);
    }

    protected function message($id)
    {
        $forms = Form::findOrFail($id);
        return view('admin.formmessage')->with('forms', $forms);
    }

    protected function addpost()
    {
        $posts = Post::all();
        $services = Service::all();
        return view('admin.addpost')->with('posts', $posts)->with('services', $services);
    }

    protected function editpost($id)
    {
        $posts = Post::findOrFail($id);
        $services = Service::all();
        return view('admin.editpost')->with('posts', $posts)->with('services', $services);
    }

    protected function store(Request $request)
    {
        if ($request->hasFile("media")) {
            $file = $request->file("media");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("posts/"), $imageName);

            $post = new Post([
                "title" => $request->title,
                "author" => $request->author,
                "media" => $imageName,
                "service_id" => $request->service,
                "link" => $request->link,
            ]);
            $post->save();
        }
        return redirect("/admin/all-posts");
    }

    protected function update_profile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->hasFile("profile_img")) {
            if ($user->profile_img != '12.jpg') {
                if (file::exists("profile/" . $user->profile_img)) {
                    File::delete("profile/" . $user->profile_img);
                }
            }

            $file = $request->file("profile_img");
            $user->profile_img = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/profile"), $user->profile_img);
            $request['profile_img'] = $user->profile_img;
        }

        $user->update([
            "profile_img" => $user->profile_img,
            "name" => $user->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return redirect("/admin/profile")->with('success', 'Profile updated successfully');
    }

    protected function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if ($request->hasFile("media")) {
            if (file::exists("posts/" . $post->media)) {
                File::delete("posts/" . $post->media);
            }
            $file = $request->file("media");
            $post->media = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/posts"), $post->media);
            $request['media'] = $post->media;
        }

        $post->update([
            "title" => $request->title,
            "author" => $request->author,
            "media" => $post->media,
            "service_id" => $request->service,
            "link" => $request->link,
        ]);
        return redirect("/admin/all-posts");
    }

    protected function destroy($id)
    {
        $posts = Post::findOrFail($id);

        if (File::exists("media/" . $posts->media)) {
            File::delete("media/" . $posts->media);
        }
        $posts->delete();
        return back();
    }

    protected function d_form($id)
    {
        $forms = Form::findOrFail($id);
        $forms->delete();
        return back()->with('success', 'Deleted successfully');
    }

    protected function all_d_form()
    {
        $forms = Form::truncate();
        return back()->with('success', 'All messages deleted successfully');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
