document.querySelectorAll('.button-label input[type="checkbox"]').forEach(function(checkbox){
   checkbox.addEventListener('change', function(){
       console.log(this);
       this.closest('label').classList.toggle('btn-warning');
   });
});
