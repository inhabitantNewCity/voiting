function getXmlHttp(){
  var xmlhttp;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
/*
              <div class="progress progress-success progress-striped">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%";></div>
              </div>
              */
function parseRequest(data){
  $('#vote_status').html(data);
  var array = JSON.parse(data);
  $('#vote_status').html(array[0]);
  var count = $('[name = countVoite]');
  for(var i = 0; count.value; i++){

   // var currentHidden = $('[name = voit0]');
    //alert($('[name = voit0]'));
    //$('#vote_status').html($('[name = voit0]').serialize());
    //currentHidden.value = data["voit" + i];
  }
}

//}
function vote() {
  var msg   = $('#createNewVoiting').serialize();
        $.ajax({
          type: 'POST',
          url: '../../php/HandlerRequestFromVoiting.php',
          data: msg,
          success: function(data) {
            parseRequest(data);
            //alert(data["voit" + i]);
            //parseRequest(data);
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
}
