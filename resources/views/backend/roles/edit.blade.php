<x-backend.layouts.master>
    {{-- <form action="{{ route('roles.update', $role->id)}}" method="POST">
        @CSRF
        @method('PATCH')
        <label class="col-3" for="role_name">Role Name</label>
        <input type="text" name="role_name" value="{{$role->role_name}}">
        <button type="submit">Save</button>
    </form> --}}

    {{-- <form action="{{ route('roles.update', $role->id)}}"></form> --}}

    @foreach ($data as $datas)
        {{-- @dd($datas->name) --}}
    @endforeach

    <h3 class="text-muted ms-auto top-1">Donar Edit #{{ $datas->name }}</h3>

    <div class="row justify-content-center mt-1">
        <div class="col-sm-8 col-8">
            <div class="card ">
                <form action="/donar/update/{{ $datas->id }}" method="post" class="m-3 ml-5"
                    enctype="multipart/form-data">
                    @CSRF
                    @method('PATCH')
                    <div class="form-group row">
                        <label class="col-2 bold" for="name"> Name</label>
                        <input type="text" name="name" class="form-control col-9"
                            value="{{ old('name', $datas->name) }}">
                        {{-- @if ($error->has('name'))
                        <span class="text-danger">{{ $error->first('name')}}</span>
                      @endif --}}
                    </div>

                    <div class="form-group row">
                        <label class="col-2 bold" for="email"> Email</label>
                        <input type="email" name="email" class="form-control col-9"
                            value="{{ old('email', $datas->email) }}">
                    </div>

                    <div class="form-group row">
                        <label class="col-2"for="phone"> Phone</label>
                        <input type="text" name="phone" class="form-control col-9"
                            value="{{ old('phone', $datas->donar->phone) }}">
                    </div>

                    <div class="form-group row">
                        <label class="col-2 bold" for="district" class="float-left"> District</label>
                        <input type="text" name="district" class="form-control col-9"
                            value="{{ old('district', $datas->donar->district) }}">
                    </div>

                    <div class="form-group row">
                        <label class="col-2 bold" for="thana"> Thana</label>
                        <input type="text" name="thana" class="form-control col-9"
                            value="{{ old('thana', $datas->donar->thana) }}">
                    </div>

                    <div class="form-group row">
                        <label class="col-2 bold" for="religion"> Religion</label>
                        <input type="text" name="religion" class="form-control col-9"
                            value="{{ old('religion', $datas->donar->religion) }}">
                    </div>

                    <div class="form-group row  d-flex">
                        <label class="col-2 bold float-left" for="gender"> Gendar</label>
                        {{-- <input type="textarea" name="gender" class="form-control col-9" value="{{old('gender',$datas->donar->gender)}}"> --}}
                        <div class="col-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="gender" value="male" checked>
                                <label class="form-check-label" for="gender">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="gender" value="female">
                                <label class="form-check-label" for="gender">Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 bold" for="profession"> Profession</label>
                        <input type="textarea" name="profession" class="form-control col-9"
                            value="{{ old('profession', $datas->donar->profession) }}">
                    </div>
                    <div class="form-group row">
                        <label class="col-2 bold" for="dob"> Date of Birth</label>
                        <input type="date" name="date" class="form-control col-9"
                            value="{{ old('dob', $datas->donar->dob) }}">
                    </div>
                    <div class="form-group row">
                        <label class="col-2 bold" for="image"> Image</label>
                        <input type="file" name="image" class=""
                            value="{{ old('image', $datas->donar->image) }}">
                    </div>

                    {{-- <div class="form-group row">
                      <label class="col-3" fo2 bold="image"> Image</label>
                      <input type="file" name="image" class="form-control col-9" >
                  </div> --}}

                    <button class="btn btn-dark mt-3">Submit</button>

           
            </form>
        </div> 
   
    </div>

</x-backend.layouts.master>
