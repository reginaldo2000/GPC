<div class="msg">
  <a onclick="$('.msg').css('opacity', '0').css('transition', '0s');" style="color:white;float:right;margin-left:20px;cursor:pointer;"><i class="fa fa-close"></i></a>
  <span></span>
</div>
<script type="text/javascript">
function showMessage(type, msg) {
  $('.msg span').html(msg);
  if(type == 1) {
      $('.msg').css('transition', '2s').css('opacity', '1').removeClass('bg-red').addClass('bg-green');
      setTimeout(fechaMensagem, 3000);
  } else if(type == -1) {
      $('.msg').css('transition', '2s').css('opacity', '1').removeClass('bg-green').addClass('bg-red');
      setTimeout(fechaMensagem, 3000);
  }
}

function fechaMensagem() {
  $('.msg').css('opacity', '0').css('transition', '2s');
}
</script>
