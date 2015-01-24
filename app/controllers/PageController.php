<?php

class PageController extends BaseController {

    public function contentReturn($domain3,$domain2,$domain1, $pagepath = '/')
    {
        // $conf = yaml_parse_file ('/zsrv/etc/uniuid-tmp/yaml/about.yaml');
        // return Response::json($conf);
        // return 'your domain name is '.$domain2. '. your path is ' . $pagepath;
        // return 'your domain name is'.$domain2. '. your path is' . Request::path();
if($pagepath != "/"){
    if (View::exists($domain2.'.'.$domain3.'-'.$pagepath))
    {
        return View::make($domain2.'.'.$domain3.'-'.$pagepath);
    }

}
else{
    if (View::exists($domain2.'.'.$domain3)) {
        return View::make($domain2.'.'.$domain3);
    }

}
    }

}
