<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>AIISS</title>
    
  <link rel="icon" href="assets/image/288962599_408601677857494_1395590741157851249_n.jpg" type="image/x-icon">
 
	
<link href="assets/css/bootstrap.min.css" rel="stylesheet" >
<link href="assets/css/font-awesome.min.css" rel="stylesheet" >
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/nav.css" rel="stylesheet">
<link href="assets/css/dashboard.css" rel="stylesheet">

<link href="assets/css/global.css" rel="stylesheet">
<link href="assets/css/display.css" rel="stylesheet">
<link href="assets/css/table.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script src="assets/js/bootstrap.bundle.min.js" ></script>
<style>
  @media (max-width: 7610px) {
      .responsive-text {
          display: none;
      }
  }
  .btn-toggle .fa-chevron-right {
            transition: transform 0.3s;
        }
        .btn-toggle[aria-expanded="true"] .fa-chevron-right {
            transform: rotate(90deg);
        }
  
</style>
</head>
  <body onLoad="doOnLoad();">
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php" style="display: flex; align-items: center;">
    <img src="assets/image/288962599_408601677857494_1395590741157851249_n.jpg" alt="Agricultural Icon"  class="rounded-circle" width="40" height="40" style="margin-right: 10px;">
    <h4 style="margin: 0; text-align: center;">
      <span style="margin-right: 10px;"> <span style="color: rgb(8, 255, 8);">A</span>IISS </span>
      
        <span class="responsive-text" style="color: rgb(255, 255, 255); margin-left: 215px;">Agricultural Investment Information Support System</span>
      </h4>
</a>
 <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="nav hide">
  
  
  
  <li class="nav-item sign_box dropdown">
    <a class="nav-link dropdown-toggle text-white  border-0" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img alt=" " class="rounded-circle" width="30"height="30" src="assets/image/18774539_5968072.svg">User</a>
      <ul class="dropdown-menu drop_2" style="left:auto; right:0; min-width:200px;">
	  <li class="small" style="padding: 0.25rem 1rem;">Welcome !</li>
      <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Account</a></li>
      <li><a class="dropdown-item" href="#"><i class="fa fa-gear"></i> Settings</a></li>
     <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
  </li>
</ul>
</header>



<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="overflow-y: auto; max-height:inherit;">
      <div class="position-sticky">
      
        <ul class="nav flex-column mb-2 list-unstyled ps-0">
	  <li class="nav-item">
        <a href="index.php" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m">
          <i class="fa fa-home icon-before"  ></i><span class="btn" style="font-size:12px;"s>Home</span></a>
         
      </li>
      







  
      <ul class="nav flex-column">

        <li class="nav-item">
          <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#crop-investment-collapse" aria-expanded="false">
            <i class="fa fa-seedling icon-before"  style="font-size:15px;   "> </i><span class="btn" style="font-size:12px;"s>Crop IIS</span><i class="fa fa-chevron-right"></i>
          </a>
          <div class="collapse" id="crop-investment-collapse" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
             
             
              <li>

                <li>
                  <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#food-crops-collapse" aria-expanded="false">
                    <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Food Crops </span> <i class="fa fa-chevron-right"></i>
                  </a>
                  
                  <div class="collapse" id="food-crops-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                      <li><a href="wheat.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Wheat</span></a></li>
                      <li><a href="sorghum.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Sorghum</span></a></li>
                      <li><a href="barley.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Barley</span></a></li>
                      <li><a href="tef.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Tef</span></a></li>
                      <li><a href="maize.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px;color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Maize</span></a></li>
                      <li><a href="rice.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Rice</span></a></li>
                      <li><a href="potatoes.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Potatoes</span></a></li>
                    </ul>
                  </div>
                </li>
                



              <li>
                <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#cash-crops-collapse" aria-expanded="false">
                  <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Cash Crops </span> <i class="fa fa-chevron-right"></i>
                </a>
              
                <div class="collapse" id="cash-crops-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                    <li><a href="coffee.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Coffee</span></a></li>
                    <li><a href="cotton.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Cotton</span></a></li>
                  </ul>
                </div>
              </li>
              


              <li>
                <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#horticulture-collapse" aria-expanded="false">
                  <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Horticulture </span> <i class="fa fa-chevron-right"></i>
                </a>
                
                <div class="collapse" id="horticulture-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                    <li><a href="fruits.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Fruits</span></a></li>
                    <li><a href="vegetables.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Vegetables</span></a></li>
                    <li><a href="ornamentals.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Ornamentals</span></a></li>
                  </ul>
                </div>
              </li>





              <li>
                <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#oilseeds-pulses-collapse" aria-expanded="false">
                  <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Oilseeds </span> <i class="fa fa-chevron-right"></i>
                </a>
                
                <div class="collapse" id="oilseeds-pulses-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                    <li><a href="sesame.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Sesame</span></a></li>
                    <li><a href="soybean.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Soybean</span></a></li>
                    <li><a href="cotton-seeds.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Cotton Seeds</span></a></li>
                  </ul>
                </div>
              </li>

              

            </ul>
          </div>
        </li>
      
      












      <li class="nav-item">
        <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#livestock-farming-collapse" aria-expanded="false">
          <i class="fa fa-drumstick-bite icon-before" style="font-size:15px; "></i><span class="btn" style="font-size:12px;"s>Livestock  IIS</span><i class="fa fa-chevron-right"></i>
        </a>
        <div class="collapse" id="livestock-farming-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#dairy-farming-collapse" aria-expanded="false">
                <i class="fa fa-drumstick-bite icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Dairy Farming </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="dairy-farming-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="milk.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px;  color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Milk</span></a></li>
                  <li><a href="dairy-products.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Dairy Products</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#meat-production-collapse" aria-expanded="false">
                <i class="fa fa-drumstick-bite icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Meat Production </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="meat-production-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="beef.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Beef</span></a></li>
                  <li><a href="poultry.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Poultry</span></a></li>
                  <li><a href="mutton.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px;color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Mutton</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#poultry-farming-collapse" aria-expanded="false">
                <i class="fa fa-drumstick-bite icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Poultry Farming </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="poultry-farming-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="egg.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Egg</span></a></li>
                  <li><a href="chicken-production.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Chicken </span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#aquaculture-collapse" aria-expanded="false">
                <i class="fa fa-drumstick-bite icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Aquaculture </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="aquaculture-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="fish.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Fish</span></a></li>
                </ul>
              </div>
            </li>
      
          </ul>
        </div>
      </li>

      







      <li class="nav-item">
        <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#agro-forestry-collapse" aria-expanded="false">
          <i class="fa fa-tree icon-before" style="font-size:15px; "></i><span class="btn" style="font-size:12px;"s>Agro forestry IIS</span><i class="fa fa-chevron-right"></i>
        </a>
        <div class="collapse" id="agro-forestry-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#timber-production-collapse" aria-expanded="false">
                <i class="fa fa-tree icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Timber Production </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="timber-production-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="timber.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Timber</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#non-timber-products-collapse" aria-expanded="false">
                <i class="fa fa-tree icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Non Timber Product </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="non-timber-products-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="rubber.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Rubber</span></a></li>
                  <li><a href="resins.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Resins</span></a></li>
                  <li><a href="medicinal-plants.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px;  color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Medicinal Plants</span></a></li>
                </ul>
              </div>
            </li>
      
          </ul>
        </div>
      </li>
      





      <li class="nav-item">
        <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#agro-processing-collapse" aria-expanded="false">
          <i class="fa fa-industry icon-before" style="font-size:15px; "></i><span class="btn" style="font-size:12px;"s>Agro Processing IIS</span><i class="fa fa-chevron-right"></i>
        </a>
        <div class="collapse" id="agro-processing-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#food-processing-collapse" aria-expanded="false">
                <i class="fa fa-industry icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Food Processing </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="food-processing-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="canned-foods.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Canned Foods</span></a></li>
                  <li><a href="juices.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Juices</span></a></li>
                  <li><a href="snacks.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Snacks</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#textile-industry-collapse" aria-expanded="false">
                <i class="fa fa-industry icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Textile Industry </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="textile-industry-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="cotton.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Cotton</span></a></li>
                  <li><a href="wool.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Wool</span></a></li>
                  <li><a href="fibers.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Other Fibers</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#biofuels-collapse" aria-expanded="false">
                <i class="fa fa-industry icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Biofuels </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="biofuels-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="ethanol.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Ethanol</span></a></li>
                  <li><a href="biodiesel.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Biodiesel</span></a></li>
                </ul>
              </div>
            </li>
      
          </ul>
        </div>
      </li>
      







      <li class="nav-item">
        <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#agri-service-collapse" aria-expanded="false">
          <i class="fa fa-tractor icon-before" style="font-size:15px; "></i><span class="btn" style="font-size:12px;"s>Agri Service IIS</span><i class="fa fa-chevron-right"></i>
        </a>
        <div class="collapse" id="agri-service-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#agricultural-financing-collapse" aria-expanded="false">
                <i class="fa fa-tractor icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Agri Financing </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="agricultural-financing-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="credit.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Credit</span></a></li>
                  <li><a href="loans.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Loans</span></a></li>
                  <li><a href="insurance.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Insurance</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#extension-services-collapse" aria-expanded="false">
                <i class="fa fa-tractor icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Agric Services </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="extension-services-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="training.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Training</span></a></li>
                  <li><a href="advisory.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Advisory Services</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#supply-chain-collapse" aria-expanded="false">
                <i class="fa fa-tractor icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Supply Chain  </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="supply-chain-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="logistics.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Logistics</span></a></li>
                  <li><a href="storage.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Storage</span></a></li>
                  <li><a href="distribution.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Distribution</span></a></li>
                </ul>
              </div>
            </li>
      
          </ul>
        </div>
      </li>
      




      <li class="nav-item">
        <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#organic-farming-collapse" aria-expanded="false">
          <i class="fa fa-seedling icon-before" style="font-size:15px; "></i><span class="btn" style="font-size:12px;"s>Organic Farming IIS</span><i class="fa fa-chevron-right"></i>
        </a>
        <div class="collapse" id="organic-farming-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#organic-1-collapse" aria-expanded="false">
                <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Organic 1 </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="organic-1-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="organic1.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Organic</span></a></li>
                  <li><a href="organic2.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px;c" class="fa fa-leaf"></i> Organic</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#organic-2-collapse" aria-expanded="false">
                <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Organic 2 </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="organic-2-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="organic1.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Organic</span></a></li>
                  <li><a href="organic2.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Organic</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#organic-3-collapse" aria-expanded="false">
                <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Organic 3 </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="organic-3-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="organic1.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Organic</span></a></li>
                  <li><a href="organic2.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Organic</span></a></li>
                </ul>
              </div>
            </li>
      
            <li>
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#organic-4-collapse" aria-expanded="false">
                <i class="fa fa-seedling icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Organic 4 </span> <i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="organic-4-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                  <li><a href="organic1.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Organic</span></a></li>
                  <li><a href="organic2.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Organic</span></a></li>
                </ul>
              </div>
            </li>
      
          </ul>
        </div>
      </li>
      










      <li class="nav-item">
       
            
            
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#animal-feed-production-collapse" aria-expanded="false">
                <i class="fa fa-drumstick-bite icon-before" ></i><span class="btn" style="font-size:12px;"s>Animal Feed  IIS</span><i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="animal-feed-production-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" >
                  
                  <li>
                    <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#feed-mills-collapse" aria-expanded="false">
                      <i class="fa fa-drumstick-bite icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s>Feed Mills</span><i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="feed-mills-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                        <li><a href="feed1.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Feed1</span></a></li>
                        <li><a href="feed2.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Feed2</span></a></li>
                      </ul>
                    </div>
                  </li>
                  
                  <li>
                    <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#nutritional-collapse" aria-expanded="false">
                      <i class="fa fa-drumstick-bite icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s>Nutrition </span><i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="nutritional-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                        <li><a href="feed3.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Feed3</span></a></li>
                        <li><a href="feed4.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Feed4</span></a></li>
                      </ul>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </li>
            
      






















            <li class="nav-item">
              <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#resources-collapse" aria-expanded="false">
                <i class="fa fa-briefcase icon-before"  style="font-size:15px;   "> </i><span class="btn" style="font-size:12px;"s>RESOURCES </span><i class="fa fa-chevron-right"></i>
              </a>
              <div class="collapse" id="resources-collapse" >
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                 
                 
                  <li>
    
                    <li>
                      <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#land-and-soil-collapse" aria-expanded="false">
                          <i class="fa fa-briefcase icon-before" style="font-size:12px; vertical-align:middle;"></i>
                          <span class="btn" style="font-size:12px;">Land and Soil</span>
                          <i class="fa fa-chevron-right"></i>
                      </a>
                      
                      <div class="collapse" id="land-and-soil-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                              <li><a href="land.php" class="link-dark rounded w-100"> <span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Arable Land</span></a> </li>
                              <li><a href="water.php" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Soil Quality</span></a>  </li>
                              <li><a href="test.php" class="link-dark rounded w-100">  <span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Soil Testing</span></a> </li>
                          </ul>
                      </div>
                  </li>
                  
    
    
                  <li>
                    <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#water-resources-collapse" aria-expanded="false">
                      <i class="fa fa-briefcase icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Water Resources </span> <i class="fa fa-chevron-right"></i>
                    </a>
                  
                    <div class="collapse" id="water-resources-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                        <li><a href="soil.php" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i>  Water bodies</span></a></li>
                        <li><a href="cotton.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Irrigation Dev't</span></a></li>
                        <li><a href="cotton.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Water Testing </span></a></li>
                      
                      </ul>
                    </div>
                  </li>
                  
    
    
                  <li>
                    <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#fertilizers-collapse" aria-expanded="false">
                      <i class="fa fa-briefcase icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Fertilizers  </span> <i class="fa fa-chevron-right"></i>
                    </a>
                    
                    <div class="collapse" id="fertilizers-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                        <li><a href="fruits.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Chemical Fertilizers</span></a></li>
                        <li><a href="vegetables.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Organic Fertilizers</span></a></li>
                        <li><a href="ornamentals.html" class="link-dark rounded w-100"><span><i style="font-size:14px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> Soil Amendments</span></a></li>
                      </ul>
                    </div>
                  </li>
    
    
    
    
    
                  <li>
                    <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#seeds-collapse" aria-expanded="false">
                      <i class="fa fa-briefcase icon-before" style="font-size:12px; vertical-align:middle; "></i><span class="btn" style="font-size:12px;"s> Seeds  </span> <i class="fa fa-chevron-right"></i>
                    </a>
                    
                    <div class="collapse" id="seeds-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                        <li><a href="sesame.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0); " class="fa fa-leaf"></i> High quality seeds </span></a></li>
                        <li><a href="soybean.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-leaf"></i> Planting materials </span></a></li>
                      </ul>
                    </div>
                  </li>
    
                  
    
                </ul>
              </div>
            </li>
          
          



























	 
	  
	  <li class="nav-item">
       
        <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#pages-collapse" aria-expanded="false"><i class="fa fa-copy icon-before"></i><span class="btn" style="font-size:12px;"s>Pages</span><i class="fa fa-chevron-right"></i></a>
        <div class="collapse" id="pages-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
		         <li><a  href="profile.html" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Profile</span></a></li>
		        <li><a target="_blank" href="login.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Login</span></a></li>
		        <li><a target="_blank" href="register.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Register</span></a></li>
		      	<li><a target="_blank" href="#" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Logout</span></a></li>
            <li><a target="_blank" href="#" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Recover Password</span> </a></li>
           
          </ul>
        </div>
      </li>
	  
	 
	  
	  <li class="nav-item">
       
        <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#Forms-collapse" aria-expanded="false"><i class="fa fa-file icon-before">

        </i><span class="btn" style="font-size:12px;"s>Forms</span><i class="fa fa-chevron-right"></i></a>
        <div class="collapse" id="Forms-collapse" >
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="water.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Water Bodies</span></a></li>
                  <li><a href="Land.php " class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Land Resources</span></a></li>
                  <li><a href="Irrigation.php " class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Irrigation </span></a></li>
                  <li><a href="Regulations.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Regulations </span></a></li>
                  <li><a href="Administrative.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Administrative </span></a></li>
                  <li><a href="Legal.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Legal Issues</span></a></li>
                  <li><a href="Supportive.php " class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Supportive Services</span></a></li>
                  <li><a href="Permits.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Permits & Licenses</span></a></li>
                  <li><a href="Resource.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Resource Utilization </span></a></li>
                  <li><a href="Management.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Management </span></a></li>
                  <li><a href="Contacts.php" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i>Contact Directory</span></a></li>

                  
             
            
                </ul>
        </div>
      </li>
	  







        <li class="nav-item">
          <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#table-collapse" aria-expanded="false">
            <i class="fa fa-table icon-before"></i><span class="btn" style="font-size:12px;"s>Table</span><i class="fa fa-chevron-right"></i>
          </a>
          <div class="collapse" id="table-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li>
                <a href="javascript:void(0);" class="link-dark rounded w-100" data-bs-toggle="collapse" data-bs-target="#basic-table-collapse" aria-expanded="false">
                  <span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Basic Table <i class="fa fa-chevron-right"></i></span>
                </a>
                <div class="collapse" id="basic-table-collapse" >
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Basic Sub Table One</span></a></li>
                    <li><a href="#" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Basic Sub Table Two</span></a></li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="javascript:void(0);" class="link-dark rounded w-100" data-bs-toggle="collapse" data-bs-target="#tow-table-collapse" aria-expanded="false">
                  <span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Tow Table <i class="fa fa-chevron-right"></i></span>
                </a>
                <div class="collapse" id="tow-table-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Tow Sub Table One</span></a></li>
                    <li><a href="#" class="link-dark rounded w-100"><span><i style="font-size:10px; vertical-align:middle; margin-right:10px; color: rgb(0, 255, 0);" class="fa fa-file"></i> Tow Sub Table Two</span></a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
      







	  
	  
	  
	  <li class="nav-item">
        <a href="#" class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop"><i class="fa fa-bar-chart icon-before"></i><span class="btn" style="font-size:12px;"s>Charts</span></a>
      </li>
	  
	 
    </ul>
    
    
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <svg xmlns="#" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
          </a>
        </h6>
       
        
      </div>
    </nav>

    




    
