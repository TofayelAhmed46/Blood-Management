<x-frontend.layouts.partials.main>
<div class="card">
    <div class="card-body">
       

<form action="/bloodsearch" method="post" class=" m-40" style="margin: 50px;" >
    @CSRF
    <div class="col">
        <label for="blood_type">Select Your Blood Type:</label>
        <select id="blood_type" name="blood_type" class="form-control" style="">
            <option value="" >---Select Blood Group--</option>
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

    <div class="col">
        <label for="district">Select Area</label>
        <select id="district" name="district" class="form-control" style="">
            <option value="" >---Select Your Area--</option>
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

    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
</form>

</div>
</div>
</x-frontend.layouts.partials.main>