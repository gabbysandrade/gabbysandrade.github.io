<!--------------------------
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will generate the main body content for the
about page of the comer o sol web application.
--------------------------->

<div class="pageIntro mt-5 mx-auto">
    <h2 class="main-title text-center" id="main-title">About comer o sol</h2>
    <p class="main-subtitle text-center" id="main-subtitle">Born from the simple pleasure of warm, flaky croissant on a blue-skied morning,
        comer o sol is a response to the various pressures of diet culture and an affirmation of the desire to enjoy food, rather than
        calculate it. Use the toggles below to learn more about our origins and why we do what we do.
    </p>
    <hr>
</div>
<div class="accordion bodydiv" id="abtinfo">
  <div class="accordion-item">
    <h2 class="accordion-header" id="abt1">
      <button class="accordion-button subtitle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What is comer o sol?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#abtinfo">
      <div class="accordion-body ptext">
        Comer o sol, which is Portuguese for "eat the sun," is not a company or organization. We are a gathering of regular folk who truly enjoy food and the simple pleasures
        found within the moments of a meal. We want to share this passion with the world and hopefully counteract the shame that society seems to place on prioritizing the
        pleasure food can bring. On our site, you'll find a searchable collection of recipes that bring us joy and, we hope, will bring you joy in turn.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="abt2">
      <button class="accordion-button collapsed subtitle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Why did you start this?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#abtinfo">
      <div class="accordion-body ptext">
        <p>Have you ever had a long day at work, where stress and endless tasks have worn you out, and come home feeling like a member of the undead? You shed your bags and coat
        almost before the front door has even shut behind you and drag yourself to your couch. As you sag into the cushions, you wonder if you will ever be able to stand again.</p>
        <p>Suddenly, you smell it - the warm, rich aroma of spices melding with fresh vegetables and tender meat. You find a new bout of energy as you make your way to the kitchen,
        and you almost drop the serving spoon in your eagerness to serve yourself from the slow cooker. You sit down at the kitchen counter, inhale deeply, and take that first
        bite - and suddenly nothing exists in this moment except you and the sensations of the beef ragú.</p>
        <p>We want to transform these magical moments from rare to intentional and remind everyone of a pleasure in life we feel many have forgotten.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header subtitle" id="abt3">
      <button class="accordion-button collapsed subtitle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Can I contribute recipes?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#abtinfo">
      <div class="accordion-body ptext">
        Nothing would make us happier! Please submit recipes for consideration using the form linked on our <a href="#">Recipes</a> page.
      </div>
    </div>
  </div>
</div>