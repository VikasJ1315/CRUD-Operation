<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @session('status')
            <div class="alert-success"></div>
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
                                    <td>{{ $detail->email }}</td>
                                    <td>{{ $detail->phone }}</td>
                                    <td>{{ $detail->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ route('Details.edit', $detail->id) }}">Edit</a>
                                        <a class="btn btn-secondary"
                                            href="{{ route('Details.show', $detail->id) }}">Show</a>
                                        <a class="btn btn-danger" href=""> Delete </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
