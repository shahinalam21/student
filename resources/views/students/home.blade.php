@extends('layout.header')
@section('title')
    Home
@endsection

@section('content')
    <section id="student-table">
        <div class="container">
            <div class="row">
                <div class="col m-auto my-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="heading">
                                <h2 class="bg-dark text-light py-2 text-center">Student Information</h2>
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <table class="table table-success table-striped table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Roll</th>
                                        <th scope="col">Registration</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Fee</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($students as $student)
                                        <tr>
                                            <td class="align-middle text-center">{{ $i++ }}</td>
                                            <td class="align-middle text-center">{{ $student->Name }}</td>
                                            <td class="align-middle text-center">{{ $student->Roll }}</td>
                                            <td class="align-middle text-center">{{ $student->Registration }}</td>
                                            <td class="align-middle text-center">{{ $student->Course }}</td>
                                            <td class="align-middle text-center">{{ $student->Fee }}</td>
                                            <td class="align-middle text-center">
                                                <a class="btn btn-small btn-primary"
                                                    href="/students/show/{{ $student->id }}"><i
                                                        class="fa fa-photo text-dark"></i></a>
                                                <a class="btn btn-small btn-info"
                                                    href="/students/edit/{{ $student->id }}"><i
                                                        class="fa fa-edit text-dark"></i></a>

                                                <a class="btn btn-small btn-danger"
                                                    href="{{ url('/students/destroy/' . $student->id) }}"><i
                                                        class="fa fa-trash text-dark"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="align-middle"> {{ $students->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
