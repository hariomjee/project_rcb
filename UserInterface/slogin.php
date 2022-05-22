<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2">

    <!-- Bootstrap CSS -->
    <link href=" /project_rcb/CSS/BootStrap/css/bootstrap.min.css" rel="stylesheet">
    <link href=" /project_rcb/CSS/mycss.css" rel="stylesheet">

    <title>Student Login</title>
</head>

<body>

    <div class="mainDiv">
        <div class="innerDiv " id="myInnerDiv">

            <div class="container ">

                <!-- define 2 row for Roll no -->
                <div class="row" style="margin:2%; ">
                    <div class="col-lg-3 ">

                    </div>

                    <div class="col-lg-6 ">

                        <label class="text-info " style="font-size: 32px;" id="lblrollno">Roll No</label><br>

                    </div>

                    <div class="col-lg-3  ">

                    </div>
                </div>

                <div class="row" style="margin:2%; ">
                    <div class="col-lg-3 ">

                    </div>

                    <div class="col-lg-6 ">

                        <input class="logintextbox" id="txtrollno" type="text">
                    </div>

                    <div class="col-lg-3  ">

                    </div>
                </div>

                <!-- define 2 row for Password -->

                <div class="row" style="margin:2%; ">
                    <div class="col-md-3 ">

                    </div>

                    <div class="col-md-6 ">

                        <label class="text-info" style="font-size: 32px;" id="lblpassword">Password</label><br>

                    </div>

                    <div class="col-md-3  ">

                    </div>
                </div>

                <div class="row" style="margin:2%; ">
                    <div class="col-md-3 ">

                    </div>

                    <div class="col-md-6 ">

                        <input class="logintextbox" id="txtpassword" type="password">
                    </div>

                    <div class="col-md-3  ">

                    </div>
                </div>

                <div class="row" style="margin:2%; ">
                    <div class="col-md-3 ">

                    </div>

                    <div class="col-md-6 ">
                        <div style="width: 100%; display:flex; justify-content:space-between;align-items:centre">
                       

                            <div id="lblerrormessage"></div>
                            <button class="btn btn-success" id="btnlogin">Login</button> <!-- name of login button is btnlogin-->
                        </div>
                    </div>

                    <div class="col-md-3  ">

                    </div>
                </div>


            </div>

            <div id="dynamicDiv" style="background-color: red;">
                <!-- this is for make a button and a txt box after press on login button -->
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/project_rcb/CSS/BootStrap/js/bootstrap.bundle.min.js"></script>
    <script src="/project_rcb/Jquery/jquery.js"></script>
    <script src="/project_rcb/UserInterface/slogin.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>