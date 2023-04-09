
$(document).ready(function(){
    $('#changePageProduct').click(function(e) {
    e.preventDefault();
    var bien = 'sanpham';
    $.ajax({
        type: "GET",
        url: './template/content/conTentChange.php',
        data: 'id = '+ bien,
        success: function(reponse){
            $('#main').html(reponse);
            console.log(reponse);
        }
    });
});
});
// hover list menu product
var mennuHoverProduct = document.querySelector('.menuheader');
var menuProduct = document.querySelector('.listMenuProduct');


var isMenuVisible = false;

mennuHoverProduct.addEventListener('mouseenter', function() {
  menuProduct.style.display = 'block';
  isMenuVisible = true;
});

mennuHoverProduct.addEventListener('mouseleave', function() {
  isMenuVisible = false;
  setTimeout(function() {
    if (!isMenuVisible) {
      menuProduct.style.display = 'none';
    }
  }, 500);
});

menuProduct.addEventListener('mouseenter', function() {
  isMenuVisible = true;
});

menuProduct.addEventListener('mouseleave', function() {
  isMenuVisible = false;
  setTimeout(function() {
    if (!isMenuVisible) {
      menuProduct.style.display = 'none';
    }
  }, 500);
});

// Hover list menu user
var mennuHoverUser = document.querySelector('.iconuser');
var menuUser = document.querySelector('.listMenuUser');

mennuHoverUser.addEventListener('mouseenter', function() {
    menuUser.style.display = 'block';
    isMenuVisible = true;
  });
  
  mennuHoverUser.addEventListener('mouseleave', function() {
    isMenuVisible = false;
    setTimeout(function() {
      if (!isMenuVisible) {
        menuUser.style.display = 'none';
      }
    }, 500);
  });
  
  menuUser.addEventListener('mouseenter', function() {
    isMenuVisible = true;
  });
  
  menuUser.addEventListener('mouseleave', function() {
    isMenuVisible = false;
    setTimeout(function() {
      if (!isMenuVisible) {
        menuUser.style.display = 'none';
      }
    }, 500);
  });


