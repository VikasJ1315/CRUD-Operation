<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div>
        <label>Name</label><br>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Email</label><br>
        <input type="email" name="email" required>
    </div>

    <div>
        <label>Phone</label><br>
        <input type="text" name="phone" placeholder="999-999-9999">
    </div>

    <div>
        <label>Status</label><br>
        <select name="status">
            <option value="1" selected>Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>

    <br>

    <button type="submit">Save</button>
</form>
