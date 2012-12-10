var x = 1;
var y = 1;

if (x == y) {
    $('.toTop').click(function(){
        $('html,body').animate({scrollTop:0});
    });
    
    $('.toAbout').click(function(){
        $('html,body').animate({scrollTop:570});
    });
    
    $('.toServices').click(function(){
        $('html,body').animate({scrollTop:1520});
    });
    
    $('.toContact').click(function(){
        $('html,body').animate({scrollTop:2580});
    });
} else {
    
};