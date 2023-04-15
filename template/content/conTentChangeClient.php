<div id="container">
    <div id="contentleft">
    </div>
    <div id="contentcenter">
        <?php
            // include('./template/content/contentPage.php');
         ?>
    </div>
    <div id="contentright">
    </div>
</div>
<script>
    $('.info').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("");
    })
    $('.order').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("");
    })
    $('.shopping').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("");
    })
    $('.logout').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("./template/content/login.php");
    })
</script>