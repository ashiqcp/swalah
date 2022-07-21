@extends('dashboard/partials/top-bar')

@section('contant')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex">
                            {{-- <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div> --}}
                            <a href="javascript: void(0);" onclick="openAddForm()" id="plus-btn"
                                class="btn btn-primary ms-2">
                                <i class="uil-plus"></i>
                            </a>
                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a>
                        </form>
                    </div>
                    <h4 class="page-title">Students</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Ad No</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="table-user">
                            {{-- <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" /> --}}
                            {{ $student->name }}
                        </td>
                        <td>{{ $student->adno }}</td>
                        <td>{{ $student->class }}</td>
                        <td class="table-action">
                            <a href="javascript:void(0);" onclick="editCall({{$student}})" class="action-icon edit"> <i class="mdi mdi-pencil"></i></a>
                            <a href="{{ route('delete', $student->id) }}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <div id="openAddForm" hidden>
        <span class="helper"></span>
        <div>
            <div class="rightbar-title title">
                <h5 class="m-0">Add Student</h5>
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon" onclick="closeForm()"></i>
                </a>

            </div>

            <div class="student_adding_form">
                <form method="POST" action="{{ route('add student') }}" id="addForm" >
                    @csrf
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-number" class="form-label">Ad No:</label>
                        <input class="form-control" name="adno" id="adno" type="number" name="number">
                    </div>
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Class:</label>
                        <select class="form-select" name="class" id="class">
                            <option value="">Class</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
