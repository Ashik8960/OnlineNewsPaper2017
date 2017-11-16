 <hr>
    <div class="footer-area-head">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <img src="{{asset('img/logo.png')}}" alt="">
              </div>
          </div>
   </div>


    </div>
 <div class="footer-area">
     <div class="container">

         <div class="row">
             <div class="col-md-3">
                 <div class="footer-items">
                 <ul>

                     <li><a href="{{url('/')}}">জাতীয়</a></li>
                     <li><a href="{{url('/politics')}}">রাজনীতি</a></li>
                     <li><a href="{{url('/sports')}}">খেলা</a></li>
                     <li><a href="{{url('/economics')}}">অথনীতি</a></li>


                 </ul>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="footer-items">
                 <ul>

                     <li><a href="{{url('/international')}}">আন্তজাতিক</a></li>
                     <li><a href="{{url('/editors')}}">সম্পাদকীয়</a></li>
                     <li><a href="{{url('/entertainment')}}">বিনোদন</a></li>
                     <li><a href="{{url('/educations')}}">শিক্ষাঙ্গন</a></li>


                 </ul>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="footer-items">
                 <ul>

                     <li><a href="{{url('/features')}}">ফিচার</a></li>
                     <li><a href="{{url('/others')}}">অন্যান্য</a></li>
                     <li><a href="{{url('/mail')}}">যোগাযোগ</a></li>

                 </ul>
                 </div>
             </div>
         </div>




             <div class="row">
                 <footer>

                     <p>&copy; 2017-{{date('Y')}}</p>

                 </footer>
               </div>
     </div>
 </div>

  <script src="{{ asset('js/jquery-3.2.1.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
 <script>

     $(document).ready(function () {
         $('.marquee').animate({
             "background":"red"
         });
     });

 </script>
  </body>
</html>