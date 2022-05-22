function getHtml(k) {

  x = '<div class="container">';

  for (i = 0; i < k.length; i++) {
      y = k[i];
      x = x + '<div class="row">';
      x = x + '<div class="col-4 bg-success">' + y.id + '</div>';
      x = x + '<div class="col-4 bg-warning">' + y.code + '</div>';
      x = x + '<div class="col-4 bg-danger">' + y.name + '</div>';
      x = x + '</div>';
  }


  x = x + '</div>';


  return x;
}

function getHtml2(k) {

  let keys = Object.keys(k);

  x = '<div class="container">';

  for (i = 0; i < keys.length; i++) {
      y = k[keys[i]];
      x = x + '<div class="row">';
      x = x + '<div class="col-4 border border-success">' + y.id + '</div>';
      x = x + '<div class="col-4 border border-dark">' + y.code + '</div>';
      x = x + '<div class="col-4 border border-danger">' + y.name + '</div>';
      x = x + '</div>';
  }


  x = x + '</div>';


  return x;
}
 



$(document).ready(function (e) {
  $("#btn-load").on("click",function(){
      // alert("work")
      $.ajax({
          url: '/project_rcb/programAjax.php',
          type: 'POST',
          dataType: 'json',
          data: { },
          beforeSend: function () {
              alert("Lets see how its going!")
          },
          success: function (result) {
            let k = result;
            let x=getHtml2(k);
            $("#divContent").html(x);

          },
          error: function (e) {
              console.error(e);
              // alert(e);
          }
      })

  })
 
})