<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action=" {{ route('Details.store') }} "  method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Name"> Name </label>
                            <input type="Text" name="name" class="form-control">
                            @error('name') <span class="text-danger"> {{ $message }} @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="Email"> Email </label>
                            <input type="mail" name="email" class="form-control">
                            @error('email') <span class="text-danger"> {{ $message }} @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="Phone"> Phone </label>
                            <input type="Text" name="phone" class="form-control">
                            @error('phone')<span class="text-danger"> {{ $message }} @enderror </span>
                        </div>

                        <div class="mb-3">
                            <label for="Status"> Status </label>
                            <input type="checkbox" name="status" value="1"> Checked:Visible , Unchecked:Hidden
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
