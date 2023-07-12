<!--------------------------
Name: Gabriela Andrade
Floração Design
Purpose: This is the HTML template view for the parser to
use when parsing all portfolio items in the Portfolio page
of the Floração website.
--------------------------->

<!-- Create loop for portfolio items in database -->
{portfolio}
<div class="col">
    <div class="card h-100 folio-card">
        <img src="{imgsrc}" class="card-img-top" alt="{imgalt}">
        <div class="card-body">
            <h5 class="card-title folio-title">{title}</h5>
            <p class="card-text text-muted">{date}</p>
            <p class="card-text">{description}</p>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a class="btn btn-primary mx-auto" href="{crdlink}" target="_blank"> {btnlabel} </a>
        </div>
    </div>
</div>
{/portfolio}