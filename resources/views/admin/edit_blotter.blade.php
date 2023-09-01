@extends('../layouts.admin')
@section('sub-title','BLOTTER')

@section('sidebar')
    @include('../partials.admin.sidebar')
@endsection

@section('navbar')
    @include('../partials.admin.navbar')
@endsection

@section('content')
<div class="container">
    <h2 class="text-white mb-5">Edit Blotter</h2>
    <form method="post" action="{{ route('admin.blotter.update', $blotter->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="complainant" class="text-white">Complainant:</label>
            <input type="text" class="form-control" id="complainant" name="complainant"  value="{{ $blotter->complainant }}" value= required>
        </div>
        <div class="form-group">
            <label for="respondent" class="text-white">Respondent:</label>
            <input class="form-control" id="respondent" name="respondent" value="{{ $blotter->respondent }}" type="text" required>
        </div>
        <div class="mb-3">
            <label for="victim" class="form-label text-white">Victim:</label>
            <input type="text" name="victim" class="form-control" id="victim" value="{{ $blotter->victim }}" required>
        </div>
        <div class="form-group">
            <label for="type" class="text-white">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $blotter->type }}" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" name="location" class="form-control" id="location" value="{{ $blotter->location }}" required>
        </div>
        <div class="form-group">
            <label for="date" >Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $blotter->date }}" required>
        </div>
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" name="time" value="{{ $blotter->time }}" required>
        </div>
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea class="form-control" id="details" name="details" rows="5" required>{{ $blotter->details }}</textarea>
        </div>
        <div class="form-group">
        <label for="status">Choose Status:</label>
            <select id="status" name="status" value="{{ $blotter->status }}">
                <option value="active">Active</option>
                <option value="settled">Settled</option>
                <option value="scheduled">Scheduled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @section('footer')
        @include('../partials.admin.footer')
    @endsection
</div>
@endsection