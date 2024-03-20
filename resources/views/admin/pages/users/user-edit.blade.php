@extends('admin.layouts.master')

@section('content')

<div class="db-info-wrap">
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-box user-form-wrap">
                <h4>User Edit Details</h4>
                <form class="form-horizontal" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input name="firstname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input name="lastname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" type="email">
                            </div>  
                        </div>
                        <div class="col-sm-6">
                            <label>Date of Birth</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Day</option>
                                            <option value="0">Sunday</option>
                                            <option value="0">Monday</option>
                                            <option value="0">Tuesday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Month</option>
                                            <option value="0">January</option>
                                            <option value="0">February</option>
                                            <option value="0">March</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Years</option>
                                            <option value="0">1990</option>
                                            <option value="0">1992</option>
                                            <option value="0">1993</option>
                                        </select>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country Code</label>
                                <select>
                                    <option value="1">+97701</option>
                                    <option value="0">1990</option>
                                    <option value="0">1992</option>
                                    <option value="0">1993</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input name="phone" id="input-phone" class="form-control" value="" placeholder="" type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <h4>Contact Details</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select>
                                    <option value="0">Italy</option>
                                    <option value="1">Japan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State</label>
                                <select >
                                    <option value="0">New York</option>
                                    <option value="1">Mexico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <select>
                                    <option value="0">Tokyo</option>
                                    <option value="1">Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <h4>Upload Profile Photo</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="upload-input">
                                <div class="form-group">
                                    <span class="upload-btn">Upload a image</span>
                                    <input type="file" name="myfile">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4>Describe Yourself</h4>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Please Tell Us About You</label>
                                <textarea class="form-control" id="message" name="message" placeholder="" required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button-primary">Upload Setting</button>
                </form>
            </div>
        </div>  
    </div>
</div>

@endsection