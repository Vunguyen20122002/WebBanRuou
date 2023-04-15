<div id="container">
    <div id="contentleft">
    </div>
    <div id="contentcenter">
        <?php
             include("./template/content/content-admin-user-manager.php");
         ?>
    </div>
    <div id="contentright">
    </div>
</div>
<script>
    $('.account_management').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("./template/content/content-admin-user-manager.php");
    })
    $('.payment_management').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("");
    })
    $('.product_management').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("");
    })
    $('.tax_administration').click(function(e){
        e.preventDefault();
        $('#contentcenter').load("./template/content/content-admin-tax-manager.php");
    })
</script>