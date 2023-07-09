<!--------------------------
Name: Gabriela Andrade
Floração Design
Purpose: This program will generate the main body content for the
home page of the Floração website.
--------------------------->

<div class="shade-light">
    <div id="intro" class="container bodydiv py-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img id="introimg" src="assets/images/intro.png" alt="Gabriela Andrade, Web Developer & Designer" />
            </div>
            <div class="col-12 col-md-5 mt-5">
                <h5 class="txt-light2">Bem-vindo, I'm Gabriela,</h5>
                <h1 class="txt-vivid txt-shadow">Professional Web Developer & UI/UX Designer</h1>
                <a class="btn btn-outline-light btn-lg mt-4" href="<?= $navport ?>">view my portfolio &#8594;</a>
                <hr class="hr-hlf">
                <a class="socials me-2" href="https://www.linkedin.com/in/gabriela-s-andrade/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a class="socials me-2" href="https://github.com/gabbysandrade" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a class="socials me-2" href="#contact-form"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="shade-light">
    <section id="about" class="container bodydiv py-5">
        <div class="row text-md-end">
            <div class="col-12 col-md-5 mt-5 pt-5">
                <h2 class="txt-vivid txt-shadow">About Me</h2>
                <hr id="abthr" class="hr-hlf">
                <p id="abttxt" class="txt-light2">I am a web developer with a background in environmental design and color theory and am actively pursuing the skillset of a full-stack developer.
                Originally from Brasil, I have spent my life working and living around the globe, ranging in location from Hong Kong to Puerto Rico to Hawai'i. 
                My adaptability and eagerness to embrace the cultures and lifestyles of each of my "homes" carry over into the versatility and warmth of my designs.</p>
            </div>
            <div class="col-12 col-md-7">
                <img id="abtimg" src="assets/images/abt.png" alt="" />
            </div>
        </div>
        
    </section>
</div>

<div class="shade-light">
    <section id="contact" class="container bodydiv text-center py-5">
        <h2 class="txt-light1">Ready to hit refresh on your website?</h2>
        <p class="txt-light1">Click the button below to schedule a free consultation for my web services.</p>
        <a class="btn btn-outline-light btn-lg mt-4" href="https://calendly.com/floracao/consultation">schedule consultation</a>
    </section>
</div>

<div class="shade-light py-5">
    <div id="formdiv" class="mx-auto mt-5 bodydiv pt-3 pb-5 px-5">
        <div id="msg" class="text-center mx-auto">
            <br>
        </div>
        <form id="contact-form" name="contact-form">
            <h2 class="txt-vivid txt-shadow text-center">Contact</h2>
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" maxlength="64"><br>
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="john@doe.com" maxlength="64"><br>
            <label for="subj" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subj" name="subj" placeholder="Message Subject" maxlength="64"><br>
            <label for="frmmsg" class="form-label">Message</label>
            <textarea class="form-control" id="frmmsg" name="frmmsg" maxlength="1000"></textarea><br>
            <div class="flexdiv text-center">
                <button id="clearbtn" type="button" class="btn btn-outline-light me-2">clear</button>
                <button id="submitbtn" type="button" class="btn btn-light ms-2">submit</button>
            </div>
        </form>
    </div>
</div>