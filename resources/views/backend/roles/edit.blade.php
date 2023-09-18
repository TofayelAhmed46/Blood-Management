<x-backend.layouts.master>
    <form action="{{ route('roles.update', $role->id)}}" method="POST">
        @CSRF
        @method('PATCH')
        <label for="role_name">Role Name</label>
        <input type="text" name="role_name" value="{{$role->role_name}}">
        <button type="submit">Save</button>
    </form>
</x-backend.layouts.master>