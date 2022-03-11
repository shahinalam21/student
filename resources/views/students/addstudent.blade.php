@extends('layout.header')

@section('title')
    Add student
@endsection

@section('content')
    <div class="container">
        <div class="card my-3">
            <div class="card-body">
                <div class="row student-section">
                    <div class="col-md-4 my-4">
                        <div class="accordion">
                            <div class="accordion bg-danger" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button bg-success text-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Students Form fillup
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse
                                            plugin adds the appropriate classes that we use to style each element. These
                                            classes control the
                                            overall appearance, as well as the showing and hiding via CSS transitions. You
                                            can modify any of
                                            this with custom CSS or overriding our default variables. It's also worth noting
                                            that just about any
                                            HTML can go within the <code>.accordion-body</code>, though the transition does
                                            limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button bg-success text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Student form fillup Information
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each element.
                                            These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can
                                            modify any of this with custom CSS or overriding our default variables. It's
                                            also worth noting that
                                            just about any HTML can go within the <code>.accordion-body</code>, though the
                                            transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button bg-success text-light  collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            School Information
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each element.
                                            These classes
                                            control the overall appearance, as well as the showing and hiding via CSS
                                            transitions. You can
                                            modify any of this with custom CSS or overriding our default variables. It's
                                            also worth noting that
                                            just about any HTML can go within the <code>.accordion-body</code>, though the
                                            transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 my-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="student-from">
                                    <div class="text-center bg-dark text-light">
                                        <h1 class="py-2">Add Student Information</h1>
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
                                        
                                        <form method="POST" action="/students/store">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                                <input type="text" name="Name" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Roll</label>
                                                <input type="text" name="Roll" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1"
                                                    class="form-label">Registration</label>
                                                <input type="text" name="Registration" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Course</label>
                                                <input type="text" name="Course" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Fee</label>
                                                <input type="text" name="Fee" class="form-control"
                                                    id="exampleInputPassword1">
                                            </div>
                                         
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
