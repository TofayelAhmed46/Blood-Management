<x-backend.layouts.master>
    <form action="{{ route('roles.store')}}" method="POST">
        @CSRF

        <div class="card m-30 ">
            <div class="card-body col-4 m-auto bg-dark ">
                <div class="py-50">
                    <label for="role_name">Role Name</label>
                    <input type="text" name="role_name" >
                <button type="submit">Save</button>
            </div>
        </div>
    </div>
    </form>
</x-backend.layouts.master>