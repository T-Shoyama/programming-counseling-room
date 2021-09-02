$(function () {
  $('.sarch_button').on('click', function() {
    //名前アラート
    if($('input[name="body"]').val() == ''){
      alert('キーワードを入力してください');
      return false;
    }
  });
});
