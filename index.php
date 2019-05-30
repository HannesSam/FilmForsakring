<?php include 'include\views\_header.php'; ?>

<br>
<br>
<br>
<br>
<div class="title">
    <h1> Filmförsäkring </h1>

</div>
<div class="searchbar">
    <form name="bar">
        <input type="text" id="searchInput" placeholder="vilken film vill du söka på?">
        <button class="button" id="searchMovie" type="button">Search</button>

    </form>
</div>

<div id="popUp">
    <div class="popUp">
        <h1 id="movieTitle"> </h1>
        <p id="summary"> </p>
    </div>
    <div id="reviewsDiv">

    </div>
</div>

<?php include 'include\views\_footer.php'; ?>