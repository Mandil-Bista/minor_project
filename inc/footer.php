<!-- <script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script> -->

<!-- Footer-->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img class=" m-auto" src="assets/img/Logo.png" alt="">
                <p class="m-auto pt-3" >Kitab-Hut is a website for readers who want to sell, buy or rent the books.</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2" >Quick Links</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="seller.php">Seller Form</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2" >Contact Us</h5>
               <div>
                <h6 class="text-uppercase">Address</h6>
                  <p>Kathmandu, Nepal</p>
               </div>
               <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>9812345678</p>
               </div>
               <div>
                <h6 class="text-uppercase">Email</h6>
                <p>kitabhut@gmail.com</p>
               </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2" >Featured Images</h5>
              <div class="row">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book9.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book7.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book2.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book5.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book1.jpg" alt="">
                <img class="image-fluid w-25 h-100 m-2"   src="assets/img/book4.jpg" alt="">

              </div>
            </div>
        </div>
        <div class="copyright mt-5">

                <div class="container text-center col-lg-3 col-md-6 col-12 text-nowrap">
                    <p>kitabhut eCommerce © 2023. All Rights Reserved</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <style>

      footer {
  background-color: palegoldenrod;
  color: black;
  padding: 0px 0px;
  margin: 0px;
}

footer a {
  color: black;
}

footer ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

footer h5 {
  font-weight: bold;
  text-transform: uppercase;
}

footer .footer-one {
  padding: 0 15px;
}

footer .footer-one img {
  max-width: 100%;
}

footer .footer-one p {
  font-size: 0.9rem;
  line-height: 1.5;
}

footer .footer-one ul li {
  margin-bottom: 5px;
}

footer .footer-one ul li a:hover {
  color: blue;
}

footer .footer-one ul li a:active {
  color: black;
}

footer .footer-one ul li a:focus {
  color: black;
  text-decoration: underline;
}

footer .footer-one ul li a {
  color: black;
  text-decoration: none;
}

footer .footer-one .text-uppercase {
  font-size: 0.9rem;
}

footer .footer-one h6 {
  font-size: 0.9rem;
  font-weight: bold;
  text-transform: uppercase;
}

footer .footer-one p {
  font-size: 0.9rem;
  line-height: 1.5;
}

footer .footer-one .row {
  margin: 0 -5px;
}

footer .footer-one img {
  display: block;
}

footer .footer-one img:hover {
  opacity: 0.8;
}

footer .footer-one .col-lg-3 {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}

footer .col-lg-3:last-child {
  text-align: right;
}

footer .col-lg-3:last-child a {
  display: inline-block;
  margin-left: 10px;
}

footer .col-lg-3:last-child a:hover {
  color: #ffd500;
}

footer .col-lg-3:last-child a:active {
  color: #fff;
}

footer .col-lg-3:last-child a:focus {
  color: #fff;
  text-decoration: underline;
}

footer .col-lg-3:last-child i {
  font-size: 1.5rem;
}

@media (min-width: 992px) {
  footer .footer-one {
    flex: 1 1 0%;
  }
}

    </style>