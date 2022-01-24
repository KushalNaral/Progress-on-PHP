<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Form Page</title>



</head>


<style>





body{
    background-color: #414535;
    font-family: Helvetica;
}

.form_body{

    background-color: #f2e3bc;
    margin: auto;
    width: 60%;
    padding: 10px;
    height: 620px;
    margin-top: 200px;
    opacity: 80%;
}

.title{
    font-size: 30px;
    margin-left: 180px;
}

#002{
font-size: 30%;

}

.w3-btn{
    background-color: #e76f51;
    margin-top: 40px;
    margin-left: 40px;
    width : 40%;
}

.col-25{
    float: left;
    width: 25%;
    margin-top: 1px;
}


.col-75{
    float: left;
    width: 75%;
    margin-top: 1px;
}

.row {
    margin-top: 35px;
    content: "";
    display: table;
    clear: both;
/*    height: 40%;*/
    width: 80%;
}

.imgCard{

    margin-left: 650px;
    margin-top: -400px;
    width: 100%;
    height: auto;
}


</style>




<body>


<div class="form_body">

    <div class="w3-container">
           <div class="title">
               <p>Please fill out the form :</p>
           </div>
               <!--THIS PART IS GONNA BE THE FORM ELEMEENTS -->


                <div class="container" id="001">

                  <form action="/" method="post">

                     <div class="w3-container" id="002" style="font-size: 28px">

                       <!--  <div class="row">
                             <div class="col-25">

                                 <label for="f_name">First Name </label>

                             </div>

                             <div class="col-75">
                                 <input type="text" name="f_name" id="f_name" value="" placeholder="enter first name">
                             </div>
                         </div>


                        <div class="row">
                            <div class="col-25">

                                <label for="l_name">Last Name </label>

                            </div>

                            <div class="col-75">
                                <input type="text" name="l_name" id="l_name" value="" placeholder="enter first name">
                            </div>
                        </div>-->


                         <div class="row">
                             <div class="col-25">

                                 <label for="mail">Email address  </label>

                             </div>

                             <div class="col-75">
                                 <input type="text" name="email" id="email" value="" placeholder="enter email address" required>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-25">

                                 <label for="pass">Password </label>

                             </div>

                             <div class="col-75">
                                 <input type="password" name="pass" value="" id="pass" placeholder="enter password" required>
                             </div>
                         </div>

                         <button class="w3-btn w3-round-xlarge" type="submit"  name="btnlogin" value="Login"> Submit </button>

                           <div class="imgCard">
                               <div class="container">
                                   <img src="img_1.png">
                               </div>
                           </div>

                     </div>




                  </form>

                </div>


           </div>
    </div>








</body>
</html>