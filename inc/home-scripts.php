<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 700);
    return false;
});</script>

<script>
var text = ["Aspiring Web Developer", "Student", "Interested in Economics", "Interested in UI/UX Design", "Climber", "Systems Analyst"];
var counter = 0;
var elem = $("#greeting");
setTimeout(change, 3500);
setInterval(change, 3500);
function change() {
    elem.fadeOut(function(){
        elem.html(text[counter]);
        counter++;
        if(counter >= text.length) { counter = 0; }
        elem.fadeIn();
    });
}
</script>

<script>
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>