<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Publication_details;
use App\Models\Message;
use App\Models\Like;

class PublicationController extends Controller
{
    public function showAll(){
        $messages = Message::all()->sortByDesc('created_at');
        $publicationsDetails = Publication_details::all()->sortByDesc('created_at');

        return view('dashboard', 
        ['publicationsDetails' => $publicationsDetails],['messages' => $messages]);
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
        $publicationDetails->image = $request->image;
        $publicationDetails->date = $request->date;
        $publicationDetails->place = $request->place;
        $publicationDetails->category = $request->category;
        $publicationDetails->id_reference_publication = $publication->id;

        $publicationDetails->save();

        return redirect('/homePage');
    }
    public function showOnePublication($id){
        $publicationsDetails = Publication_details::findOrFail($id);
        $likes = Like::all();
        $messages = Message::all()->sortByDesc('created_at');

        return view('dashboard', 
        ['publicationsDetails' => $publicationsDetails],['messages' => $messages, 'likes' => $likes],);
    }
    public function showPublicationToEdit( $id){
        $publicationsDetails = Publication_details::findOrFail($id);

        return view('dashboard', 
        ['publicationsDetails' => $publicationsDetails]);
    }
    public function edit(Request $request, $id){
        $publicationsDetails = Publication_details::findOrFail($id);

        $publicationsDetails->title = $request->title;
        $publicationsDetails->content = $request->content;
        $publicationsDetails->image = $request->image;
        $publicationsDetails->date = $request->date;
        $publicationsDetails->place = $request->place;

        $publicationsDetails->save();

        return redirect('dashboard');
    }
    public function like(Request $request){
        $publicationDetails = new Publication_details();
        $like = new Like();

        $like->Id_Reference_Publication = $request->Id_Reference_Publication;
        $like->id_reference_user = $request->id_reference_user;

        $like->save();

        return redirect('/homePage');
    }
    public function eventDate(Request $request){

        $newDate = $request->month;

        $eventDates = Publication_details::where('date', $newDate)->get();

        return view('datePublication', ['eventDates' => $eventDates]);
    }
}
