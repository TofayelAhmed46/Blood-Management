<x-backend.layouts.master>
    <table class="table table-bordered table-hovered" border="1">
        <thead>
            <tr>
                <th><h3>Role</h3></th>
            </tr>
            <tr>
                <th colspan="3" style="text-align: right">
                    <button class="btn btn-dark"><a href="{{ route('roles.create')}}">Add New Role</a></button>
                </th>
            </tr>
            <tr>
                <th class="col-4">Ser No</th>
                <th class="col-4" >Role Name</th>
                <th class="col-4" >Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl=1
            @endphp
            @foreach ($role_value as $role)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$role->Roles}}</td>
                <td>
                    <a class="btn btn-sm btn-success" href="">Show</a>
                    <a class="btn btn-sm btn-success" href="">Edit</a>
                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                    {{-- <a href="{{ route('roles.show', $role->id)}}">Show</a>
                    <a href="{{ route('roles.edit', $role->id)}}">Edit</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-backend.layouts.master>