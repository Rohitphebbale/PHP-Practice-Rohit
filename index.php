<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="style.css">
    <title>Student Registration Form</title>
</head>
<body>
    
    <div class="container">
        <form action="" method="post">
            <div class="section-row">
                <h2>Student Admission Application Form</h2>
                <div>
                    <label for="by">by: </label>
                    <input type="text" name="by" id="by">
                </div>
            </div>

            <hr>
            <i><p>Please fill-up this form completely</p></i>

            <div class="section-1">
                <h3>APPLICATION FOR ADMISSION</h3>
                <div class="section-row">
                    <div>
                        <label for="applicationDate">Date of Application: </label>
                        <input type="text" name="applicationDate" id="applicationDate">
                    </div>
                    <div>
                        <label for="term">for Term/SY: </label>
                        <input type="text" name="term" id="term">
                    </div>
                    <div>
                        <label for="idNum">Temporary Id Number: </label>
                        <input type="text" name="idNum" id="idNum">
                    </div>
                </div>
                <div>
                    <label for="">Degree/Program applying for
                        <i><span>(Please name three, according to your priority)</span></i>: 
                    </label>
                </div>
            </div>

            <div class="section-2">
                <h3>PERSONAL DATA</h3>
                <div class="section-row">
                    <div class="section-columns">
                        <div>
                            <label for="lName">Last Name: </label>
                            <input type="text" name="lName" id="lName">
                        </div>
                           
                        <div>
                            <label for="dob">Date of Birth <i><small>(mm/dd/yyyy)</small></i>: </label>
                            <input type="text" name="dob" id="dob">
                        </div>
                        <div>
                            <label for="nationality">Nationality: </label>
                            <input type="text" name="nationality" id="nationality">
                        </div>
                        <div>
                            <label for="birthOrder">Birth Order: </label>
                            <input type="text" name="birthOrder" id="birthOrder">
                        </div>
                    </div>

                    <div class="section-columns">
                        <div>
                            <label for="mName">Middle Name: </label>
                            <input type="text" name="mName" id="mName">
                        </div>
                        <div>
                            <label for="gender">Gender: </label>
                            <input type="text" name="gender" id="gender">
                        </div>
                        <div>
                            <label for="religion">Religion: </label>
                            <input type="text" name="religion" id="religion">
                        </div>
                        <div>
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email">
                        </div>
                    </div>

                    <div class="section-columns">
                        <div>
                            <label for="fName">First Name: </label>
                            <input type="text" name="fName" id="fName">
                        </div>
                        <div>
                            <label for="place">Place of Birth: </label>
                            <input type="text" name="place" id="place">
                        </div>
                        
                        <div>
                            <label for="civilStatus">Civil Status: </label>
                            <input type="text" name="civilStatus" id="civilStatus">
                        </div>
                        <div>
                            <label for="contact">Contact Number: </label>
                            <input type="number" name="contact" id="contact">
                        </div>
                    </div>
                </div>

                <div>
                    <label for="nickname">Name in Native Language Character 
                        <i><small>(Native Name, Nickname or Alias)</small></i>: 
                    </label>
                    <input type="text" name="nickname" id="nickname">
                </div>

                <div class="checkbox">
                    <p>How will you be supported in your studies?</p>
                    <input type="checkbox" id="option1" name="checkboxOption[]" value="">
                    <label for="option1">Self supported (working)</label>

                    <input type="checkbox" id="option2" name="checkboxOption[]" value="">
                    <label for="option2">Parent's full support</label>

                    <input type="checkbox" id="option3" name="checkboxOption[]" value="">
                    <label for="option3">Supported by relatives/family, friends</label>

                    <input type="checkbox" id="option3" name="checkboxOption[]" value="">
                    <label for="option3">Scolarship <i><span>(name of grant)</span></i></label>
                </div>
            </div>

            <div class="section-3">
                <h3>RESIDENCE DATA</h3>
                <div>
                    <h4>Permanent Address</h4>
                    <div>
                        <label for="pHouseNo">Apartment Name/House No/Street/Barangay: </label>
                        <input type="text" name="pHouseNo" id="pHouseNo">
                    </div>

                    <div class="section-row">
                        <div class="section-columns">
                            <div>
                                <label for="pCity">City/Municipality: </label>
                                <input type="text" name="pCity" id="pCity">
                            </div>
                            <div>
                                <label for="pZipcode">Zip Code: </label>
                                <input type="number" name="pZipcode" id="pZipcode">
                            </div>
                        </div>

                        <div class="section-columns">
                            <div>
                                <label for="pState">Province/State: </label>
                                <input type="text" name="pState" id="pState">
                            </div>
                            <div>
                                <label for="pEmail">Email Address: </label>
                                <input type="email" name="pEmail" id="pEmail">
                            </div>
                        </div>

                        <div class="section-columns">
                            <div>
                                <label for="pCountry">Country: </label>
                                <input type="text" name="pCountry" id="pCountry">
                            </div>
                            <div>
                                <label for="pContact">Contact No: </label>
                                <input type="number" name="pContact" id="pContact">
                            </div>
                        </div>
                    </div>

                    <h4>Current Contact Address</h4>
                    <div class="section-row">
                        <div>
                            <label for="cGuardianName">Contact Person/Guardian Name: </label>
                            <input type="text" name="cGuardianName" id="cGuardianName">
                        </div>
                        <div>
                            <label for="cRelation">Relation: </label>
                            <input type="text" name="cRelation" id="cRelation">
                        </div>
                    </div>

                    <div>
                        <label for="cHouseNo">Apartment Name/House No./Street/Barangay: </label>
                        <input type="text" name="cHouseNo" id="cHouseNo">
                    </div>

                    <div class="section-row">
                        <div class="section-columns">
                            <div>
                                <label for="cCity">City/Municipality: </label>
                                <input type="text" name="cCity" id="cCity">
                            </div>
                            <div>
                                <label for="cZipcode">Zip Code: </label>
                                <input type="number" name="cZipcode" id="cZipcode">
                            </div>
                        </div>

                        <div class="section-columns">
                            <div>
                                <label for="cState">Province/State: </label>
                                <input type="text" name="cState" id="cState">
                            </div>
                            <div>
                                <label for="cEmail">Email Address: </label>
                                <input type="email" name="cEmail" id="cEmail">
                            </div>
                        </div>

                        <div class="section-columns">
                            <div>
                                <label for="cCountry">Country: </label>
                                <input type="text" name="cCountry" id="cCountry">
                            </div>
                            <div>
                                <label for="cContact">Contact No: </label>
                                <input type="number" name="cContact" id="cContact">
                            </div>
                        </div>
                    </div>

                    <h4>Emergency Contact Address <i><span>(if not same as above)</span></i></h4>
                    <div class="section-row">
                        <div>
                            <label for="eGuardianName">Contact Person/Guardian Name: </label>
                            <input type="text" name="eGuardianName" id="eGuardianName">
                        </div>
                        <div>
                            <label for="eRelation">Relation: </label>
                            <input type="text" name="eRelation" id="eRelation">
                        </div>                
                    </div>

                    <div>
                        <label for="eHouseNo">Apartment Name/House No./Street/Barangay: </label>
                        <input type="text" name="eHouseNo" id="eHouseNo">
                    </div>

                    <div class="section-row">
                        <div class="section-columns">
                            <div>
                                <label for="eCity">City/Municipality: </label>
                                <input type="text" name="eCity" id="eCity">
                            </div>
                            <div>
                                <label for="eZipcode">Zip Code: </label>
                                <input type="number" name="eZipcode" id="eZipcode">
                            </div>
                        </div>

                        <div class="section-columns">
                            <div>
                                <label for="eState">Province/State: </label>
                                <input type="text" name="eState" id="eState">
                            </div>
                            <div>
                                <label for="eEmail">Email Address: </label>
                                <input type="email" name="eEmail" id="eEmail">
                            </div>
                        </div>

                        <div class="section-columns">
                            <div>
                                <label for="eCountry">Country: </label>
                                <input type="text" name="eCountry" id="eCountry">
                            </div>
                            <div>
                                <label for="eContact">Contact No: </label>
                                <input type="number" name="eContact" id="eContact">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php
    $lastname = $_POST["lName"];
    $firstname = $_POST["fName"];
    $middlename = $_POST["mName"];
    $dob = $_POST["dob"];
    $nation = $_POST["nationality"];
    $birthorder = $_POST["birthOrder"];
    $gender = $_POST["gender"];
    $religion = $_POST["religion"];
    $number = $_POST["contact"];
    $civilstatus = $_POST["civilStatus"];
    $birthplace = $_POST["place"];
    $email = $_POST["email"];
// ===============================================
   
    if($lastname == null && strlen($lastname) === 0 ){
        echo "enter valid last name";
        return;
    }
    else if(strlen($lastname) <= 2 ){
        echo "last name cann't be less then in last name";
        return;
    }
    else{
        echo "enter maximum 7 letters";
    }
//======================================================
   
    if($firstname == null && $firstname == isempty() ){
        echo "enter valid first name";
    }
    elseif(strlen($firstname) <= 2 ){
        return $firstname;
    }
    
    else{
        echo "enter maximum 7 letters";
    }
//============================================================
   
    if($middlename == null && $middlename == isempty() ){
        echo "enter valid last name";
    }
    elseif(strlen($middlename) <= 2 ){
        return $middlename;
    }
    
    else{
        echo "enter maximum 7 letters";
    }
// ========================================================
    if($gender == male || $gender == female || $gender == others){
        return $gender;
    }
    else{
        echo "enter the valid gender";
    }
//==============================================================

if($number == 10){
    return $number;
}
elseif($number==null || $number == isempty()){
    echo "Enter the number";
}
else{
    echo "Enter the valid number";
}

//============================================================




    ?>
</body>
</html>