<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Comment;
use App\News;
use App\Rate;
use App\Report;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function index(){
        if(Auth::check())
            return view('backend.index');
        return redirect('login');
    }
    public function address(){
        return view('backend.address');
    }
    public function users(){
        $users = User::all();
        return view('backend.users', compact('users'));
    }
    public function comments(){
        $comments = Comment::all();
        return view('backend.comments', compact('comments'));
    }
    public function news(){
        $news = News::all();
        return view('backend.news', compact('news'));
    }
    public function loginView(){
        if(Auth::check())
            return redirect('/');
        return view('backend.login');
    }
    public function request(){
        $requests = Application::all();
        return view('backend.request', compact('requests'));
    }
    public function report(){
        $reports = Report::all();
        return view('backend.report', compact('reports'));
    }
    public function reportAddView(){
        return view('backend.reportAdd');
    }
    public function newsAddView(){
        return view('backend.newsAdd');
    }
    public function userAddView(){
        return view('backend.userAdd');
    }
    public function editUserView(User $user){
        return view('backend.userEdit', compact('user'));
    }
    public function editNewsView(News $news){
        return view('backend.newsEdit', compact('news'));
    }
    public function rateView(){
        return view('backend.rateAdd');
    }
    public function rate(Request $request){
        $rates = new Rate();
        $rates->usd_get  = $request->usd_get;
        $rates->eur_get  = $request->eur_get;
        $rates->rur_get  = $request->rur_get;
        $rates->kgs_get  = $request->kgs_get;
        $rates->gbp_get  = $request->gbp_get;
        $rates->cny_get  = $request->cny_get;
        $rates->usd_pass  = $request->usd_pass;
        $rates->eur_pass  = $request->eur_pass;
        $rates->rur_pass  = $request->rur_pass;
        $rates->kgs_pass  = $request->kgs_pass;
        $rates->gbp_pass  = $request->gbp_pass;
        $rates->cny_pass  = $request->cny_pass;
        $rates->save();
        die;
        return redirect('/');
    }
    public function newsAdd(Request $request){
        DB::beginTransaction();
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->area3;
        $news->name = $request->name;
        $news->surname = $request->surname;
        $news->author = Auth::id();
        try{
            $file = $request->file;
            $filename = "post_images/".md5(time()).".".$file->getClientOriginalExtension();
            $fileContent = file_get_contents($file->getRealPath());;
            Storage::disk('public')->put($filename, $fileContent);
            $news->image = "/$filename";
            $news->save();
            DB::commit();
        }catch (\Exception $ex){
            DB::rollBack();
        }
        return redirect('/');

    }
    public function reportAdd(Request $request){
        DB::beginTransaction();
        $report = new Report();
        $report->user_id = Auth::id();
        try{
            $file = $request->file;
            $filename = "reports/".md5(time()).".".$file->getClientOriginalExtension();
            $fileContent = file_get_contents($file->getRealPath());;
            Storage::disk('public')->put($filename, $fileContent);
            $report->file_url = "/".$filename;
            $report->save();
            DB::commit();
        }catch (\Exception $ex){
            DB::rollBack();
        }
        return redirect('/');
    }
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        $user = User::where('email', $username)->first();
        if($user === null){
            return response()->json([
                'success' => false,
                'error' => 'User not found'
            ]);
        }
        if(Hash::check($password, $user->password)){
            Auth::login($user);
            return response()->json([
                'success' => true,
            ]);
        }else{
            return response()->json([
                'success' => false,
                'error' => 'Password'
            ]);
        }
    }

    public function userAdd(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('/');
    }

    public function editUserById(User $user, Request $request){
        if($request->email  !== "" && $request->email !== null){
            $user->email = $request->email;
        }

        if($request->password !== "" && $request->password !== null ){
            $user->password = Hash::make($request->password);
        }

        $user->role = $request->role;

        $user->update();
        return redirect('/');

    }

    public function editNewsById(News $news, Request $request){
        DB::beginTransaction();
        $news->title = $request->title;
        $news->content = $request->area3;
        $news->name = $request->name;
        $news->surname = $request->surname;
        $news->author = Auth::id();
        try{
            if($request->file !== null){
                $file = $request->file;
                $filename = "post_images/".md5(time()).".".$file->getClientOriginalExtension();
                $fileContent = file_get_contents($file->getRealPath());;
                Storage::disk('public')->put($filename, $fileContent);
                $news->image = "/$filename";
            }
            $news->save();
            DB::commit();
        }catch (\Exception $ex){
            DB::rollBack();
        }
        return redirect('/');

    }


    public function deleteUserById(User $user){
        $user->delete();
        return redirect('/');
    }
    public function deleteNewsById(News $news){
        $news->delete();
        return redirect('/');
    }
    public function deleteCommentById(Comment $comment){
        $comment->delete();
        return redirect('/');
    }


}
