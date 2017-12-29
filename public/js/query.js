var url = window.location;
function getList(){
  $.ajax({
    method:"GET",
    url: url+"getlist"
  }).done(function(msg) {
    $.each(msg,function(key,value){
      $(".list").append(
        '<li class="list-group-item">'+
        '<div class="checkbox">'+
        '<label>'+
        '<input class="checklist" type="checkbox" value="'+value.id+'">'+value.description+
        '<button type="button" class="btn btn-danger btn-xs deletetodo"> X </button>'+
        '</label>'+
        '</div>'+
        '</li>'
      );
    })
  });
}

function postList(data){
  $.ajax({
       type: "POST",
       url:  url+"postlist",
       data: data,
       success: function(msg)
        {
          $(".list").empty();
          getList();
        }
  });
}

function deleteList(id){
  $.ajax({
       type: "DELETE",
       url:  url+"deletelist/"+id,
       success: function(msg)
        {
          $(".list").empty();
          getList();
        }
  });
}

function deleteselectedlist(data){
  $.ajax({
       type: "DELETE",
       url:  url+"deleteselectedlist/",
       data: {selected:data},
       success: function(msg)
        {
          $(".list").empty();
          getList();
        }
  });
}
