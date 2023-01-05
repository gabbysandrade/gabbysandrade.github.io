<!--------------------------
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will generate the 'news' view for the
Recipes page of the comer o sol web application.
--------------------------->

<div class="bodydiv py-5">
    <h2 class="main-title mb-3"><?php echo $title; ?></h2>

    <?php foreach ($news as $news_item): ?>

        <h3 class="subtitle"><?php echo $news_item['title']; ?></h3>
        <div class="main">
            <h5 class="subtitle mt-3 mb-2"> Ingredients </h5>
            <?php echo $news_item['ingredients']; ?>
            <h5 class="subtitle my-2"> Instructions </h5>
            <?php echo $news_item['instructions']; ?>
        </div>
        <p><a href="<?= '/news/'.$news_item['slug'] ?>">View Recipe</a></p>

    <?php endforeach; ?>
</div>