<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page_admin.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Essay Speed Checker</title>
</head>
<body>
    <div id="admin-navbar">
        <div id="admin-navbar-left"><div id="company-name">COMPANY TIME AS LONG AS IT TAKES THE SPACE WELL</div></div>
        <div id="admin-navbar-right"><div><img src="images/profile.jpg" alt="" id="profile-pic"></div><div id="vl"></div><div id="admin-name-placement">Uvuvwevwevwe onyetenvewve ugwemubwem ossas</div></div>
    </div>
    <div id="admin-sub-bar">
        <div class="admin-sub-bar-tab" id="admin-sub-bar-tab1">People</div>
        <div class="admin-sub-bar-tab" id="admin-sub-bar-tab1-1"><i class="material-icons">groups</i></div>
        <div class="admin-sub-bar-tab" id="admin-sub-bar-tab2">Question & Answers</div>
        <div class="admin-sub-bar-tab" id="admin-sub-bar-tab2-2"><i class="material-icons">assignment</i></div>
        <div class="admin-sub-bar-tab" id="admin-sub-bar-tab3">Student Grades</div>
        <div class="admin-sub-bar-tab" id="admin-sub-bar-tab3-3"><i class="material-icons">assignment_turned_in</i></div>
    </div>
    <div class="admin-view" id="admin-view-people">
        <div id="table-output-people">
            <table id="view-people-table">
                <thead id="thead-vpt">
                    <!-- <tr>
                        <th style="width: 10%">profile</th>
                        <th style="width: 10%">username</th>
                        <th style="width: 10%">role</th>
                        <th style="width: 10%">email</th>
                        <th style="width: 10%">contact</th>
                        <th style="width: 10%">action</th>
                    </tr> -->
                </thead>
                <tbody id="tbody-vpt">
                    <!-- <tr><td><img src="images/profile.jpg" alt="" class="view-people-profile"></td><td>a</td><td>a</td><td>a</td><td>a</td><td>a</td></tr> -->
                </tbody>
            </table>
        </div>
        <div id="table-output-people-sorter">
            <div><label for="find-username">Username: </label><br><input id="find-username" type="text"><br><label for="find-role">Role: </label><br><select name="roles" id="find-role"><option value="Teacher">Teacher</option><option value="Student">Student</option></select><br><label for="find-email">Email: </label><br><input id="find-email" type="email"><br><label for="find-tel">Contact: </label><br><input id="find-tel" type="tel" id="phone" name="phone" pattern="[0-9]{11}"></div>
        </div>
    </div>
    <div class="admin-view" id="admin-view-qanda">
        <div></div>
    </div>
    <div class="admin-view" id="admin-view-ati">
        <div></div>
    </div>






    <script>
        function on(input) {
            document.getElementById("overlay").style.display = "block";
            if(input == "sign-in-btn"){
                document.getElementById("sign-in-modal").style.display = "flex";
            } else {
                document.getElementById("sign-up-modal").style.display = "flex";
            }
        
        
        }

        function off(input) {
            if(input == "overlay"){
                document.getElementById("overlay").style.display = "none";
                document.getElementById("sign-in-modal").style.display = "none";
                document.getElementById("sign-up-modal").style.display = "none";
            }
        
        }

        $("#admin-sub-bar-tab1").click(
            function(){
                document.getElementById("admin-view-people").style.display = "flex";
                document.getElementById("admin-sub-bar-tab1").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-view-qanda").style.display = "none";
                document.getElementById("admin-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("admin-view-ati").style.display = "none";
                document.getElementById("admin-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab1-1").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#admin-sub-bar-tab2").click(
            function(){
                document.getElementById("admin-view-people").style.display = "none";
                document.getElementById("admin-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("admin-view-qanda").style.display = "flex";
                document.getElementById("admin-sub-bar-tab2").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-view-ati").style.display = "none";
                document.getElementById("admin-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab2-2").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-sub-bar-tab3-3").style.backgroundColor = "#379683";
                
            }
        );

        $("#admin-sub-bar-tab3").click(
            function(){
                document.getElementById("admin-view-people").style.display = "none";
                document.getElementById("admin-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("admin-view-qanda").style.display = "none";
                document.getElementById("admin-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("admin-view-ati").style.display = "flex";
                document.getElementById("admin-sub-bar-tab3").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab3-3").style.backgroundColor = "#5cdb95";
                
            }
        );

        $("#admin-sub-bar-tab1-1").click(
            function(){
                document.getElementById("admin-sub-bar-tab1").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("admin-view-people").style.display = "flex";
                document.getElementById("admin-view-qanda").style.display = "none";
                document.getElementById("admin-view-ati").style.display = "none";
                document.getElementById("admin-sub-bar-tab1-1").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#admin-sub-bar-tab2-2").click(
            function(){
                document.getElementById("admin-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab2").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("admin-view-people").style.display = "none";
                document.getElementById("admin-view-qanda").style.display = "flex";
                document.getElementById("admin-view-ati").style.display = "none";
                document.getElementById("admin-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab2-2").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#admin-sub-bar-tab3-3").click(
            function(){
                document.getElementById("admin-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab3").style.backgroundColor = "#5cdb95";
                document.getElementById("admin-view-people").style.display = "none";
                document.getElementById("admin-view-qanda").style.display = "none";
                document.getElementById("admin-view-ati").style.display = "flex";
                document.getElementById("admin-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("admin-sub-bar-tab3-3").style.backgroundColor = "#5cdb95";

            }
        );

        function page_start() {
            if(window.innerWidth < 700){
                $("#thead-vpt").empty();
                $("#tbody-vpt").empty();
                $("#thead-vpt").append("<tr><th>profile</th><th>username</th><th>role</th><th>action</th></tr>")
                $("#tbody-vpt").append("");
            }
            if (window.innerWidth > 699){
                $("#thead-vpt").empty();
                $("#tbody-vpt").empty();
                $("#thead-vpt").append("<tr><th>profile</th><th>username</th><th>role</th><th>email</th><th>contact</th><th>action</th></tr>")
                $("#tbody-vpt").append("");

            }
        }

        $(window).resize(function(){page_start();});

        page_start();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>