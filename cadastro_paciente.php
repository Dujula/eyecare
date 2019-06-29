<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>EyeCare | Cadastro Paciente</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- fonte títulos--> 
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">

</head>
<?php
include ("menu.php");

?> 

<body>
   
    <section class="medica-book-an-appointment-area section_padding_100_0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="medica-appointment-card">
                        <h5 class="titulos">CADASTRO PACIENTE</h5>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control text-white" name="name" id="appointmentName" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <select class="form-control" id="speciality">
                                            <option>Speciality 1</option>
                                            <option>Speciality 2</option>
                                            <option>Speciality 3</option>
                                            <option>Speciality 4</option>
                                            <option>Speciality 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number" id="appointmentNumber" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <select class="form-control" id="doctors">
                                            <option>Dr. Riyadh Khan</option>
                                            <option>Dr. Kumkum Rashid</option>
                                            <option>Dr. Lim Sarah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="appointmentEmail" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <input type="date" class="form-control" name="date" id="date">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn medica-btn mt-15">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="medica-appointment-thumb">
                        <img src="img/bg-img/medical1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Appointment Area End ***** -->