function createProgTag(prog){
    let v1="abc",v2="pqr",v3="123",v4="good";
  //   let o=[
  //     {id:1,code:"CSM",name:"HArio"}
  //   ];
    x=  `<div class="container bg-primary">`
    let i=0;
    for(i=0;i<prog.length;i++)
    {
      let o=prog[i];
     x=x+` <div class="row">
                  <div class="col-2"> ${o.id}</div>     
                  <div class="col-3"> ${o.code}</div>
                  <div class="col-5"> ${o.name}</div>
                  <div class="col-2"> <button class="btn btn-success divStudentDetails" id="${o.id}">View</button></div>
              </div>
       <div class="row bg-success">
       <div class="col-12" id="div${o.id}">sdb</div> </div>`;
    }
        x=x+  `</div>`;

          
    return x;
}

function getStudentlist(id){
    let divid="div"+id      
    $.ajax({
        url: '/project_rcb/example1Ajax.php',
        type: 'POST',
        dataType: 'json',
        data: {id:id,action:'getStudentlist' },
        beforeSend: function () {
            alert("Lets see how its going!")
        },
        success: function (result) {
            let arr=result;
            let x=`<div class="container">
    <div class="row">
    <div class="col-12">
    <button class="close1 btn btn-danger " id="close${id}">X</button></div>
    </div>`;
    
    let i=0;
    for(i=0;i<arr.length;i++)
    {

        x=x+` <div class="row">
                    <div class="col-4">${arr[i].id}</div>
                    <div class="col-4">${arr[i].name}</div>
                    <div class="col-4">${arr[i].rollno}</div>
                </div>`

    }
    x=x+ `</div>`;
    $(`#${divid}`).html(x);

   // return x;
            // let prog=result;
            // x= createProgTag(prog);
            // alert(x);
           //  $("#divProgDetails").html(x);   // find by class name so here we use # tag

        },
        error: function (e) {
            console.error(e);
             alert("ok");
        }
    });

    
}



$(document).ready(function(){

    $(document).on("click","#btn-load",function(){
        $.ajax({
            url: '/project_rcb/example1Ajax.php',
            type: 'POST',
            dataType: 'json',
            data: {action:'getProgramList' },
            beforeSend: function () {
                alert("Lets see how its going!")
            },
            success: function (result) {
                let prog=result;
                x= createProgTag(prog);
                // alert(x);
                 $("#divProgDetails").html(x);   // find by class name so here we use # tag
  
            },
            error: function (e) {
                console.error(e);
                // alert(e);
            }
        });
       
        
    });
    $(document).on("click",".divStudentDetails",function(){  // ".divStudentDetails" here we use . because it is a function
    
        // alert("ok");
      let id=  this.id;
//       let divid="div"+id;
//    //  alert(divid);
//         let something=getStudentlist(id);
//       $(`#${divid}`).html(something);
        getStudentlist(id);
    });
    $(document).on("click",".close1",function(event){
        // $(".close").html("");
        // let id = 
        let id = event.target.id;
        let targetDiv = 'div'+id.slice(5)
        $(`#${targetDiv}`).html("");
    })
})
 

