jQuery(document).ready(function(){
    //Weather widget
    jQuery.ajax({
        type:'GET',
        url:'weather.php',
        dataType:'json',
        success:function(data){
            jQuery('#current-temp').append(Math.round(data["main"]["temp"]));
        }
    });

    //SF Rec & Park Calendar Events
});