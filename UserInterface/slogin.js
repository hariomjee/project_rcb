$(function(e)
{
    // when code run properally then gives a popup of this aleart message
    //alert("OK fine");    
    
    $(document).on("click","#btnlogin",function(){    //#btnlogin for Login button
      //  alert("clicked");     // when click on login button a popup comes of clicked.

      //  alert($("#txtrollno").val());              // popup of roll no
      // alert($("#txtpassword").val());            //  popup of password
     //  alert($("#lblrollno").text());             // popup of lable 

      //  alert($("#myInnerDiv").html());             // .html show popup with code what is written init

      // let suppose if you click on login then want to print Hi hariom in rollno txt box then for that
    //  $("#txtrollno").val("Hi hariom");
      // like this in password also then
   //  $("#txtpassword").val("fjjd");
  //  $("#lblrollno").html("Update");       // in place of val we use html 

     // now suppose when we click on button then we got another text box and a button below that so
    // var x= '<input type="text"> <button>Ok</button>'
   //  $("#dynamicDiv").html(x);


   var un= $("#txtrollno").val();        // store rollno in un
   var pwd=$("#txtpassword").val();     // store password in pwd

   // let see it work or not
  // alert(un+", "+pwd);      // a popup shows roll no and password

   var trmmedUn=un.trim();
   var lun=trmmedUn.length;

   var trmmedpwd=pwd.trim();       // trim extra space and store in trimmedpwd
   var pwlun=trmmedpwd.length;     // length of string is print

   //alert(lun+","+pwlun);

   // if userid and password is not zero then valid else invalid

   if(lun!=0 && pwlun!=0)
   {
      // alert("valid Input");
      $("#lblerrormessage").text("");


    // make a ajax call

      $.ajax({
        url: "/project_rcb/Ajaxhandler/SloginAjax.php",
        type:"POST",
        dataType: "json",
        //now we have to pass the data mean give username and password so name : value
        //syntax [data:{data:value,data:value,data:{data:value,data:value.......}]
        data:{username:trmmedUn,pwd:trmmedpwd,action: "loginHandler"}, // treemedUn have rollno value and treemedpwd have password value
        beforeSend: function(){
            alert("about to send an ajax");

        },
        success:function(result){
           // alert(result.hariom+" , "+result.color);   //result is obj and hariom is  element od array in ajax.php file
          //  alert(result.yourusername+" ,"+result.yourpassword); // real value of datas
            //  alert("successful");
            if(result.status=="OK")
            {
               // $("#lblerrormessage").text("valid Un and pw");

               // when we click  on login button then if rollno and password is right then it will go into another page.
                document.location.replace("/project_rcb/UserInterface/studenthome.php");
            }
            else
            {
                $("#lblerrormessage").text("invalid Un and pw");
            }
        },
        error:function(){
          alert("error");   
        },
    });
   }




   else
   {
      // alert("Invalid Input");
      $("#lblerrormessage").text("Invalid input");


   }
    });  
    $(document).on("click","#lblrollno",function(){
        alert("a lable is clicked");
    }) ;

    // on click on password lable it will be hide.
    $(document).on("click","#lblpassword",function(){
          $(this).hide();
        });
      

   
    
});