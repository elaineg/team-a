FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});

FB.login(function(response) {
  // handle the response
}, {scope: 'public_profile,email'});