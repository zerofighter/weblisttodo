$(document).ready(function(){
  getList();
  $(".formtodo").submit(function(e){
    var data = $(".formtodo").serialize();
    console.log($("input[name='todo']").val());
    if($("input[name='todo']").val() != '')postList(data);
    $("input[name='todo']").val('');
    e.preventDefault();
  });
});

$(document).on("click",".deletetodo",function(e){
  var id = $(this).prev().val();
  deleteList(id);
});

$(document).on("click",".deleteselected",function(e){
  var selected = $('.checklist:checkbox:checked').map(function(){
      return $(this).val();
    }).get();
    if(selected.length > 0)deleteselectedlist(JSON.stringify(selected));

});
