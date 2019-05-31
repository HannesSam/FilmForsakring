<?php include 'include\views\_header.php'; ?>

<br>
<br>
<br>
<br>
<div class="title">
    <h1> Recension </h1>

</div>

<div class="box-1">
    <h1>Vad tycker du om filmen?</h1>

    <form id="reviewForm">
        <label for="movieTitle">Filmtitel:</label> <br>
        <input id="movieTitle" type="text" placeholder="skriv titel på filmen.."><br>
        <br>
        <label for="review">Kommentar:</label> <br>
        <textarea id="review" type="text" placeholder="Skriv kommentar.."> </textarea><br>
        <br>

        <form id="stars" class="rating">
            <label>
                <input type="radio" name="stars" value="1" />
                <span class="icon">★</span>
            </label>
            <label>
                <input type="radio" name="stars" value="2" />
                <span class="icon">★</span>
                <span class="icon">★</span>
            </label>
            <label>
                <input type="radio" name="stars" value="3" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
            </label>
            <label>
                <input type="radio" name="stars" value="4" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
            </label>
            <label>
                <input type="radio" name="stars" value="5" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
            </label>
        </form>
        <br>
        <br>
        <input id="submitReview" class="button" type="button" value="skicka in">

    </form>
</div>
<br>

<?php include 'include\views\_footer.php'; ?>