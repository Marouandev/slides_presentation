  
  var cke = CKEDITOR.inline('target');
  var btnClose = document.getElementById('btnClose');
  btnClose.addEventListener('click', function(event){
    cke.focusManager.blur(true);
  });