@extends('layouts.app')

@section('content')

@include('layouts.adminsidebar')
 <main class="py-4">  {{--create spacing --}}
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add request</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- {{Auth::user()->id}} --}}
                        {{-- <button type="button" onclick="window.location='{{route('lecturedashboards')}}'" class="btn btn-primary">Back</button> --}}
                        <br><br>
                        {{-- <form method="post" action="{{ route('LectureProfile.update',$valuetitle->lectureId) }}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT"> --}}

                            <label for="field">Select a field:</label>
                            <select class="form-control" name="field">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select><br/>

                            <label for="project_title" class="form-label">project title:</label>
                            <input type="text" name="project_title" id="project_title" class="form-control" value="{{$valuetitle->lectureName}}"><br/>

                            <label for="project_description" class="form-label">project description:</label>
                            <input type="text" name="project_description" id="project_description" class="form-control" value="{{$valuetitle->lectureName}}"><br/>

                            {{-- <input type="submit" name="submit" value="Update Title" class="btn btn-success">
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection
<link rel="stylesheet" href="/css/sidebar.css">