<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="mb-3 column-md-3 ">
            <div class="card">
                <div class="card-header">
                    <h2> Fill the Form </h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Name : </label>
                            <input type="text" name="name" ckass="form-control" placeholder="Enter Your Name">
                        </div>

                        <div class="mb-3">
                            <label>image : </label>
                            <input type="file" class="form-control" accept="image/*" name="image">
                        </div>

                        <div class="mb-3">
                            <label>email : </label>
                            <input type="mail" name="email" class="form-control" placeholder="Enter Your email">
                        </div>

                        <div class="mb-3">
                            <label>phone : </label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Your phone">
                        </div>

                        <button type="submit" class="btn btn-primary"> Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-3 column-md-3">
            <div class="card">
                <div class="card-header">
                    <div class="mb-3">
                        Records from the Database
                    </div>
                </div>
                <div class="card-body">
                    <div class="inline mb-3 col-md-3">
                        @foreach ($details as $detail)
                            <img src="{{ asset('storage/' . $detail->image) }}" height="200px" width="200px">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
