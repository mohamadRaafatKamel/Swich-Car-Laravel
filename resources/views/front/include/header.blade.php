      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">




                  <div class="col-md-8 col-sm-12">
                     <div class="navbar-header">
                        <div class="nav-b">
                           <div class="nav-box">
                              <ul>
                                  <li> <a data-toggle="modal" data-target="#myModal" href="#">الرسائل</a> </li>
                                  <li><a href="#">صفقات جاهزه</a></li>
                                  <li><a href="{{ route('home') }}">الرئيسيه</a></li>
                              </ul>
                           </div>
                        </div>

                         <div class="login-sr">
                             <div class="login-signup">
                                 <ul>
                                     <li><a class="custom-b" href="{{ route('register') }}">انشاء حساب</a></li>
                                     <li><a href="{{ route('login') }}">تسجيل دخول</a></li>
                                 </ul>
                             </div>
                         </div>

                     </div>
                  </div>

                   <div class="col-md-4 col-sm-12 left-rs">
                       <div class="right-nav">
                           <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                           <a href="index.html" class="navbar-brand"><img src="{{asset('assets/front/images/logo.png')}}" alt="" /></a>
                       </div>
                   </div>


               </div>
            </div>
            <!--/.container-fluid -->
         </nav>
      </header>
      <!-- Modal -->

      <!-- pop up menu -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">الرسايل</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <!-- mobile mode -->
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="howitworks.html">How it works</a></li>
            <li><a href="#">chamb for Business</a></li>
         </ul>
      </div>
