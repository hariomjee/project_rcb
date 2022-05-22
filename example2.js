$(document).ready(function(){
    $(document).on("click","#btn-load",function(){
    let x=[{"pid":1,"pcode":"CSM","pname":"hariom",},
    {"pid":2,"pcode":"CSM","pname":"om"},
    {"pid":3,"pcode":"CSM","pname":"er"},
    ]
    str = JSON.stringify(x);

alert(str);
});
});