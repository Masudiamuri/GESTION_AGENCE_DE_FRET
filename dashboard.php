<?php
session_start();
if(empty($_SESSION['name']))
{
    //recuperation de fichiers header et connexion
    header('location:index.php')
}
include('header.php');
include('/connexion.php');

?>





<div class="page-wrapper">
    <div class="content">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">

                    <?php
                    $fetch_query=mysqli_query($connexion, "select count(*) as total from tbl_client where status=1 and role=2");
                    $client =mysqli_fetch_row($_fetch);
                   ?>
                    <!--<h3> <?php echo $docs[0];  ?></h3>-->
                <span class="widget-title1">Clients <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                <div class="dash-widget-info text-right">
                    <h3></h3>

                    <?php
                    $fetch_query=mysqli_query($connexion, "select count(*) as total from tbl_fret where status=1 and role=2");
                    $fret =mysqli_fetch_row($_fetch);
                   ?>
                <span class="widget-title2">Frets <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
        </div>
    </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                 <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3></h3>

                <?php
                    $fetch_query=mysqli_query($connexion, "select count(*) as total from tbl_marchandise where status=1 and role=2");
                    $marchandise =mysqli_fetch_row($_fetch);
                   ?>
                 <span class="widget-title3">Marchandise<i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="dash-widget">
            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
            <h3></h3>
            <?php
                    $fetch_query=mysqli_query($connexion, "select count(*) as total from tbl_paiement where status=1 and role=2");
                    $paiement =mysqli_fetch_row($_fetch);
                   ?>
                    <span class="widget-title4">Paiement<i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="dash-widget">
            <span class="dash-widget-bg5"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
            <!--<h3> <?php echo $docs[0];  ?></h3>-->
                    <span class="widget-title6">Marchandise entrer<i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="dash-widget">
            <span class="dash-widget-bg6"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
            <!--<h3> <?php echo $docs[0];  ?></h3>-->
                    <span class="widget-title7">Marchandise sortie<i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title d-inline-block">Nouveau Clients</h4>
                <a href="client.html" class="btn btn-primary float-right">Afficher Tout</a>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table mb-0 Nouveau-client-table">
                        <tbody>
                            <tr>
                                <td>
                                    <img width="28" height="28" class="rounded-cercle" src="assets/img/user.jpg" alt="">
                                    <h2></h2>
                                </td>
                                <td></td>
                                <td></td>
                                <td><span class="custom-badge status-red"></span></td>
                                <td><span class="custom-badge status-green"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card member-panel">
            <div class="card-header bg-white">
                <h4 class="card-title mb-0"> Clients</h4>
            </div>
            <div class="card-body">
                <ul class="contact-liste">
                    <li><div class="contact-cont">
                        <div class="float-left user-img m-r-10">
                            <a href="profile.html" title="GESTION DE L'AGENCE REDEMA"><img src="assets/img/" alt="" class="w-40 rounded-cercle"><span class="statut en ligne"><div class="contact-info"><span class="contact-name text-elipse"><!--code php-->
                                <span class="contact-date"><!--code php--></span>
                            </span>
                        </div></span></a>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            <div class="card-footer text-center dg-white">
                <a href="client.html" class="text-muted">Afficher tout les lients</a>
            </div>
        </div>
    </div>
</div>
</div>

