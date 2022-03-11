@extends('layout.header')
@section('title')
    Edit student
@endsection

@section('content')
    <div class="container">
        <div class="col-md-8 m-auto my-4">
            <div class="card">
                <div class="card-body">
                    <div class="student-from">
                        <div class="text-center bg-dark text-light">
                            <h1 class="py-2">Edit Student Information</h1>
                        </div>
                        <div class="row">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <form method="POST" action="/students/update/{{$student->id}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Name</label>
                                    <input type="text" name="Name" value="{{$student->Name}}" class="form-control"
                                        id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Roll</label>
                                    <input type="text" name="Roll" value="{{$student->Roll}}" class="form-control"
                                        id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1"
                                        class="form-label">Registration</label>
                                    <input type="text" name="Registration"  value="{{$student->Registration}}" class="form-control"
                                        id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Course</label>
                                    <input type="text" name="Course"   value="{{$student->Course}}" class="form-control"
                                        id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Fee</label>
                                    <input type="text" name="Fee" value="{{$student->Fee}}" class="form-control"
                                        id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
