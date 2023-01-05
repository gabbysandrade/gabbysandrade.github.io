<!--------------------------
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will generate the 'news' view for
individual articles on the Recipes page of the comer o 
sol web application.
--------------------------->

<?php
echo '<div class="bodydiv py-5">';
echo '<h2 class="main-title mb-3">'.$news_item['title'].'</h2>';
echo '<h4 class="subtitle mb-2"> Ingredients </h4>';
echo $news_item['ingredients'];
echo '<h4 class="subtitle mt-3 mb-2"> Instructions </h4>';
echo $news_item['instructions'];
echo '</div>';