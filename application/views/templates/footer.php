<!--------------------------
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will generate the footer template for the
comer o sol web application.
--------------------------->
        <footer class="text-center py-3 mt-5">
            <?= $title ?><br>
            <h6 class="site-title pt-3">comerosol</h6>
            <img class="fterImg" src="<?= $logo ?>" /> 
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="<?= $js ?>"></script>
        </body>
</html>