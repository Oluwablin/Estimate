@extends('layouts.app')
<!-- Select Project -->

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
   * {
        margin-right: 0px;
        margin-left: 0px;
        font-family: Ubuntu;
    }
            
    body {
        margin-top: 0px;
    }

    ul {
        display: inline-block;
        float: none;   
        width: fit-content;
        padding-inline-start: 10px;
        margin-top: 24px;
        
    }

    li {
        
        display: inline;
    }
    .h1, h1 {
        font-size: 2.4rem !important;
        margin-top: 4% !important;
        color: #262626;
    }
    .text-center h1 {
        text-align: left !important;
        margin-left: 17.2%;
    }
    button {
        width: 120px;
        background: #ffffff;
        border: none;
        height: 100%;
    }
    .disabled {
        cursor: not-allowed !important;
    }
    div>#ext {
        background: rgba(207, 204, 204, 0.4);
        font-size: 24px;
        font-weight: bold;
        justify-content: center;
        border: none;
        color: white;
        width: 100%;
        height: 50px;
        outline: none;
        /*added outline none*/
    }
    
    /*changed this from clear to close*/
    div>.close {
        outline: none;
    }
    .close {
       background-color: rgb(201, 200, 200);
        width: 100%;
    }
    /*end of nav bar*/
    
    /* changes */
    body {
       font-family: 'Roboto', sans-serif;
       overflow: auto;
   }

    h1 {
        margin-top: 5%;
        margin-left: 18%;
        color: #262626;
    }

    h5 {
        font-weight: bold;
        color: #262626;
    }

    p {
        padding-bottom: 40px;
    }

    .box {
        margin-top: 5%;

    }

    /* .card-body:hover {
        border: 2px solid #0ABAB5;
        box-sizing: border-box;
    } */

    .btn-on {
        width: 100%;
        background: gray;
        border: 1px solid rgba(145, 145, 145, 0.4);
        box-sizing: border-box;

        text-align: left;
        color: #091429;
        height: 50px;
    }

    .btn-on:hover {
        color: #E4E4E4;
        background: #0ABAB5 !important;
    }

    .dark {
        margin-top: 40px;
        margin-left: 40%;
        width: 20%;
        height: 60px;
        border: 1px solid gray;
        background: #0ABAB5 !important;
        color: white;

    }
    .container-fluid {
        width: 100%;
         padding-right: 15px; 
         padding-left: 15px; 
        margin-right: auto;
        margin-left: auto;
    }

    .dark:hover {

        background: #0ABAB5!important;
        color: white;
    }

    #name {
        padding: 10px;
        width: 100%;
        height: 50px;
        font-size: 20px;
        border: 1px solid rgba(145, 145, 145, 0.4);
    }

    #container {
        display: grid;
        grid-template-columns: 1fr 5fr 1fr;

    }

    #container div {
        border: 1px solid rgb(177, 173, 173);
        height: 50px;
    }

    #container p {
        justify-content: center;
        margin-top: 15px;
        font-style: normal;
        font-weight: bold;


        color: #323A43;
    }
    .disabled {
        cursor: not-allowed;
    }
    #cnc {
        cursor: pointer;
    }

    .dropbtn, .project {
        /* margin-top: 37px; */
        width: 100%;
        height: 50px;
        padding: 10px;
        border: 1px solid rgba(145, 145, 145, 0.4);
        /* box-sizing: border-box; */
    }
    option, select {
        font-size: 20px;
        background: rgba(207, 204, 204, 0.4);
    }

    a{
        text-decoration: none;
    }



    body {
        box-sizing: border-box;
        margin: 0px;
        font-family: ubuntu !important;
    }

    .con-div {
        background-color: #FFFFFF;
        width: 100%;
        margin: auto;
    }

    .top-divs {
        display: flex;
        margin: 0 auto;
        width: 100%;
        background-color: #FFFFFF;
        font-family: Roboto;
    }

    .ctrl-div {
        width: 8%;
        text-align: center;
        border: 1px solid #919191;
    }

    .ctrl-btn {
        width: 100%;
        background-color: #FFFFFF;
        border: none;
    }

    .inv-div {
        width: 60%;
        text-align: center;
        border: 1px solid #919191;
    }

    #inv-btn {
        width: 100%;
        border: none;
        padding: 0.5em;
        font-weight: 500;
        font-size: 28px;
        background-color: #FFFFFF;
    }

    .send-div {
        width: 32%;
        text-align: center;
        border: 1px solid #919191;
    }

    #send-btn {
        width: 100%;
        border: none;
        padding: 0.5em;
        color: #FFF;
        font-size: 28px;
        background-color:  rgba(196, 196, 196, 0.4);
    }

    .cli-info {
        width:75%;
        height:80vh;
        background-color:#FFFFFF;
        margin: auto
    }

    .cli-box {
        display: flex;
        justify-content:space-around;
    }

    .sub-box {
        width: 30%;
        padding: 2em 1em;
        margin: 2em;
        background-color:#FFF;
        text-align:center;
        border: 1px solid #919191;
        border-radius: 2px
    }

    .sub-box:hover {
        border: 3px solid gray;
    }

    .select-project {
        width: 90%;
        padding: 1em;
        border: 1px solid #919191;
    }

    .cli-text {
        padding-top: 1.5em;
    }

    .my-icon {
        width: 100%;
        margin: 0.6em 0;
        color: #c4c4c4;
        background-color: #FFFFFF;
    }

    .what-cli {
        padding: 1.5em 1em !important;
        margin: 0;
        font-size: 42px !important;
        font-weight: bold !important;
        color: #323232;
    }

    .txt {
        margin: 2em 0;
    }
    .column-1 {
        width: 5%;
        border-right: 2px solid rgb(223, 223, 223);
        padding: 1em;
        text-align: center;
        color: black;
        text-decoration: none;
    }
    .column-2 {
        width: 75%;
        text-align: center;
        align-items: center;
        padding: 0.4em;
        color: black;
        text-decoration: none;
        font-size: 1.5em;
        font-weight: bold;
    }
    .column-3 {
        width: 15%;
       
        border-left: 2px solid rgb(223, 223, 223);
        padding: 0.8em;
        text-align: center;
        background-color: rgba(196, 196, 196, 0.4);
        color: white;
        text-decoration: none;
        font-size: 1.5em;
        font-weight: bold;
    }
    .column-3 a:hover{
        text-decoration: none;
    }
    .card-title{
        text-align: center ;
    }
    .fa{
        color: #919191;
    }

    @media  screen and (max-width: 500px) {
        .cli-box {
            display: block;
        }

        .sub-box {
            width: 90%;
            margin: 2em 0em;
        }

        option {
            width: 80%;
        }

        .what-cli {
            font-size: 1.3em;
        }
    }
    @media (max-width: 575.98px) {
        .column-1 {
            width: 15%;
            padding: 0;
        }
        .column-2 {
            width: 75%;
            padding-top: 0.6em;
            font-size: 0.9em;
        }
        .column-3 {
            width: 25%;
            padding-top: 0.7em;
            font-size: 0.8em;
        }
        img {
            height: 20px;
            width: 10px;
            padding-top: 0.6em;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .column-1 {
            width: 10%;
        }
        img {
            height: 15px;
            width: 10px;
        }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
        .column-1 {
            width: 9%;
        }
    }




</style>

@endsection


@section('content')
<div id="container">
    <div>
    <a href="{{url('/dashboard')}}"><button class="close navM" ><span>
                <i class="fa fa-times"></i>
              </span></button></a>
    </div>

    <div class="" align="center">
      <h3>
        <p class="nav cEstimate" id="cre" >Client</p></h3>
    </div>
    <div>
        <input class="a-next disabled column" id="ext" type="submit" value="NEXT">
    </div>
</div>
<!--@Ezeko  -->
<div class="container">
    <div class="clearrfix"></div>
    <br/> <br/>
    <div class="card-title">
        <h2 class="">Client Information</h2>
    </div>
    <style>
        .my-hr-line {
            position: relative;
            left: -20px;
            width: calc(100% + 40px);
            border: 1px solid #ddd;
        }

    </style>
    <div class="clearrfix"></div>
    <div class="container ">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 mx-auto">
                <div id="pay-invoice" class="card">
                    <div class="card-body">

                        <div class="clearrfix"></div>



                        <form method="post" action="/estimate/create/step5">
                            <!-- <input type="hidden" name="_token" value="GO9XYWyEk9V6mDjxswf9yEihppAnMK9kyZwdOjIP"> -->
                            @csrf


@if(session('success'))<br> <div class="alert alert-success">{{session('success')}}</div>
@elseif(session('error'))<br> <div class="">{{session('error')}}</div> @endif
@if(session()->has('message.alert'))
<div class="text-center">
    <button class=" alert alert-{{ session('message.alert') }}"> 
        {!! session('message.content') !!}
    </button>
</div>
@endif
                        <div class="">

                        <form method="post" action="/estimate/create/step5"  id="form">
                            @csrf
                            <div class="">

                                <label>  <h5>Business Information</h5></label>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label">Company name</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control col-md-12 col-sm-10" name="name" required id="Cname" onchange="verifyPath()" placeholder="e.g Sunshine Studio">
                                    </div>
                                </div>
                            </div>



                            <div class="">
                                <label>  <h5>Business Address</h5></label>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label">Street & Number</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input required type="text" class="form-control col-md-6 col-sm-6" name="street" onchange="verifyPath()" id="street" placeholder="Street">
                                        &nbsp; &nbsp;<input required type="number" class="form-control col-md-6 col-sm-6" name="street_number" onchange="verifyPath()" id="number" placeholder="Number">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label">City & Zip Code</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input required type="text" class="form-control col-md-6 col-sm-6" name="city" onchange="verifyPath()" id="city" placeholder="City">
                                        &nbsp; &nbsp;  <input required type="number" class="form-control col-md-6 col-sm-6" name="zipcode" onchange="verifyPath()" id="Zcode" placeholder="Zip code">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label">Country & State</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="input-group">
                                        <select required name="country_id" id="country_id" onchange="verifyPath()" class="form-control col-md-6 col-sm-6">
                                            <option value="" selected>Country</option>

                                                                                            <option value="1">Nigeria</option>
                                                                                            <option value="2">Afghanistan</option>
                                                                                            <option value="3">Albania</option>
                                                                                            <option value="4">Algeria</option>
                                                                                            <option value="5">Andorra</option>
                                                                                            <option value="6">Angola</option>
                                                                                            <option value="7">Antarctica</option>
                                                                                            <option value="8">Antigua and Barbuda</option>
                                                                                            <option value="9">Argentina</option>
                                                                                            <option value="10">Armenia</option>
                                                                                            <option value="11">Australia</option>
                                                                                            <option value="12">Austria</option>
                                                                                            <option value="13">Azerbaijan</option>
                                                                                            <option value="14">Bahamas</option>
                                                                                            <option value="15">Bahrain</option>
                                                                                            <option value="16">Bangladesh</option>
                                                                                            <option value="17">Barbados</option>
                                                                                            <option value="18">Belarus</option>
                                                                                            <option value="19">Belgium</option>
                                                                                            <option value="20">Belize</option>
                                                                                            <option value="21">Benin</option>
                                                                                            <option value="22">Bermuda</option>
                                                                                            <option value="23">Bhutan</option>
                                                                                            <option value="24">Bolivia</option>
                                                                                            <option value="25">Bosnia and Herzegovina</option>
                                                                                            <option value="26">Botswana</option>
                                                                                            <option value="27">Brazil</option>
                                                                                            <option value="28">Brunei</option>
                                                                                            <option value="29">Bulgaria</option>
                                                                                            <option value="30">Burkina Faso</option>
                                                                                            <option value="31">Burma</option>
                                                                                            <option value="32">Burundi</option>
                                                                                            <option value="33">Cambodia</option>
                                                                                            <option value="34">Cameroon</option>
                                                                                            <option value="35">Canada</option>
                                                                                            <option value="36">Cape Verde</option>
                                                                                            <option value="37">Central African Republic</option>
                                                                                            <option value="38">Chad</option>
                                                                                            <option value="39">Chile</option>
                                                                                            <option value="40">China</option>
                                                                                            <option value="41">Colombia</option>
                                                                                            <option value="42">Comoros</option>
                                                                                            <option value="43">Congo, Democratic Republic</option>
                                                                                            <option value="44">Congo, Republic of the</option>
                                                                                            <option value="45">Costa Rica</option>
                                                                                            <option value="46">Cote d&#039;Ivoire</option>
                                                                                            <option value="47">Croatia</option>
                                                                                            <option value="48">Cuba</option>
                                                                                            <option value="49">Cyprus</option>
                                                                                            <option value="50">Czech Republic</option>
                                                                                            <option value="51">Denmark</option>
                                                                                            <option value="52">Djibouti</option>
                                                                                            <option value="53">Dominica</option>
                                                                                            <option value="54">Dominican Republic</option>
                                                                                            <option value="55">East Timor</option>
                                                                                            <option value="56">Ecuador</option>
                                                                                            <option value="57">Egypt</option>
                                                                                            <option value="58">El Salvador</option>
                                                                                            <option value="59">Equatorial Guinea</option>
                                                                                            <option value="60">Eritrea</option>
                                                                                            <option value="61">Estonia</option>
                                                                                            <option value="62">Ethiopia</option>
                                                                                            <option value="63">Fiji</option>
                                                                                            <option value="64">Finland</option>
                                                                                            <option value="65">France</option>
                                                                                            <option value="66">Gabon</option>
                                                                                            <option value="67">Gambia</option>
                                                                                            <option value="68">Georgia</option>
                                                                                            <option value="69">Germany</option>
                                                                                            <option value="70">Ghana</option>
                                                                                            <option value="71">Greece</option>
                                                                                            <option value="72">Greenland</option>
                                                                                            <option value="73">Grenada</option>
                                                                                            <option value="74">Guatemala</option>
                                                                                            <option value="75">Guinea</option>
                                                                                            <option value="76">Guinea-Bissau</option>
                                                                                            <option value="77">Guyana</option>
                                                                                            <option value="78">Haiti</option>
                                                                                            <option value="79">Honduras</option>
                                                                                            <option value="80">Hong Kong</option>
                                                                                            <option value="81">Hungary</option>
                                                                                            <option value="82">Iceland</option>
                                                                                            <option value="83">India</option>
                                                                                            <option value="84">Indonesia</option>
                                                                                            <option value="85">Iran</option>
                                                                                            <option value="86">Iraq</option>
                                                                                            <option value="87">Ireland</option>
                                                                                            <option value="88">Israel</option>
                                                                                            <option value="89">Italy</option>
                                                                                            <option value="90">Jamaica</option>
                                                                                            <option value="91">Japan</option>
                                                                                            <option value="92">Jordan</option>
                                                                                            <option value="93">Kazakhstan</option>
                                                                                            <option value="94">Kenya</option>
                                                                                            <option value="95">Kiribati</option>
                                                                                            <option value="96">Korea North</option>
                                                                                            <option value="97">Korea South</option>
                                                                                            <option value="98">Kuwait</option>
                                                                                            <option value="99">Kyrgyzstan</option>
                                                                                            <option value="100">Laos</option>
                                                                                            <option value="101">Latvia</option>
                                                                                            <option value="102">Lebanon</option>
                                                                                            <option value="103">Lesotho</option>
                                                                                            <option value="104">Liberia</option>
                                                                                            <option value="105">Libya</option>
                                                                                            <option value="106">Liechtenstein</option>
                                                                                            <option value="107">Lithuania</option>
                                                                                            <option value="108">Luxembourg</option>
                                                                                            <option value="109">Macedonia</option>
                                                                                            <option value="110">Madagascar</option>
                                                                                            <option value="111">Malawi</option>
                                                                                            <option value="112">Malaysia</option>
                                                                                            <option value="113">Maldives</option>
                                                                                            <option value="114">Mali</option>
                                                                                            <option value="115">Malta</option>
                                                                                            <option value="116">Marshall Islands</option>
                                                                                            <option value="117">Mauritania</option>
                                                                                            <option value="118">Mauritius</option>
                                                                                            <option value="119">Mexico</option>
                                                                                            <option value="120">Micronesia</option>
                                                                                            <option value="121">Moldova</option>
                                                                                            <option value="122">Mongolia</option>
                                                                                            <option value="123">Morocco</option>
                                                                                            <option value="124">Monaco</option>
                                                                                            <option value="125">Mozambique</option>
                                                                                            <option value="126">Namibia</option>
                                                                                            <option value="127">Nauru</option>
                                                                                            <option value="128">Nepal</option>
                                                                                            <option value="129">Netherlands</option>
                                                                                            <option value="130">New Zealand</option>
                                                                                            <option value="131">Nicaragua</option>
                                                                                            <option value="132">Niger</option>
                                                                                            <option value="133">Norway</option>
                                                                                            <option value="134">Oman</option>
                                                                                            <option value="135">Pakistan</option>
                                                                                            <option value="136">Panama</option>
                                                                                            <option value="137">Papua New Guinea</option>
                                                                                            <option value="138">Paraguay</option>
                                                                                            <option value="139">Peru</option>
                                                                                            <option value="140">Philippines</option>
                                                                                            <option value="141">Poland</option>
                                                                                            <option value="142">Portugal</option>
                                                                                            <option value="143">Qatar</option>
                                                                                            <option value="144">Romania</option>
                                                                                            <option value="145">Russia</option>
                                                                                            <option value="146">Rwanda</option>
                                                                                            <option value="147">Samoa</option>
                                                                                            <option value="148">San Marino</option>
                                                                                            <option value="149">Sao Tome</option>
                                                                                            <option value="150">Saudi Arabia</option>
                                                                                            <option value="151">Senegal</option>
                                                                                            <option value="152">Serbia and Montenegro</option>
                                                                                            <option value="153">Seychelles</option>
                                                                                            <option value="154">Sierra Leone</option>
                                                                                            <option value="155">Singapore</option>
                                                                                            <option value="156">Slovakia</option>
                                                                                            <option value="157">Slovenia</option>
                                                                                            <option value="158">Solomon Islands</option>
                                                                                            <option value="159">Somalia</option>
                                                                                            <option value="160">South Africa</option>
                                                                                            <option value="161">Spain</option>
                                                                                            <option value="162">Sri Lanka</option>
                                                                                            <option value="163">Sudan</option>
                                                                                            <option value="164">Suriname</option>
                                                                                            <option value="165">Swaziland</option>
                                                                                            <option value="166">Sweden</option>
                                                                                            <option value="167">Switzerland</option>
                                                                                            <option value="168">Syria</option>
                                                                                            <option value="169">Taiwan</option>
                                                                                            <option value="170">Tajikistan</option>
                                                                                            <option value="171">Tanzania</option>
                                                                                            <option value="172">Thailand</option>
                                                                                            <option value="173">Togo</option>
                                                                                            <option value="174">Tonga</option>
                                                                                            <option value="175">Trinidad and Tobago</option>
                                                                                            <option value="176">Tunisia</option>
                                                                                            <option value="177">Turkey</option>
                                                                                            <option value="178">Turkmenistan</option>
                                                                                            <option value="179">Uganda</option>
                                                                                            <option value="180">Ukraine</option>
                                                                                            <option value="181">United Arab Emirates</option>
                                                                                            <option value="182">United Kingdom</option>
                                                                                            <option value="183">United States</option>
                                                                                            <option value="184">Uruguay</option>
                                                                                            <option value="185">Uzbekistan</option>
                                                                                            <option value="186">Vanuatu</option>
                                                                                            <option value="187">Venezuela</option>
                                                                                            <option value="188">Vietnam</option>
                                                                                            <option value="189">Yemen</option>
                                                                                            <option value="190">Zambia</option>
                                                                                            <option value="191">Zimbabwe</option>
                                                                                        </select>
                                        &nbsp; &nbsp;
                                        <select required name="state_id" class="form-control col-md-6 col-sm-6">
                                            <option value="" id="state" onchange="verifyPath()" selected>Select State</option>

                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="">
                                <label>  <h5>Contact Information</h5></label>
                            </div>

                            <div class="row">

                                <div class="col-8">

                                    <span id="contacts"></span>
                                    <h5><a onClick="addContact()">Add other contacts &nbsp; +</a></h5>     
                                </div>
                            </div>


                    </div>
                </div>
                <div class="clearfix"></div>
                <br/>
                <div>
                    <div class="text-center">
                        <button  type="submit" class="btn disabled column-3" 
                                  >NEXT

                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
//image picker jquery
    $("#image_selecter").on("click", function() {
      $("#picture").trigger("click");
    });


    function image1(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();
           reader.onload = function (e) {
               $('#image_selecter')
                   .attr('src', e.target.result)
                   .width(100)
                   .height(100);
           };
           reader.readAsDataURL(input.files[0]);
       }
        var upload_button = document.getElementById("picture_upload");
        upload_button.style.display = "block";
    }

    //estimate form jquery step1
    $("#upperNext").on("click", function() {
        $("#formNext").trigger("click");
      });

      //estimate form jquery step3
    $("#upperNext3").on("click", function() {
        $("#formNext3").trigger("click");
      });
</script>

<script type="text/javascript">
    let count = 1;
	window.addEventListener('load', function() {
		addContact();
	})

    function addContact() {
        let element = document.querySelector('#contacts')
        let newElement = document.createElement('div');
        newElement.classList.add('form-group');
        newElement.innerHTML = `
            <label for="company_name_${count}">Contact name</label>
          <input class="form-control col-md-6 col-sm-6" type="text" name="contact[${count}]['name']" id="contact_name${count}" placeholder="e.g Ben Davies">
                 <div class="clearfix"></div>
                      <br/>
            <label for="company_email">Contact email</label>
            <input class="form-control col-md-6 col-sm-6" type="email" name="contact[${count}]['email']" id="email_${count}" placeholder="e.g email@domain.com">
                </div>
        `;
        element.appendChild(newElement);
        count += 1;
    }

    $(document).ready(function () {
        $('select[name="country_id"]').on('change', function () {
            let countryID = $(this).val();
            if (countryID) {
                $.ajax({
                    url: '/states/' + encodeURI(countryID),
                    type: "GET",
                    dataType: "json"
                    ,
                    success: function (data) {
                        $('select[name="state_id"]').empty();
                        $('select[name="state_id"]').append('<option selected value="">Select State</option>');
                        $.each(data.data, function (key, value) {
                            $('select[name="state_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="state"]').empty();
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });

    function verifyPath(){
        let createProject = document.getElementById('Cname').value;
        let street = document.getElementById('street').value;
        let streetNumber = document.getElementById('number').value;
        let city = document.getElementById('city').value;
        let zipcode = document.getElementById('Zcode').value;
        let country = document.getElementById('country_id').value;
        // let state = document.getElementById('state').value;
        
        
        
        

        if ( createProject !== "" && street !="" && streetNumber !="" && city !="" && zipcode != "" && country != "" ){
            document.querySelector('.column').style.background = '#0ABAB5';
            document.querySelector('.column').classList.remove('disabled');
            document.querySelector('.btn').style.background = '#0ABAB5';
            document.querySelector('.btn').classList.remove('disabled');
            
        } else {
            //console.log('here works');
            document.querySelector('.column').style.background = 'rgba(207, 204, 204, 0.4)';
            document.querySelector('.column').classList.add('disabled');
            document.querySelector('.btn').style.background = 'rgba(207, 204, 204, 0.4)';
            document.querySelector('.btn').classList.add('disabled');
        }
        
    }
    $(document).ready(function(){
        $('#ext').click(function(){
            $('#form').submit();
        });
    })
</script> 
@endsection
