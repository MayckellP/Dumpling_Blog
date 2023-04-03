<div class="w-75 mt-5 m-auto">
  <form action="/edit_event/{{$publicationsDetails->id}}" method="post">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="title" placeholder="Title here" name="title" value="{{$publicationsDetails->title}}">
      <label for="title">Title</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="content" placeholder="Content here" name="content" value="{{$publicationsDetails->content}}">
      <label for="content">Content</label>
    </div>
    <div class="form-floating">
      <input type="file" class="form-control" id="image" name="image" value="{{$publicationsDetails->image}}">
      <label for="image">Image</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="date" name="date" value="{{$publicationsDetails->date}}">
      <label for="date">Date</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="place" placeholder="Place here" name="place" value="{{$publicationsDetails->place}}">
      <label for="place">Place</label>
    </div>
    @csrf
    <button type="submit" class="btn btn-info my-3 m-auto w-50">Save Changes</button>                
  </form>
</div>