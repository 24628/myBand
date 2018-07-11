<link rel="stylesheet" href="css/newsStyle.css">
<div class="NewsNavbar">
    <h3 class="currentPage">Current page: {$current_page}</h3>
    <form method="get" action="index.php">
        <input type="hidden" name="page" value="news">
        <input class="stuff" name="searchterm">
        <input class="button" type="submit" name="submit" value="ZOEK">
    </form>
        {if $current_page gt 1}
            <input class="button" type="button" onclick="location.href='index.php?page=news&pageno={$current_page - 1}';" value="PREVIOUS" />
        {/if}
        {if $current_page lt $number_of_pages}
            <input class="button" type="button" onclick="location.href='index.php?page=news&pageno={$current_page + 1}';" value="NEXT" />
        {/if}
</div>
    {*<h1>Number of pages: {$number_of_pages}</h1>*}
<main>
        {foreach from=$articles item=article}
            <div class="containerNews">
                <div class="containerImage">
                    <img class="image" src="{$article[2]}" alt="foobar" />
                </div>
                <h2 class="top-left">Title:<br>{$article[0]}</h2>
                <p class="article">Description:<br>{$article[1]}</p>
            </div>
        {/foreach}
</main>
<style>
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .stuff{
        padding: 14px 31px;
        border: 2px solid black;
    }
</style>
<script src="javascript/resize.js"></script>
