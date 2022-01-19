$(() => {
    $(".link"+sessionStorage.getItem('link')).addClass("active");
    $(".nav--cross").hide();
    $(".nav--popout-links").hide();

    for(let i = 0; i < 10; i++){
        $(".article"+i).hide();
        $(".arrow--up"+i).hide();
        
        $(".title"+i).on("click", function(){
            $(".article"+i).slideToggle();
            $(".arrow--up"+i).toggle();
            $(".arrow--down"+i).toggle();
        });

        $(".link"+i).on("click", function(){
            console.log(i);
            sessionStorage.setItem('link', i);
        });
    }

    
    $(".toggle").on("click", function(){
        $(".nav--hamburger").toggle();
        $(".nav--cross").toggle();
        $(".nav--popout-links").slideToggle();
    });
})