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
})