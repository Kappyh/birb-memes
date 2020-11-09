<?php include_once('./dependencies/head.php'); ?>
<div class="container general-container">
    <header class="row" id="title">
        <div class="col-sm-12 d-flex justify-content-center">
            <h2>Free birb memes everyday!</h2>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <p>
                One birb meme in your e-mail to start a good day :P
            </p>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <img class="img-thumbnail image-birb" src="resources/images/meme_billie.jpg" alt="birb-fridge">
        </div>
    </header>
    <section id="form">
        <form action="pages/confirm.php" method="post">
            <div class="form-group">
                <label for="name">
                    Your name
                </label>
                <input class="form-control" type="text" name="name" id="name" />
            </div>
            <div class="form-group">
                <label for="email">
                    Your e-mail
                </label>
                <input class="form-control" type="email" name="email" id="email" />
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <label for="legal_confirm">
                    <input type="checkbox" name="legal_confirm" id="legal_confirm">
                    Agreed with <a href="terms.php">terms</a> and <a href="conditions.php">conditions</a>
                </label>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button class="btn btn-warning" type="submit">Subscribe now!</button>
            </div>
        </form>
    </section>
</div>

<?php include_once('./dependencies/footer.php'); ?>