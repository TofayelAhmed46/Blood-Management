<x-backend.layouts.master>
    <div class="container">

        {{-- Role Name: {{ $role->role_name }} --}}
        {{-- <button><a href="{{ route('roles.index') }}">Back</a></button> --}}
        <div class="row">
            <div class="col-4">

                <img src="{{ asset('ui/frontend') }}/assets/image/donar/donar1.jpg" alt="" width="200px"
                    height="200px">
                <br>
                @foreach ($data as $datas)
                    {{ $datas->name }} <br>
                    Profession:
                    {{ $datas->donar->profession }}
                    <br>
                @endforeach
                {{-- <p> {{$data->profession}} </p> --}}
                {{-- {{$datas->name}}<p>Designation: Mail Process Operator<br> --}}
                Organization: The Fox and Hound
                </p>
            </div>
            <div class="col-8">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th>Details </th>
                        </tr>
                    </thead>
                    <hr>
                    <tbody>
                        <tr>

                            <td>Email:</td>
                            <td>{{ $datas->email }} </td>
                        </tr>
                        <tr>

                            <td>Phone: </td>
                            <td>{{ $datas->donar->phone }} </td>

                        </tr>
                        <tr>

                            <td>Address:</td>
                            <td>{{ $datas->donar->thana }},
                                {{ $datas->donar->district }}
                            </td>
                        </tr>
                        <tr>

                            <td>Country: </td>
                            <td>Bangladesh
                            </td>
                        </tr>


                        <th>
                        <th><b>Description</b> <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam amet maxime similique esse
                             repellendus a perferendis, minima, architecto excepturi obcaecati dolores aliquid
                            inventore unde corporis fugit corrupti animi, quo tempora.

                            Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo
                            possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro,
                            fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae
                            principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.

                            Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper,
                            definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.

                            Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi
                            no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo
                            viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.
                        </th>
                        </th>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</x-backend.layouts.master>
