<div class="msg">
  <a onclick="$('.msg').css('opacity', '0').css('transition', '0s').css('height', '0px');" style="color:white;float:right;margin-right:10px;margin-top:10px;cursor:pointer;"><i class="fa fa-close"></i></a>
  <span></span>
</div>
<script type="text/javascript">
function showMessage(type, msg) {
  $('.msg span').html(msg);
  if(type == 1) {
      $('.msg').css('transition', '2s').css('opacity', '1').css('height', '70px').removeClass('bg-red').addClass('bg-green');
      setTimeout(fechaMensagem, 3000);
  } else if(type == -1) {
      $('.msg').css('transition', '2s').css('opacity', '1').css('height', '70px').removeClass('bg-green').addClass('bg-red');
      setTimeout(fechaMensagem, 3000);
  }
}

function fechaMensagem() {
  $('.msg').css('opacity', '0').css('transition', '2s').css('height', '0px');
}
</script>
