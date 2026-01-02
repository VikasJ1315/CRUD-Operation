<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="mb-3 col-md-12">

            @session('status')
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endsession

            <div class="card">
                <div class="card-header">
                    <h4>
                        Details of Employee
                        <a href="{{ route('Details.create') }}" class="btn btn-primary float-end"> Add Details </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> name </th>
                                <th> Image </th>
                                <th> E-mail </th>
                                <th> Phone </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                                <tr>
                                    <td>{{ $detail->id }}</td>
                                    <td>{{ $detail->name }}</td>
                                    <th> <img height="80px" width="100px"
                                            src="{{ asset('storage/' . $detail->image) }}" alt="Not Visible"></th>
                                    <td>{{ $detail->email }}</td>
                                    <td>{{ $detail->phone }}</td>
                                    <td>{{ $detail->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ route('Details.edit', $detail->id) }}">Edit</a>
                                        <a class="btn btn-secondary"
                                            href="{{ route('Details.show', $detail->id) }}">Show</a>
                                        <form action="{{ route('Details.destroy', $detail->id) }}" method="POST"
                                            class="display-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> Delete</button>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('project.create') }}" class="btn btn-primary">
                            Insert Project
                        </a>

                        <a href="{{ route('detail.image') }}" class="btn btn-primary">
                            Image Upload
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
