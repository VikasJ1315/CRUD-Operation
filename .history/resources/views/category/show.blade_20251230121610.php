<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Update Details
                        <a href="{{ route('Details.index') }}" class="btn btn-Danger float-end"> Back </a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Details.update', $details->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="Name"> Name </label>
                            <p>
                                {{ $details->name }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <label for="Email"> Email </label>
                            <p>
                            {{ $details->email }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <label for="Phone"> Phone </label>
                            <p>
                                {{ $details->phone }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <label for="Status"> Status </label>
                            <select name="status">
                                <option value="1" {{ $details->status == 1 ? 'Selected' : '' }}> Active </option>
                                <option value="0" {{ $details->status == 0 ? 'selected' : '' }}> Unactive </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Update </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
