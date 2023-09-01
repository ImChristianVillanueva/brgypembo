@extends('../layouts.admin')
@section('sub-title','ANNOUNCEMENTS')

@section('sidebar')
    @include('../partials.admin.sidebar')
@endsection

@section('navbar')
    @include('../partials.admin.navbar')
@endsection

@section('content')
<div class="container-fluid py-4">
  <div class="row mt-4">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-md-10">
                    <h6>MANAGE ANNOUNCEMENTS</h6>
                </div>
                @can('admin_access')
                  <div class="col-md-2">
                    <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary">Add Announcement</a>
                  </div>
                @endcan
                </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" style="width: 100%;">
                <thead>
                  <tr>
                  <th class="text-secondary opacity-7"></th>
                  <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Title</th>
                        <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Description</th>
                        <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Image Uploaded</th>
                        <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Date_Posted</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($announcements as $announcement)
                    <tr>
                        <td>
                            <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?');">Delete</button>
                            </form>
                        </td>
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->description }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $announcement->image) }}" class="card-img-top w-50 h-50" alt="{{ $announcement->title }}">
                        </td>
                        <td>{{ $announcement->created_at->format('F j, Y') }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
      @section('footer')
          @include('../partials.admin.footer')
      @endsection
  </div>
@endsection
