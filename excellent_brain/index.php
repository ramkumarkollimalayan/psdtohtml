<?php
    $utm_source = ($_GET["utm_source"])?$_GET["utm_source"]:"google";
    $utm_medium = ($_GET["utm_medium"])?$_GET["utm_medium"]:"direct";
    $utm_campaign = ($_GET["utm_campaign"])?$_GET["utm_campaign"]:"none";
    $utm_term = ($_GET["utm_term"])?$_GET["utm_term"]:"none";
    $utm_content = ($_GET["utm_content"])?$_GET["utm_content"]:"none";

    switch($utm_source){
        case "google":
        $phone = "077-9967134";
        break;
        case "instagram":
        $phone = "077-9967134";
        break;
        case "facebook":
        $phone = "077-9967134";
        break;
        default:
        $phone = "077-9967134";
        break;
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    $fullip = $ip." - ".$details->city.", ".$details->region.", ".$details->country; // -> "Mountain View"

    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $mobile = ($detect->isMobile())?1:0;

?>	
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Excellent Brain</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-rtl.min.css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl.theme.default.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand mob-only" href="#"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
                    </div>
                
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#acquainted">???????? ????????</a></li>
                            <li><a href="#howitworks">?????? ???? ?????????</a></li>
                            <li><a href="#benefits" >??????????????</a></li>
                            <li><a href="#recommend">??????????????</a></li>
                            <li><a href="#contact">?????? ??????</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-left desktop-only">
                            <li><a href="#"><img src="images/logo.png" alt="logo" class="img-responsive"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="header_content" id="acquainted">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-xs-12 col-sm-9 col-md-4 col-lg-4 pr-0">
                            <div class="header_desc">
                                <h3>???????? ??????????,</h3>
                                <h2>?????????? ?????? ??????????!</h2>
                                <p>?????????? ???????????? ???????? ???????????????? ???????????? ???????? <strong>???????????? ?????????? ?????? ??????????????????????????</strong> ?????? ?????????? ?????????? ?????????????????????? ???????????? ?????????? ???????? ????????????</p>
                            </div>
                            <div class="header_form desktop-only">
                                <form>
                                    <div class="form-group">
                                        <label>??????????????</label>
                                        <input type="text" name="name" placeholder="???? ??????">
                                    </div>
                                    <div class="form-group">
                                        <label>??????</label>
                                        <input type="tel" name="phone" placeholder="??????????">
                                    </div>
                                    <div class="form-group">
                                        <label>????????????????!</label>
                                        <input type="email" name="email" placeholder="???????????">
                                    </div>
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <input type="submit" value="??????????">
                                    </div>
                                </form>
                            </div>
                        </div>					
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="header_video desktop-only">
                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/oQlws8F5lTQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="mob-contact mob-only">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_form">
                            <h2>!?????????????? ?????? ????????????????</h2>
                            <form>
                                <div class="form-group">
                                    <label>??????????????</label>
                                      <input type="text" name="name" placeholder="???? ??????">
                                </div>
                                <div class="form-group">
                                    <label>??????</label>
                                    <input type="tel" name="phone" placeholder="??????????">
                                </div>
                                <div class="form-group">
                                    <label>!????????????????</label>
                                    <input type="email" name="email" placeholder="???????????">
                                </div>
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <input type="submit" value="??????????">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mob-video mob-only">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 px-0">
                        <div class="header_video">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/oQlws8F5lTQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_one" id="howitworks">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-1 col-md-2 col-lg-3"></div>
                    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                        <div class="sec_one_quote">
                            <h2>"?????????? ?????????? ?????????? ???????? ?????? ?????????? ?????? ?????????? ????????, <strong>???? ?????????? ???? ?????? ??????????"</strong></h2>
                            <p>.?????? ?????? ???? ??-11 ?????????? ?????????? ?????? ??????????</p>
                        </div>
                        <div class="sec_one_title">
                            <h2>"?????????? ?????? ???????? ???????????? ???????????????? ?????? ??????"</h2>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-1 col-md-2 col-lg-3"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
                    <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 how_works_title">
                        <h2>?????? ????<br>?????????</h2>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-7 how_works_desc">
                        <p>?????????? ???????????? ???? ?????? ?????????? ?????????? ?????????? ?????????? ?????????????? ????????????????? ????????. ???????? ?????????? ?????????? ??????????????????????. ???????????????? ???????? ???????? ???? ?????????????? ?????????????? ???? ???????? ?????????? ?????????? ????????????. ?????????? ?????????? ?????????? ???????? ???????????? ???????? ???? ????????, ???????? ???????? ???????? ?????????? ???????? ???????????? ???? ???????? ???????? ???????????? ???????????????? ??????. ?????? ?????? ????????, ???????????? ???????? ???? ?????? ???????? ???????? ??????, ???????????? ???? ???????????? ?????????? ???????? ?????????????? ????????????. ?????? ?????????????? ?????????? ????????, ???????? ???????? ?????????? ???? ?????????? ?????????? ???? ?????????????? ????????</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 "></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2"></div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="work-wrap">
                                    <div class="work-img">
                                        <img src="images/004.png" alt="image" class="img-responsive">
                                    </div>
                                    <div class="work-text">
                                        <h4>???????????? ???? ????????????</h4>
                                        <p>???????????? ???????? ???? ???????? ???? ???????????? ??????<br>???????? ???? ?????? ???????? ???????? ??????</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="work-wrap">
                                    <div class="work-img">
                                        <img src="images/005.png" alt="image" class="img-responsive">
                                    </div>
                                    <div class="work-text">
                                        <h4>???????????? ???? ????????</h4>
                                        <p>?????????? ?????????? ???????? ????????, ?????????? ???? ?????????? <br>?????????????? ???????? ???? ?????????? ??????, ?????????????? ????????</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="work-wrap">
                                    <div class="work-img">
                                        <img src="images/006.png" alt="image" class="img-responsive">
                                    </div>
                                    <div class="work-text">
                                        <h4>?????????????? ????????????</h4>
                                        <p>?????? ?????????????? ?????????? ???????? ???????? ????????<br>?????????? ???? ?????????? ?????????? ???? ?????????????? ????????</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
                </div>
            </div>
        </section>

        <section class="sec_two">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="sec_two_image mob-only">
                            <img src="images/007.png" alt="img" class="img-responsive">
                        </div>
                        <div class="sec_two_desc">
                            <h2>?????????????? ?????? ????????????????!</h2>
                            <form action="#" method="POST">
                            <input type="text" name="name" placeholder="???? ??????">
                            <input type="tel" name="phone" placeholder="??????????">
                            <input type="email" name="email" placeholder="???????????">
                            <input type="submit" value="??????????">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_three" id="benefits">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3"></div>
                    <div class="col-xs-12 col-sm-10 col-md-9 col-lg-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sec_three_title">
                                <h2>????????????????</h2>
                                <p>???????? ?????????????? ???? ???????????? ???????????????? ???????? ???? ???? ???????? ???????????? ??????????<br>?????? ?????????? ????????????</p>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>???????? ??????????</h3>
                                            <p>???????? ???????? ?????????? ???????????????? ???????????????? <br>?????????????????? ?????????????? ?????????? ??????????</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>?????? ?????? ????????</h3>
                                            <p>?????? ???????? ?????????? ????????????????, ???????? ???????? ???????????? ???????? <br>???????? ???????? ???? ???????????????? ???????????? ?????????? ?????????????? ????????????</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>???????? ????????????</h3>
                                            <p>???????????????????? ?????? ???????? ???????????? ?????????? ???????? <br>?????????????? ???? ???????????? ???????? ?????????? ?????????? ??????????</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>???????? ??????????????</h3>
                                            <p>???????????????? ?????????????? ?????????? ???? ?????? ??"?? ???????????? <br>?????????? ???? ???????????? ?????????????? ???????? ???????? <br>?????????? ?????? ?????????? ??????????????</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>?????????? ???????????? ??????????</h3>
                                            <p>???? ?????????? ???????????? ?????? ?????????? ?????????? ?????????????? ?????????? <br>?????????? ?????? ?????? ?????? ?????????????? ??????????????</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>?????????? ??"?? ????????</h3>
                                            <p>?????? ?????? ???????? ?????? ??????????, ?????????? ?????? ?????????? <br>???? ???????? ???? ???????? ?????????????? ???????????????? <br>?????????? ???????? ???????????? ?????? ????????????</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_four" id="recommend">
            <div class="container">
                <div class="row vcenter">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sec_four_title">
                        <h2>??????????????</h2>
                        <p>???? ?????????? ???? ?????????? ????????, ?????? ???? ???????????? ????????<br>.?????? ???? ?????????? ???????????????? ????????????</p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <div id="recommend_slide" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="recommend-wrap">
                                    <div class="recommend-img">
                                        <img src="images/011.png" alt="image" class="img-responsive">
                                    </div>
                                    <p>???????????? ???? ???? ?????????????? ?????????????? ?????????? ?????????? ?????????? ???? ???????????? ???????? ?????? ?????????? ???? ?????? ?????????? ???????? ???????????? ???????????? ???? ?????????? ?????????? ?????? ?????? ???????? ?????????????? ????????<span>?????? ????????'??????????</span></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="recommend-wrap">
                                    <div class="recommend-img">
                                        <img src="images/012.png" alt="image" class="img-responsive">
                                    </div>
                                    <p>?????????? ???????? ?????????? ???????? ???????????? ???? ???????????? ???? ???????? ??????????, ???????????? ???????? ???? ???????????? ???????????? ???????? ??????????. ?????? ?????????? ?????????? ?????????? ???????? ?????????????? ???????????? ???? ???????????? ???????????????? ??????<span>???????? ?????????? ????????</span></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="recommend-wrap">
                                    <div class="recommend-img">
                                        <img src="images/013.png" alt="image" class="img-responsive">
                                    </div>
                                    <p>???????? ???????? ?????? ???????????? ???? ????????????, ???????????? ?????? ?????????? ???????? ???????????? ??????, ???????????????? ??????, ???????? ?????????? ?????????? ???? ????! ?????? ????????????, ?????????? ?????????? ???? ???????? ???? ????????????<span>???????? ???????? ??????</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_five" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11">
                        <div class="sec_five_desc">
                            <h2>?????????????? ?????? ????????????????!</h2>
                            <form action="#" method="POST">
                            <input type="text" name="name" placeholder="???? ??????">
                            <input type="tel" name="phone" placeholder="??????????">
                            <input type="email" name="email" placeholder="???????????">
                            <input type="submit" value="??????????">
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
                </div>
            </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
	      <script type="text/javascript">
            var actionLink = 'ajax.php';
            $("form").submit(function(e) {
                var postData = $(this).serializeArray();

                postData[postData.length] = {
                    name: "utm_source",
                    value: "<?=$utm_source?>"
                };
                postData[postData.length] = {
                    name: "utm_campaign",
                    value: "<?=$utm_campaign?>"
                };
                postData[postData.length] = {
                    name: "utm_term",
                    value: "<?=$utm_term?>"
                };
                postData[postData.length] = {
                    name: "utm_content",
                    value: "<?=$utm_content?>"
                };
                postData[postData.length] = {
                    name: "mobile",
                    value: "<?=$mobile?>"
                };
                postData[postData.length] = {
                    name: "fullip",
                    value: "<?=$fullip?>"
                };

                $.ajax({
                    url: actionLink,
                    type: "POST",
                    data: postData,
                    success: function(data, textStatus, jqXHR) {
                        if (data == "error") {
                            window.alert("???????? ???????? ???? ?????????? ??????????????, ?????? ??????????.");
                        } else {
							//SendLead();
                            $('form').fadeOut().html('<h3 style="text-align:center;color:#000;font-size:20px;">?????????? ???????? ????????????</h3>').fadeIn();
							window.location = "thankyou.php";
                        }
                    },
                    error: function(request, error) {
                        console.log(error);
						
                    }
                });
                e.preventDefault();
                return false;
            });
			
			</script>				
    </body>
</html>
