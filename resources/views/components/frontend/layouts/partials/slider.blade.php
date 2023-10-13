<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner caroImg">
        <div class="carousel-item active ">
            <img src="{{ asset('ui/frontend') }}/assets/image/3.jpg" class="carouselImage " alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('ui/frontend') }}/assets/image/2.jpg" class="carouselImage" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('ui/frontend') }}/assets/image/1.jpg" class="carouselImage" alt="...">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
{{-- Search Option go there  --}}
<div class="centered">

    <form action="/bloodsearch" method="post" class="" style="margin: 20px;">
        @CSRF

        <div class="row">
            <div class="col-5">
                <label for="blood_type">Select Your Blood Type:</label>
                <select id="blood_type" name="blood_type" class="form-control" style="">
                    <option value="">---Select Blood Group--</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>

            <div class="col-5">
                <label for="district">Select Area</label>
                <select id="district" name="district" class="form-control" style="">
                    <option value="">---Select Your Area--</option>
                    <option value="rajshahi">rajshahi</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="dinajpur">Dinajpur</option>
                    <option value="khulna">Khulna</option>
                    <option value="borishal">Borishal</option>
                    <option value="noakhali">Noakhali</option>
                    <option value="kumilla">Kumilla</option>
                    <option value="foridpur">Foridpur</option>
                </select>
            </div>
            <input type="submit" class="col-2 btn btn-secondary searchbtn" style="" value="Search">
        </div>
    </form>
</div>
{{-- Search Option go there  --}}
</div>
