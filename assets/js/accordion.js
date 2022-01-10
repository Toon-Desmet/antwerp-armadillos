$(() => {
    for(let i = 0; i < 10; i++){
        $(".article"+i).hide();
        $(".hide").hide();
        $(".arrow--up"+i).hide();
        
        $(".title"+i).on("click", function(){
            $(".article"+i).slideToggle();
            $(".arrow--up"+i).toggle();
            $(".arrow--down"+i).toggle();
        });
    }


    $(".nav--cross").hide();
    $(".nav--popout-links").hide();
    
    $(".toggle").on("click", function(){
        $(".nav--hamburger").toggle();
        $(".nav--cross").toggle();
        $(".nav--popout-links").slideToggle();
    });
})