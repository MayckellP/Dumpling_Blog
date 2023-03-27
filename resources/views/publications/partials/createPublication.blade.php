<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>
    
    <div class="w-75 mt-5 m-auto">
      <form action="/create_event" method="post">
        <div class="form-floating mb-3">
          <!-- Value hidden -->
          <input type="text" class="form-control d-none" id="username" name="username" value="{{Auth::user()->name}}">
          <input type="text" class="form-control d-none" id="Id_Reference_User" name="Id_Reference_User" value="{{Auth::user()->id}}">
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="title" placeholder="Title here" name="title">
          <label for="title">Title</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="content" placeholder="Content here" name="content">
          <label for="content">Content</label>
        </div>
        <div class="form-floating">
          <input type="file" class="form-control" id="image" name="image">
          <label for="image">Image</label>
        </div>
        <div class="form-floating">
          <input type="date" class="form-control" id="date" name="date">
          <label for="date">Date</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="place" placeholder="Place here" name="place">
          <label for="place">Place</label>
        </div>
        <select class="form-select" aria-label="Default select example" name="category">
          <option value="General_Events">General Event</option>
          <option value="Food_Events">Restaurant Event</option>
          <option value="Pub_Events">Pub Event</option>
          <option value="Smalls_Events">Smalls Event</option>
          <option selected disabled>Category</option>
        </select>
        @csrf
        <button type="submit" class="btn btn-info my-3 m-auto w-50">Create Event</button>                
      </form>
    </div>
</x-app-layout>

