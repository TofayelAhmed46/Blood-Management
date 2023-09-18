



<!DOCTYPE html>
<html lang="en">
<x-backend.layouts.partisals.head/>

<body>
<x-backend.layouts.partisals.navbar/>
   
<div class="page-content">
        <x-backend.layouts.partisals.sidebar/>

        <div class="content-wrapper">
            <div class="content">

               {{$slot}}

            </div>
            @php
                $webName = "www.google.com";
            @endphp
            <x-backend.layouts.partisals.footer :webName="$webName"/>
        </div>
    </div>
</body>

</html>


<h1>This is from bacend partial</h1>