<head>
    <link rel="stylesheet" href="app\Views\style.css" type='text/css'>
</head>

<form class="button-section" action="/">
    <div class="form-style-10">
        <input type="submit" name="Labot" value="Uz sākumu"/>
    </div>
</form>
<form method="post" action="/addCV">
    <div class="form-style-10">
        <h1>Izveidot CV</h1>
        <div class="section"><span>1</span>Pamatdati</div>
        <div class="inner-wrap">
            <label class="required">
                Vārds <input type="text" name="personName" id="personName" required/>
            </label>
            <label class="required">
                Uzvārds <input type="text" name="surname" id="surname" required/>
            </label>
            <label class="required">
                Telefona numurs <input type="text" name="phoneNumber" id="phoneNumber" value="+371"/>
            </label>
            <label class="required">
                E-pasta adrese <input type="email" name="email" id="email" required/>
            </label>
        </div>
        <div class="section"><span>2</span>Dati par izglītību</div>
        <div class="inner-wrap">
            <label>
                Izglītības iestādes nosaukums
                <input type="text"
                       name="schoolName"
                       id="schoolName"/>
            </label>
            <label>
                Fakultātes nosaukums
                <input type="text"
                       name="facultyName"
                       id="facultyName"/>
            </label>
            <label>
                Studiju virziens
                <input type="text"
                       name="fieldOfStudy"
                       id="fieldOfStudy"/>
            </label>
            <label>
                Izglītības līmenis
                <input type="text"
                       name="levelOfEducation"
                       id="levelOfEducation"/>
            </label>
            <label>
                Mācību status
                <select name="studyStatus" id="studyStatus">
                    <option id="studyStatus" selected>Izvēlēties...</option>
                    <option id="studyStatus" value="Mācības pabeigtas">Mācības pabeigtas</option>
                    <option id="studyStatus" value="Mācības pārtrauktas">Mācības pārtrauktas</option>
                    <option id="studyStatus" value="Šobrīd mācos">Šobrīd mācos</option>
                </select>
            </label>
            <label>
                Mācību ilgums
                <input type="text"
                       name="timeSpentForStudy"
                       id="timeSpentForStudy"/>
            </label>
        </div>
        <div class="section"><span>3</span>Darba pieredze</div>
        <div class="inner-wrap">
            <label>
                Darba vietas nosaukums
                <input type="text"
                       name="workPlaceName"
                       id="workPlaceName"/>
            </label>
            <label>
                Ieņemamais amats
                <input type="text"
                       name="workPosition"
                       id="workPosition"/>
            </label>
            <label>
                Darba slodze
                <select name="workLoad" id="workLoad">
                    <option id="workLoad" selected>Izvēlēties...</option>
                    <option id="workLoad" value="Šobrīd nestrādāju">Šobrīd nestrādāju</option>
                    <option id="workLoad" value="Pusslodze">Pusslodze</option>
                    <option id="workLoad" value="Pilna slodze">Pilna slodze</option>
                </select>
            </label>
            <label>
                Darba stāžs
                <input type="text"
                       name="workExperience"
                       id="workExperience"/>
            </label>
            <label>
                Darba vietās pielietotās prasmes vai sasniegumi
                <textarea name="skillsAchievements"
                          id="skillsAchievements"
                          rows="5"
                          cols="55" style="display:
                          block;"></textarea>
            </label>

        </div>
        <div class="section"><span>4</span>Adrese</div>
        <div class="inner-wrap">
            <label>
                Valsts <input type="text" name="country" id="country"/>
            </label>
            <label>
                Pasta indeks
                <input type="text"
                       name="postIndex"
                       id="postIndex"
                       value="LV-"
                />
            </label>
            <label>
                Pilsēta <input type="text" name="city" id="city"/>
            </label>
            <label>
                Iela <input type="text" name="street" id="street"/>
            </label>
            <label>
                Numurs <input type="text" name="apartment" id="apartment" value="Nr."/>
            </label>
        </div>
        <div class="button-section">
            <input type="submit" name="Labot" value="Saglabāt"/>
        </div>
</form>
