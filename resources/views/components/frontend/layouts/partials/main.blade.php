
<!DOCTYPE html>
<html lang="en">
<x-frontend.layouts.partials.head />

<body>
    <div class="container-fluid">
    <x-frontend.layouts.partials.navber />
        
        

        <div class="content-wrapper">
            <div class="content">

                {{ $slot }}

            </div>
        
            <x-frontend.layouts.partials.footer/>
        </div>
    </div>
</body>

</html>







































{{-- <!DOCTYPE html>
<html lang="en">
<x-frontend.layouts.partials.head />

<body>
    <div class="container-fluid">
    <x-frontend.layouts.partials.navber />

    <div class="page-content">
        <x-frontend.layouts.partials.slider />
        
        
        <x-frontend.layouts.partials.bloodgroup />


        <x-frontend.layouts.partials.carouselCard />

        <div class="content-wrapper">
            <div class="content">

                {{ $slot }}

            </div>
            @php
                $webName = 'www.google.com';
            @endphp
            <x-frontend.layouts.partials.footer/>
        </div>
    </div>
</div>
</body>

</html> --}}
