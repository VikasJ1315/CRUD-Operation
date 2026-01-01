<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="mb-3 col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    @if (session('success'))
                        {
                        <p>{{ session('success') }}</p>
                        }
                        <p>{{ session('failed') }}</p>
                    @endif
                    <div class="m-5">
                        <form action="{{ route('project.store') }}" method="POST">
                            @csrf

                            <input type="text" name="title" placeholder="Enter project title">

                            <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
