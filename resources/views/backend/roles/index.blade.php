<x-backend.layouts.master>
    <h3 style="text-align: center; color:blue">Donar Data</h3>
    <table class="table table-bordered table-hovered text-center" border="1">
        <button class="btn btn-dark float-right mb-3"><a href="">Add New Role</a></button>
        {{-- <button class="btn btn-dark"><a href="{{ route('roles.create')}}">Add New Role</a></button> --}}
        <thead>
            
           
            <tr>
                <th class="col-1">Ser No</th>
                <th class="col-3" >Name</th>
                <th class="col-3" >Phone</th>
                <th class="col-5" >Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl=1
            @endphp
            @foreach ($data as $datas)
            <tr>
                <td>{{$datas->id }}</td>
                <td>{{$datas->name}}</td>
                <td>{{$datas->donar->phone}}</td>
                <td>
{{-- 
                    @foreach ($data as $datas) 
                    {{__("User ID: " . $datas->id . "<br>")}}
                     {{"User name: " . $datas->name . "<br>"}}
                     {{"User name: " . $datas->donar->phone . "<br>"}} --}}
                     {{-- @endforeach --}}



                    <a class="btn btn-sm btn-success" href="/donar/profile/{{$datas->id }}">Show</a>
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