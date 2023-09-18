<x-frontend.layouts.partials.main>
    <div class="container">
        <div class="card container">
            <div class="card-body p-50">
                <div class="ms-auto">
                    <form action="" method="post">
                        @csrf
                        <div class="form w-50 m-auto">
                            <div class="formdesign">
                                <h3 style="text-align: center">Sign Up</h3>
                                <div class="col">
                                    <label for="name" class="name">Name</label>
                                    <input type="name" class="form-control" id="name"
                                        placeholder="Enter Your Name">
                                </div>
                                <div class="col">
                                    <label for="email" class="">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder=" Enter email">
                                </div>
                                <div class="col">
                                    <label for="password" class="">password</label>
                                    <input type="text" class="form-control" id="password"
                                        placeholder=" Enter password">
                                </div>
                                <div class="col">
                                    <label for="blood_type">Select Your Blood Type:</label>
                                    <select id="blood_type" name="blood_type" class="form-control">
                                        <option value="O Rh+">O Rh+</option>
                                        <option value="O Rh-">O Rh-</option>
                                        <option value="A Rh+">A Rh+</option>
                                        <option value="A Rh-">A Rh-</option>
                                        <option value="B Rh+">B Rh+</option>
                                        <option value="B Rh-">B Rh-</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="password" class="">Password</label>
                                    <input type="text" class="form-control" id="password"
                                        placeholder=" Enter password">
                                </div>
                                <div class="col">
                                    <label for="confrompassword" class="">Confrom Password</label>
                                    <input type="confrompassword" class="form-control" id="confrompassword"
                                        placeholder=" Enter confrompassword">
                                </div>
                                <div class="col">
                                    <button class="btn btn-secondary" type="button" name="submit" id="submin">
                                        <span style="text-align: center"> Submit </span></button>
                                </div>

                                <div class="col">
                                    <p style="text-align: center">If you are registered, log in <a
                                            href="{{route('login')}}">here.</a></p>
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-frontend.layouts.partials.main>
