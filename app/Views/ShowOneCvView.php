
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
        <input type="submit" name="Labot" value="Uz sākumu" />
    </div>
</form>

<form>

    <div class="form-style-10">

        <h1><?php echo $cv->getPersonName()?> <?php echo $cv->getSurname()?></h1>

        <div class="section"><span>1</span>Pamatdati</div>
        <div class="inner-wrap">
            <label>Vārds: <div class="section"><?php echo $cv->getPersonName()?></div></label>

            <label>Uzvārds <div class="section"><?php echo $cv->getSurname()?></div></label>

            <label>Telefona numurs <div class="section"><?php echo $cv->getPhoneNumber()?></div></label>

            <label> E-pasta adrese <div class="section"><?php echo $cv->getEmail()?></div></label>
        </div>
        <div class="section"><span>2</span>Dati par izglītību</div>
        <div class="inner-wrap">
            <label>
              Izglītības iestādes nosaukums
                    <div class="section"><?php echo $education->getSchoolName()?></div>
            </label>

            <label> Fakultātes nosaukums <div class="section"><?php echo $education->getFacultyName()?></div></label>

            <label> Studiju virziens <div class="section"><?php echo $education->getFieldOfStudy()?></div></label>

            <label> Izglītības līmenis <div class="section"><?php echo $education->getLevelOfEducation()?></div></label>

            <label> Mācību status <div class="section"><?php echo $education->getStudyStatus()?></div></label>

            <label> Mācību ilgums <div class="section"><?php echo $education->getTimeSpentForStudy()?></div></label>

        </div>
        <div class="section"><span>3</span>Darba pieredze</div>
        <div class="inner-wrap">
            <label> Darba vietas nosaukums
                <div class="section"><?php echo $workExperience->getWorkPlaceName()?>
                </div>
            </label>
            <label> Ieņemamais amats
                <div class="section"><?php echo $workExperience->getWorkPosition()?>
                </div>
            </label>

            <label> Darba slodze <div class="section"><?php echo $workExperience->getWorkLoad()?></div></label>

            <label> Darba stāžs <div class="section"><?php echo $workExperience->getWorkExperience()?></div></label>

            <label> Darba vietās pielietotās prasmes vai sasniegumi
                <div class="section"><?php echo $workExperience->getSkillsAchievements()?>
                </div>
            </label>

        </div>
        <div class="section"><span>4</span>Adrese</div>
        <div class="inner-wrap">
            <label>Valsts<div class="section"><?php echo $address->getCountry()?></div></label>

            <label>Pasta indeks<div class="section"><?php echo $address->getPostIndex()?></div></label>

            <label>Pilsēta<div class="section"><?php echo $address->getCity()?></div></label>

            <label>Iela<div class="section"><?php echo $address->getStreet()?></div></label>

            <label>Numurs<div class="section"><?php echo $address->getApartment()?></div></label>
        </div>
</form>

