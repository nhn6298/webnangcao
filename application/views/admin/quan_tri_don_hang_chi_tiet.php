<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author"/>
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" name="description"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:description"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:image"
      content="https://cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg"/>
<meta property="og:site_name" content="atlas "/>
<title>Quản trị đơn hàng</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/crisp/assets/vendor/pace/pace.css'/>
<script src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/theme/html/assets/js/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css'/>

<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/bundles/30bc673ce76f73ecf02568498f6b139269f6e4c7.css'/>



<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css'/>
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/0940f25997c8e50e65e95510b30245d116f639f0/light/assets/fonts/feather/feather-icons.css'/>
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css' href='<?=base_url();?>atmos.min.css'/>
<!-- Additional library for page -->


</head>
<body class="page-home">
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="assets/img/logo.jpg" width="100" alt="atmos Logo">
        <p></p>
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
                <ul class="sub-menu">
                    <li class="menu-item ">
                        <a href='trang_quan_tri.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Quản trị hệ thống</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="mdi mdi-account  mdi-24px ">

                                                </i>
                                            </span>
                        </a>
                    </li>   
                    <li class="menu-item ">
                        <a href='quan_tri_tin_tuc.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Quản trị tin tức</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="mdi mdi-pencil mdi-24px ">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='quan_tri_doi_ngu.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Quản trị đội ngũ</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="mdi mdi-face  mdi-24px" >

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='quan_tri_phan_hoi.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Quản trị phản hồi</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="mdi mdi-wechat  mdi-36px">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='quan_tri_don_hang.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Quản trị đơn hàng</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="mdi mdi-cart  mdi-24px">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='quan_tri_khach_hang.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Quản trị khách hàng</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="mdi mdi-account-group  mdi-24px">

                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
        </ul>
    </div>

</aside>
<main class="admin-main">
    <!--site header begins-->
<header class="admin-header">

    <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <a class="nav-link" data-target="#siteSearchModal" data-toggle="modal" href="#">
                    <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class=" ml-auto">
        <ul class="nav align-items-center">
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-24px mdi-bell-outline"></i>
                        <span class="notification-counter"></span>
                    </a>

                    <div class="dropdown-menu notification-container dropdown-menu-right">
                        <div class="d-flex p-all-15 bg-white justify-content-between border-bottom ">
                            <a href="#!" class="mdi mdi-18px mdi-settings text-muted"></a>
                            <span class="h5 m-0">Thông báo</span>
                            <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                        </div>
                        <div class="notification-events bg-gray-300">
                            <div class="text-overline m-b-5">Hôm nay</div>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-circle text-success"></i> Tất cả hoạt động</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-upload-multiple "></i> Tệp đã tải thành công</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="mdi mdi-cancel text-danger"></i> Your holiday has been denied
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="dang_ky.html">  Tạo tài khoản mới
                    </a>
                    <a class="dropdown-item" href="quen_mk.html">  Đặt lại mật khẩu</a>
                    <a class="dropdown-item" href="#">  Trợ giúp </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="dang_nhap.html"> Đăng xuất</a>
                </div>
            </li>

        </ul>

    </nav>
</header>
<!-- Modal -->

<!--site header ends -->    <section class="admin-content ">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="don_hang_chi_tiet p-b-60 p-t-60">
                    
                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="avatar avatar mr-3">
                                <div class="avatar-title bg-success rounded-circle mdi mdi-receipt  ">

                                </div>
                            </div>

                            <div class="media-body">
                                <div class="opacity-75">Đến,</div>
                                <h4 class="m-b-0"><?=$don_hang_chi_tiet->ten_kh;?></h4>
                                <p class="opacity-75">
                                   Mã hóa đơn <?=$don_hang_chi_tiet->id;?> <br>
                                    Ngày đặt : <?=$don_hang_chi_tiet->ngay_tao;?>
                                </p>
                                <button class="btn btn-white-translucent" id="printDiv" > <i class="mdi
                                mdi-printer"></i>
                                    In</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 text-center m-b-30 ml-auto">
                        <div class="rounded text-white bg-white-translucent">
                            <div class="p-all-15">
                                <div class="don_hang_chi_tiet">
                                    <div class="col-md-12">
                                        <div class="text-overline    opacity-75">Tổng tiền</div>
                                        <h3 class="m-0 text-success"><?=$don_hang_chi_tiet->tong_tien;?> VNĐ</h3>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="pull-up">
            <div class="container" id="printableArea">
                <div class="don_hang_chi_tiet"  >
                    <div class="col-md-12 m-b-40">
                        <div class="card">
                            <div class="card-body">
                                <div class="don_hang_chi_tiet">
                                    <div class="col-md-6">
                                        <img src="assets/img/logos/nytimes.jpg" width="60" class="rounded-circle"
                                             alt="">
                                        <address class="m-t-10">
                                            Đến,<br>
                                            <span class="h4 font-primary"> <?=$don_hang_chi_tiet->ten_kh;?>,</span> <br>
                                            <?=$don_hang_chi_tiet->quan;?> <br><?=$don_hang_chi_tiet->thanh_pho;?> <br>


                                        </address>
                                    </div>
                                    <div class="col-md-12 text-right my-auto">
                                        <h1 class="font-primary" style="text-align: center;">HÓA ĐƠN</h1>
                                        <div class="">Mã hóa đơn: <?=$don_hang_chi_tiet->id;?></div>
                                        <div class="">Ngày đặt: <?=$don_hang_chi_tiet->ngay_tao;?></div>
                                    </div>
                                </div>

                                <div class="table-responsive ">
                                    <table class="table m-t-50">
                                        <thead>
                                        <tr>
                                            <th class="">Nhân viên</th>
                                            <th class="text-center">Đơn giá</th>
                                            <th class="text-center">Giờ</th>
                                            <th class="text-right">Thành tiền</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="">
                                                <p class="text-black m-0"><?php echo $don_hang_chi_tiet->ten_nv;?></p>
                                                
                                            </td>
                                            <td class="text-center"><?php echo $don_hang_chi_tiet->don_gia;?> VNĐ</td>
                                            <td class="text-center"><?php echo $don_hang_chi_tiet->so_luong;?></td>
                                            <td class="text-right"><?php echo $don_hang_chi_tiet->thanh_tien;?> VNĐ</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="text-right">
                                                Thành tiền
                                            </td>
                                            <td colspan="2" class="text-right">
                                                <?=$don_hang_chi_tiet->tong_tien;?> VNĐ
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right">
                                                Khuyến mại
                                            </td>
                                            <td colspan="2" class="text-right">
                                                0 VNĐ
                                            </td>
                                        </tr>

                                        <tr class="bg-light">
                                            <td colspan="3" class="text-right">
                                                Tổng tiền
                                            </td>
                                            <td colspan="2" class="text-right">
                                                <?=$don_hang_chi_tiet->tong_tien;?> VNĐ
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-t-10 p-b-20">
                                    <p class="text-muted ">
                                        Hoá đơn sẽ được tạo theo các dịch vụ mà bạn sử dụng. Bạn phải trả tất cả các hóa đơn đầy đủ trong vòng 30 ngày kể từ ngày lập hóa đơn, trừ trường hợp quy định theo các Điều khoản và Điều kiện đặc biệt.
                                    </p>
                                    <hr>
                                    <div class="text-center opacity-75">
                                        &copy; Adorable Garden 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>
</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src='https://d33wubrfki0l68.cloudfront.net/bundles/9556cd6744b0b19628598270bd385082cda6a269.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-66116118-3'); </script>
<script src='https://d33wubrfki0l68.cloudfront.net/js/2ab709efadaaad94049994f3bddebbd09bc58330/crisp/assets/js/invoice-print.js'></script>
</body>
</html>