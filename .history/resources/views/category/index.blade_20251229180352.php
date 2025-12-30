<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Details of Employee
                        <a href="{{ route('Details.create') }}" class="btn btn-primary float-end" > Add Details </a>
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
                                    <td> {{ $details->id }}</td>
                                    <td> {{ $details->id }}</td>
                                    <td> {{ $details->email }}</td>
                                    <td> {{ $details->phone }}</td>

                                  </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
