



<x-frontend.layouts.partials.main>
    <div class="container">
        <div class="card container">
            <div class="card-body p-50">
                <div class="ms-auto">
                    <form action="" method="post">
                        @csrf
                    <div class="form w-50 m-auto">
                        <div class="formdesign">
                          <h3 style="text-align: center">Log In</h3>
                        <div class="col">
                            <label for="name" class="name">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="col">
                            <label for="password" class="">Password</label>
                            <input type="password" class="form-control" id="password" placeholder=" Enter Password">
                        </div>
                        <div class="col">
                            <button  class="btn btn-secondary" type="button" name="submit" id="submin"> <span style="text-align: center"> Submit </span></button>
                        </div>

                        <div class="col">
                            <p style="text-align: center">If you are not registered, register <a href="{{route('signup')}}">here.</a></p>
                        </div>
                    
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.partials.main>
