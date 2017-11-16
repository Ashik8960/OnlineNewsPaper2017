<div class="footer-area-head adminfooter">
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <img src="{{url('img/logo.png')}}" alt="">
            </div>
        </div>
    </div>


</div>
<div class="footer-area">
    <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <footer>

                <p>&copy; 2017-{{date('Y')}}</p>

            </footer>
          </div>
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