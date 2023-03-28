<?php
/**created a controller for created event */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationDetail;

class PublicationDetailsController extends Controller
{
    public function addComment(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'comment' => 'required',
        ]);
    
        $publicationDetail = new PublicationDetail();
        $publicationDetail->title = $request->title;
        $publicationDetail->content = $request->comment;
        $publicationDetail->save();
    
        return redirect()->back()->with('success', 'Comment added successfully');
    }
}