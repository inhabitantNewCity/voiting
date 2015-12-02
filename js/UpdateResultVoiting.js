function alertTest(){
  alert('dfhjgkdlmmkfgbj');
}
function createProgressBar(proc){
  var mainDiv = document.createElement('div');
  mainDiv.className = "progress progress-success progress-striped";
  var div = document.createElement('div');
  div.className = "progress-bar";
  div.role = "progressbar";
  div.setAttribute('aria-valuenow',60);
  div.setAttribute('aria-valuemin',0);
  div.setAttribute('aria-valuemax',100);
  div.setAttribute('style',"width: " + proc + "%");
  mainDiv.appendChild(div);
  return mainDiv;
}
function parseRequest(data){
 // $('#vote_status').html(data);
  var regex = /(\d+)/ig;
  var myArray = data.split(' ');
  var count = document.getElementById('countVoite');

  //alert(count.value);
  for(var i = 0; i < count.value; i++){
      var currentRadio = document.getElementById(i);
      var nextRadio = document.getElementById(i+1);
      var span = document.getElementById("span" + i);
      var div = createProgressBar(myArray[i+1]);
      span.removeChild(currentRadio);
      span.innerHTML = span.innerHTML + ' (' + Math.round(myArray[i+1]) + '%) ';
      span.appendChild(div)
      
  }
  var parentSubmit = document.getElementById('divSubmit');
  parentSubmit.removeChild(document.getElementById('submitVoite'));
  parentSubmit.removeChild(document.getElementById('resetVoite'));
  parentSubmit.removeChild(document.getElementById('cancelVoite'));
}
function vote() {
  var msg   = $('#createNewVoiting').serialize();
        $.ajax({
          type: 'POST',
          url: '../../php/HandlerRequestFromVoiting.php',
          data: msg,
          success: function(data) {
            //alert("dsdsadasd");
            parseRequest(data);
            //alert(data["voit" + i]);
            //parseRequest(data);
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
}
