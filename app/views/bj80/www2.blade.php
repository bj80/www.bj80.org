@section('title')
    <title>BJ80.ORG</title>
@stop
@section('css')
    <link href="./public/bj80/www/css/custom.css" rel="stylesheet">
@stop
@section('body')
    <div class="full-scr-bg"></div>
    <div class="site-wrapper">
        <div class="lang-change">
          <!-- <a href="./cn">中文</a> -->
        </div>
      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">BJ80.ORG</h3>
              <p>The Students' Community</p>
<!--               <ul class="nav masthead-nav">
                <li><a href="http://dlc.bj80.org" target="_blank" title="Dawning Literature Circle">DLC</a></li>
                <li><a href="http://yx.va80.net/" target="_blank" title="Visual Art">VA</a></li>
                <li><a href="http://www.vijos.org" target="_blank" title="Velocious Informatics Judge Online System">VIJOS</a></li>
              </ul> -->
            </div>
          </div>

          <div class="inner cover">
<!--             <h1 class="cover-heading">BJ80 LOGO here</h1> -->
            <img class="logo" width="40%" style="max-width:260px;" src="http://bj80org.cdn.zenkr.com/www/static/img/logo.png">
<!--             <p class="lead">intro</p> -->
<!--             <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p> -->
          </div>

          <div class="mastfoot">
            <div class="inner hidden-xs">
              <p>&copy; 2015 <a href="http://www.bj80.org" target="_blank">BJ80.ORG</a> , designed by <a href="http://www.zenkr.com" target="_blank">zenkr</a> .</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <div class="visible-xs-block">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div id="dlc" class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne" style="background:rgba(48,142,230,0.5);">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <img src="http://bj80org.cdn.zenkr.com/www/static/img/dlc-logo.png" height="60px" style="margin-left:10px;margin-right:22px;">
                  Dawning Literature Circle
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <br>

              </div>
              <ul class="list-group" style="">
                <li class="list-group-item">View Website</li>
              </ul>
            </div>
          </div>
          <div id="va" class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo" style="background:rgba(235,97,0,0.5);">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <img src="http://bj80org.cdn.zenkr.com/www/static/img/va-logo.png" height="60px" style="margin-left:10px;margin-right:22px;">
                  Visual Arts
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <br>
              </div>
            </div>
          </div>
          <div id="vijos" class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree" style="background:rgba(143,195,31,0.5);">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <img src="http://bj80org.cdn.zenkr.com/www/static/img/vijos-logo.png" height="60px" style="margin-left:10px;margin-right:22px;">
                  Velocious Informatics Judge Online System
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <br>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="visible-xs-block">
      <p>&copy; 2015 <a href="http://www.bj80.org" target="_blank">BJ80.ORG</a> , designed by <a href="http://www.zenkr.com" target="_blank">zenkr</a> .</p>
    </div>
@stop