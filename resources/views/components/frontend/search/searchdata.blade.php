


@foreach ($data as $datas )
{{-- @dd($datas) --}}
{{-- {{$datas->name}} --}}
@if ($datas->id===null)
 <h1>   {{'No Data Found'}}</h1>
    
@else
<h1> {{ $datas->name }}</h1>
    
@endif
    
@endforeach