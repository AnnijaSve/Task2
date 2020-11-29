<style type="text/css">
    .form-style-10{
        width:450px;
        padding:30px;
        margin:40px auto;
        background: #FFF;
        border-radius: 10px;
        -webkit-border-radius:10px;
        -moz-border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
        -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
        -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    }
    .form-style-10 .inner-wrap{
        padding: 30px;
        background: #F8F8F8;
        border-radius: 6px;
        margin-bottom: 15px;
    }
    .form-style-10 h1{
        background: #005ea7;
        padding: 20px 30px 15px 30px;
        margin: -30px -30px 30px -30px;
        border-radius: 10px 10px 0 0;
        -webkit-border-radius: 10px 10px 0 0;
        -moz-border-radius: 10px 10px 0 0;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
        font: normal 30px 'Bitter', serif;
        -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
        -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
        box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
        border: 1px solid #005ea7;
    }
    .form-style-10 h1 > span{
        display: block;
        margin-top: 2px;
        font: 13px Arial, Helvetica, sans-serif;
    }
    .form-style-10 label{
        display: block;
        font: 13px Arial, Helvetica, sans-serif;
        color: #888;
        margin-bottom: 15px;
    }
    .form-style-10 input[type="text"],
    .form-style-10 input[type="date"],
    .form-style-10 input[type="datetime"],
    .form-style-10 input[type="email"],
    .form-style-10 input[type="number"],
    .form-style-10 input[type="search"],
    .form-style-10 input[type="time"],
    .form-style-10 input[type="url"],
    .form-style-10 input[type="password"],
    .form-style-10 textarea,
    .form-style-10 select {
        display: block;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        padding: 8px;
        border-radius: 6px;
        -webkit-border-radius:6px;
        -moz-border-radius:6px;
        border: 2px solid #fff;
        box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
        -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
        -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    }

    .form-style-10 .section{
        font: normal 20px 'Bitter', serif;
        color: #005ea7;
        margin-bottom: 5px;
    }
    .form-style-10 .section span {
        background: #005ea7;
        padding: 5px 10px 5px 10px;
        position: absolute;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border: 4px solid #fff;
        font-size: 14px;
        margin-left: -45px;
        color: #fff;
        margin-top: -3px;
    }
    .form-style-10 input[type="button"],
    .form-style-10 input[type="submit"]{
        background: #005ea7;
        padding: 8px 20px 8px 20px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
        font: normal 30px 'Bitter', serif;
        -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
        -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
        box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
        border: 1px solid #005ea7;
        font-size: 15px;
    }
    .form-style-10 input[type="button"]:hover,
    .form-style-10 input[type="submit"]:hover{
        background: #005ea7;
        -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
        -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
        box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    }
    .form-style-10 .privacy-policy{
        float: right;
        width: 250px;
        font: 12px Arial, Helvetica, sans-serif;
        color: #4D4D4D;
        margin-top: 10px;
        text-align: right;
    }
</style>


<form class="button-section" action="/">
    <div class="form-style-10">
        <input type="submit" name="Labot" value="Uz sākumu"/>
    </div>
</form>
<form action="/CV/<?php echo $cv->getId(); ?>" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-style-10">
        <h1><?php echo $cv->getPersonName() ?><?php echo $cv->getSurname() ?></h1>
        <div class="section"><span>1</span>Pamatdati</div>
        <div class="inner-wrap">
            <label>
                Vārds<input type="text" name="personName" id="personName" value="<?php echo $cv->getPersonName() ?>"/>
            </label>
            <label>
                Uzvārds<input type="text" name="surname" id="surname" value="<?php echo $cv->getSurname() ?>"/>
            </label>
            <label>
                Telefona numurs<input type="text"
                                       name="phoneNumber"
                                       id="phoneNumber"
                                       value="<?php echo $cv->getPhoneNumber() ?>"/>
            </label>
            <label>
                E-pasta adrese<input type="text" name="email" id="email" value="<?php echo $cv->getEmail() ?>"/>
            </label>
        </div>
        <div class="section"><span>2</span>Dati par izglītību</div>
        <div class="inner-wrap">
            <label>
                Izglītības iestādes nosaukums
                <input type="text"
                       name="schoolName"
                       id="schoolName"
                       value="<?php echo $education->getSchoolName() ?>"/>
            </label>
            <label>
                Fakultātes nosaukums
                <input type="text"
                       name="facultyName"
                       id="facultyName"
                       value="<?php echo $education->getFacultyName() ?>"/>
            </label>
            <label>
                Studiju virziens
                <input type="text"
                       name="fieldOfStudy"
                       id="fieldOfStudy"
                       value="<?php echo $education->getFieldOfStudy() ?>"/>
            </label>
            <label>
                Izglītības līmenis
                <input type="text"
                       name="levelOfEducation"
                       id="levelOfEducation"
                       value="<?php echo $education->getLevelOfEducation() ?>"/>
            </label>
            <label>
                Mācību status
                <input type="text"
                       name="studyStatus"
                       id="studyStatus"
                       value="<?php echo $education->getStudyStatus() ?>"/>
            </label>
            <label>
                Mācību ilgums
                <input type="text"
                       name="timeSpentForStudy"
                       id="timeSpentForStudy"
                       value="<?php echo $education->getTimeSpentForStudy() ?>"/>
            </label>
        </div>
        <div class="section"><span>3</span>Darba pieredze</div>
        <div class="inner-wrap">
            <label>
                Darba vietas nosaukums
                <input type="text"
                       name="workPlaceName"
                       id="workPlaceName"
                       value="<?php echo $workExperience->getWorkPlaceName() ?>"/>
            </label>
            <label>
                Ieņemamais amats
                <input type="text"
                       name="workPosition"
                       id="workPosition"
                       value="<?php echo $workExperience->getWorkPosition() ?>"/>
            </label>
            <label>
                Darba slodze
                <input type="text"
                       name="workLoad"
                       id="workLoad"
                       value="<?php echo $workExperience->getWorkLoad() ?>"/>
            </label>
            <label>
                Darba stāžs
                <input type="text"
                       name="workExperience"
                       id="workExperience"
                       value="<?php echo $workExperience->getWorkExperience() ?>"/>
            </label>
            <label>
                Darba vietās pielietotās prasmes vai sasniegumi
                <input type="text"
                       name="skillsAchievements"
                       id="skillsAchievements"
                       value="<?php echo $workExperience->getSkillsAchievements() ?>"/>
            </label>
        </div>
        <div class="section"><span>4</span>Adrese</div>
        <div class="inner-wrap">
            <label>
                Valsts<input type="text" name="country" id="country" value="<?php echo $address->getCountry() ?>"/>
            </label>
            <label>
                Pasta indeks
                <input type="text"
                       name="postIndex"
                       id="postIndex"
                       value="<?php echo $address->getPostIndex() ?>"/>
            </label>
            <label>
                Pilsēta<input type="text" name="city" id="city" value="<?php echo $address->getCity() ?>"/>
            </label>
            <label>
                Iela<input type="text" name="street" id="street" value="<?php echo $address->getStreet() ?>"/>
            </label>
            <label>
                Numurs<input type="text" name="apartment" id="apartment"
                              value="<?php echo $address->getApartment() ?>"/>
            </label>
        </div>

        <div class="button-section">
            <input type="submit" name="Labot" value="LABOT"/>
        </div>
</form>

