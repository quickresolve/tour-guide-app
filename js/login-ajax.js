var LOGIN_FORM = LOGIN_FORM || {};

LOGIN_FORM.load = {
      _init: function(loginURL){
            jQuery('form.form-signin').on('submit', function(e){
                e.preventDefault();
                LOGIN_FORM.ajax.sendLogin(loginURL,jQuery(this).serialize());
            });
      }
};

LOGIN_FORM.ajax = {
    sendLogin: function(loginURL,data){
        jQuery.post(loginURL + "_inc/login-handler.php", data, function(response){
            if(response.toLowerCase().indexOf('dashboard') > -1){
                window.location.href = loginURL + "dashboard.php";
            }
            else {
                LOGIN_FORM.helper.errorHandling(response);
            }
        });
    }
};

LOGIN_FORM.helper = {
    errorHandling: function(data){
        jQuery('form.form-signin').prepend('<div class="alert alert-danger" style="display:none;">' + data + '</div>');
        jQuery('form.form-signin div.alert-danger').fadeIn('slow', function(){
            jQuery(this).delay(2500).fadeOut('slow', function(){
                jQuery(this).remove();
            });
        });
    }
};

