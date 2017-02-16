 <div class="footer_top">
    <div class="container" >
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInLeft">
            
           <a class="brand" href="#"><img src="{!! asset('css/img/logo-v2.png') !!}" alt="Logo" height="200px"></a>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>Labels</h2>
            <ul class="labels_nav">
             @foreach($categories as $cate)
              <li><a href="#">{{trans($cate->name)}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>About Us</h2>
            <p><span style="font-size: 20px">.Rs group</span>のメンバーは各々夢を持っています。その夢を叶える為に集まった集団です。
みんなで夢を共有し応援し合います。そんな人達が集まったGroupです。 </p>
  <p>当サイトに掲載されている全てのデータの著作権は “Rs group” に属します。無断転載・複製を堅く禁じます。
ご意見ご感想、ご要望等は</p><a href="mailto:www.dotrsgroup@gmail.com">www.dotrsgroup@gmail.com</a>まで</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2017 <a href="index.html"></a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p>Developed BY Star</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script>
            

        </script>
        <script>
            $(document).ready(function() {
                var url = window.location.pathname;
                var data = ['en', 'jp', 'cn'];
                if (url.split("/")[2] == 'en') {
                $('#select-language').html('<img src="{{ asset('images/en.gif') }}" alt="" /><span class="caret"></span>');
                } else if (url.split("/")[2] == 'jp') {
                $('#select-language').html('<img src="{{ asset('images/ja.gif') }}" alt="" /><span class="caret"></span>');
                } else if (url.split("/")[2] == 'cn') {
                $('#select-language').html('<img src="{{ asset('images/china.png') }}" alt="" /><span class="caret"></span>');
                }

            });
        </script>