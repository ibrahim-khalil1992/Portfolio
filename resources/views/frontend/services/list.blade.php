@extends('layouts.admin-layout')

@section('content')
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">List Page</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{route('deshboard')}}">DeshBoard</a></li>
                        <li class="breadcrumb-item active">List Page</li>
                    </ol>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (count($services) > 0)
                            @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{$service->id}}</th>
                                    <td>{{$service->icon}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->description}}</td>    
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/admin.js')}}"></script>
    </body>
    </html>
@endsection