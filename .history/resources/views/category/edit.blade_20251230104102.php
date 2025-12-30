<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Update Details

                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Details.update', $details) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="text" name="name" value="{{ old('name', $details->name) }}">
                        <input type="email" name="email" value="{{ old('email', $details->email) }}">
                        <input type="text" name="phone" value="{{ old('phone', $details->phone) }}">

                        <select name="status">
                            <option value="1" {{ $details->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $details->status == 0 ? 'selected' : '' }}>Unactive</option>
                        </select>

                        <button type="submit">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
