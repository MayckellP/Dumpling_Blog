<?php
/**created a controller for created event */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationDetail;
use App\Models\Publication;

class PublicationDetailsController extends Controller
{
    public function addComment(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'comment' => 'required',
        ]);
    
        $publicationDetail = new PublicationDetail();
        $publication = new Publication();

        $publication->username = $request->username;
        $publication->Id_Reference_User = $request->Id_Reference_User;

        $publication->save();

        $publicationDetail->title = $request->title;
        $publicationDetail->content = $request->comment;

       
        $publicationDetail->save();
    
        /* return redirect()->back()->with('success', 'Comment added successfully'); */
        return view('dashboard');
    }
}