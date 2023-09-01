@extends('../layouts.admin')
@section('sub-title','ANNOUNCEMENTS')

@section('sidebar')
    @include('../partials.admin.sidebar')
@endsection

@section('navbar')
    @include('../partials.admin.navbar')
@endsection

@section('content')
<div class="container">
    <h2 class="text-white">Edit Announcement</h2>
    <form method="post" action="{{ route('admin.announcements.update', $announcement->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title" class="text-white">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $announcement->title }}" required>
        </div>
        <div class="form-group">
            <label for="content" class="text-white">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $announcement->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" name="image" class="form-control" id="editImage-{{ $announcement->id }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @section('footer')
        @include('../partials.admin.footer')
    @endsection
</div>
@endsection