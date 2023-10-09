@extends('admin.layouts.app2')
@section('panel')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          {{-- <h5 class="card-title fw-semibold mb-4">Company Detail</h5> --}}
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{route('admin.company.create')}}">
                @csrf
                  <div class="col-md-12">
                    <fieldset>
                      <legend>Basic Information</legend>
                    <div class="row">
                <div class="mb-3 col-md-4">
                  <label for="exampleInputEmail1" class="form-label">Comapny Full Name<span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='company_name' required placeholder='Company Name'>
                  <div id="emailHelp" class="form-text" ></div>
                </div>
                <div class="mb-3 col-md-4">
                  <label for="exampleInputPassword1" class="form-label">Owner Name<span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name='owner_name' placeholder='Owner Name' required>
                </div>
                <div class="mb-3 col-md-4">
                  <label for="exampleInputPassword1" class="form-label">Reg. Number<span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name='reg_number'  placeholder='Registration Number' required>
                </div>  
              </div>
            </fieldset>
            <fieldset>
            <legend>Contact Information</legend>
        <div class="row">
        <div class="mb-3 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Contact Mobile</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='contact_mobile' required placeholder='Contact Mobile Number'>
          <div id="emailHelp" class="form-text" ></div>
        </div>
        <div class="mb-3 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Owner Mobile</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name='owner_mobile' required placeholder='Owner Mobile Number'>
        </div>
        <div class="mb-3 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Company Eamil</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name='company_email' required placeholder='Company Email'>
        </div>  
      </div>
      <div class="row">
        <div class="mb-3 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Country</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='country_name'>
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3 col-md-4">
          <label for="exampleInputPassword1" class="form-label">State</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name='state_name'>
        </div>
        <div class="mb-3 col-md-4">
          <label for="exampleInputPassword1" class="form-label">City</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name='city_name'>
        </div> 
      </div>
      <div class="mb-3 col-md-12">
        <label for="exampleInputPassword1" class="form-label">Full Address</label>
        <textarea  name='company_address' class='form-control' rows='4' column='12'></textarea>
      </div>  
    </fieldset>
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection