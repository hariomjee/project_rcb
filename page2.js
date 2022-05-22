
function getHtml2(k) {

    let keys = Object.keys(k);
  
    x = '<div class="container">';
    //<input type="button" name="cancelvalue" style="justify-content:end" "backround-color:red"; value="x" onclick="" class="btn btn-danger" id="bt"> </input>
  
    for (i = 0; i < keys.length; i++) {
        y = k[keys[i]];
        x = x + '<div class="row">';
        x = x + '<div class="col-3  border border-dark">' + y.id + '</div>';
        x = x + '<div class="col-3  border border-dark">' + y.code + '</div>';
        x = x + '<div class="col-3  border border-dark">' + y.name + '</div>';
        // x=x+'<div class="col-lg-3 " <button class="btn btn-success" >View</button></div>'; 
        x = x + '</div>';
    }
   
    x = x + '</div>';
  
    return x;

  }

  function myFunction(event) { 
    var x = document.getElementById("divContent");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
    //document.getElementById("btnlogin").innerHTML = "Cancel";
  }
  
}






    $(document).ready(function (e) {
        $("#btnlogin").on("click",function(){
            // alert("work")
            $.ajax({
                url: '/project_rcb/page2ajax.php',
                type: 'POST',
                dataType: 'json',
                data: { },
                beforeSend: function () {
                    alert("Lets see how its going!")
                    
                },
                success: function (result) {
                  let x=getHtml2(result);
                  $("#divContent").html(x); 
                 document.getElementById("btnlogin").value = 'View'; 
                
                },
                error: function (e) {
                    console.error(e);
                    // alert(e);
                }
            })
      
        })
       
      })
    




    $(document).ready(function (e) {  
       
            $("#btnlogin1").on("click",function(){
                // alert("work")
                $.ajax({
                    url: '/project_rcb/page2ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { },
                    beforeSend: function () {
                        alert("Lets see how its going!")
                    },
                    success: function (result) {
                      let k = result;
                      let x=getHtml2(k);
                      $("#divContent1").html(x);
          
                    },
                    error: function (e) {
                        console.error(e);
                        // alert(e);
                    }
                })
          
            })
           
          })


          $(document).ready(function (e) {  
       
            $("#btnlogin2").on("click",function(){
                // alert("work")
                $.ajax({
                    url: '/project_rcb/page2ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { },
                    beforeSend: function () {
                        alert("Lets see how its going!")
                    },
                    success: function (result) {
                      let k = result;
                      let x=getHtml2(k);
                      $("#divContent2").html(x);
          
                    },
                    error: function (e) {
                        console.error(e);
                        // alert(e);
                    }
                })
          
            })
           
          })
    