function init() {
  document.addEventListener("deviceready", deviceReady, true);
  delete init;
}

function deviceReady() {
  navigator.notification.alert('ALERT', function() {});
/*
  $('#loginForm').on('submit', function(e) {
    $('#submitButton',this).attr('disabled','disabled');
    var user = $('#username',this).val();
    var pwd = $('#password',this).val();
    if(u != '' && p!= '') {
      $.post('http://ap-test.d.d.ansta.pl/resp.php?returnformat=json', {u:user,p:pwd}, function(res) {
        navigator.notification.alert(res, function() {});
      },"json");
    }
    return false;
  });
*/
}
