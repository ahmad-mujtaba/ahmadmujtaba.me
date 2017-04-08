App = {
    
    init        : function() {
        
        $("table#skills td.rating").each(function(){
            var rating = parseInt($(this).attr("data-val"));
            
            $(this).html("<div class='lvl-wrapper'><span class='lvl lvl-"+rating+"'>"+rating+"</span></div>");
        
        });
        
        setTimeout(function() {
            $("table#skills").addClass("triggerAnimation");
        },0);
        
        $("a.print").on("click", function(e){
            
            $("body").addClass("print");
            window.print();
            e.preventDefault();
        });
        
    },    
    
    
};




$(document).ready(function(){
    App.init();
    
    
});