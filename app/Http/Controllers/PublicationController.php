<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Publication_details;
use App\Models\Message;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Str;
use DateTime;

class PublicationController extends Controller{
    public function showAll(){
        session_start();
        $publicationsDetails = Publication_details::all()->sortByDesc('created_at');
        $publications = Publication::all()->sortByDesc('created_at');
        $likes = Like::all();
        $messages = Message::all();


        return view('dashboard', 
        ['publicationsDetails' => $publicationsDetails],
        ['messages' => $messages, 'publications' => $publications, 'likes'=>  $likes]);
    }
    public function create(Request $request){
        $publication = new Publication();
        $publicationDetails = new Publication_details();

        $publication->username = $request->username;
        $publication->Id_Reference_User = $request->Id_Reference_User;

        $publication->save();

        $publicationDetails->id = $publication->id;
        $publicationDetails->title = $request->title;
        $publicationDetails->content = $request->content;
        $publicationDetails->date = $request->date;
        $publicationDetails->hour = $request->hour;
        $publicationDetails->place = $request->place;
        $publicationDetails->category = $request->category;
        $publicationDetails->id_reference_publication = $publication->id;

        if($request->hasFile("image")){
            $subNameImage = date('d-m-Y_h:i');
            $image = $request->file("image");
            $nameImage = Str::slug($publication->username)."_".$subNameImage.".".$image->guessExtension();
            $routeImage = public_path("Publication_Img/post/");
            $image->move($routeImage,$nameImage);
            $publicationDetails->image = $nameImage;
       }
       

        $publicationDetails->save();

        $URLDetails = "details";
        $URL = Str::slug($URLDetails)."/".$publication->id;

        return redirect($URL);
    }
    public function showOnePublication($id){

        session_start();
        $publications = Publication::findOrFail($id);

        $id_reference = $publications->Id_Reference_User;
        $user = User::findOrFail($id_reference);
        $totalUsers = User::all();

        $publicationsDetails = Publication_details::findOrFail($id);
        $likes = Like::all();
        $messages = Message::all()->sortByDesc('created_at');

        return view('dashboard', 
        ['publicationsDetails' => $publicationsDetails],
        ['messages' => $messages, 
        'likes' => $likes, 
        'publications' => $publications, 
        'user'=> $user,
        'totalUsers'=> $totalUsers]);
    }
    public function eventDate(Request $request){

        $newDate = $request->month;
        $publications = Publication::all()->sortByDesc('created_at');

        $eventDates = Publication_details::where('date', $newDate)->get();
    
        return view('datePublication', ['eventDates' => $eventDates, 'publications' => $publications]);
    }
    public function showPublicationToEdit( $id){
        session_start();
        $publications = Publication::findOrFail($id);

        $id_reference = $publications->Id_Reference_User;
        $user = User::findOrFail($id_reference); 

        $messages = Message::all()->sortByDesc('created_at');

        $publicationsDetails = Publication_details::findOrFail($id);

        return view('dashboard', 
        ['publicationsDetails' => $publicationsDetails], ['publications' => $publications, 'user'=> $user, 'messages'=> $messages]);
    }
    public function edit(Request $request, $id){
        $publicationsDetails = Publication_details::findOrFail($id);
        $publication = Publication::findOrFail($id);

        $publicationsDetails->title = $request->title;
        $publicationsDetails->category = $request->category;
        $publicationsDetails->content = $request->content;
        $publicationsDetails->place = $request->place;
        $publicationsDetails->date = $request->date;
        $publicationsDetails->hour = $request->hour;

        if($request->hasFile("image")){
            $subNameImage = date('d-m-Y_h:i');
            $image = $request->file("image");
            $nameImage = Str::slug($publication->username)."_".$subNameImage.".".$image->guessExtension();
            $routeImage = public_path("Publication_Img/post/");
            $image->move($routeImage,$nameImage);
            $publicationsDetails->image = $nameImage;
       }
        

        $publicationsDetails->save();

        return redirect('homePage');
    }
    public function like(Request $request){
        $publicationDetails = new Publication_details();
        $like = new Like();

        $like->Id_Reference_Publication = $request->Id_Reference_Publication;
        $like->id_reference_user = $request->id_reference_user;

        $like->save();

        return redirect('/homePage');
    }
    public function showYourEvents(){
        session_start();

        $publicationsDetails = Publication_details::all()->sortByDesc('created_at');
        $publications = Publication::all()->sortByDesc('created_at');
        $likes = Like::all()->sortByDesc('created_at');
        $messages = Message::all()->sortByDesc('created_at');

        return view('dashboard', 
        ['publicationsDetails' => $publicationsDetails],
        ['messages' => $messages, 'publications' => $publications, 'likes' => $likes]);
    }
    public function filter(Request $request){
        session_start();
        $dateNew = $request->dateFilter;
        $event = $request->url;
        $checkAllMonth = $request->checkMonth;
        $mostPopular = $request->mostPopular;
    
        $publications = Publication::all()->sortByDesc('created_at');
        $publicationsDetails = Publication_details::all()->sortByDesc('created_at');
        $likes = Like::all();
        $messages = Message::all();

        if($checkAllMonth == 1){

            $dateNew = DateTime::createFromFormat('Y-m-d', $dateNew);
            $formatDateNew = $dateNew->format('m');

            if($mostPopular == 1){

                $filtersDate = Publication_details::all()->where('category', $event)->whereMonth(
                    'date', $formatDateNew 
                )->get();

            } else{

                $filtersDate = Publication_details::where('category', $event)->whereMonth(
                    'date', $formatDateNew
                )->get();

            }

        }else{

            if($mostPopular == 1){

                $filtersDate = Publication_details::where([
                    ['date', $dateNew],
                    ['category', $event]
                ])->get();         

            } else {

                $filtersDate = Publication_details::where([
                    ['date', $dateNew],
                    ['category', $event]
                ])->get();

            }
        }

        //session_destroy(); 
        return view('dashboard', 
        ['filtersDate' => $filtersDate],
        ['messages' => $messages, 
        'publications' => $publications, 
        'likes'=>  $likes, 
        'event'=>$event,
        'publicationsDetails'=>$publicationsDetails]);
    }
}
