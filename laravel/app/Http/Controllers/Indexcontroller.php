<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Response;
use DB,Session,Config,Mail;  
use Cache;  
use Redis;
use Memcache;

class Indexcontroller extends Controller
{
    public function responses($url,$method)
    {
        //引用第三方类文件
        require_once('../app/libs/Response/json.php');
        $json=Response::curlPost($url,$method);
        return json_decode($json,true);
    }
    /**
     * Display a listing of the resource.
     *首页
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mem=new Memcache();  
        //        $mem->connect("127.0.0.1",11211);  
        //        $mem->set("name",'haoyunyun');  
        //        echo $mem->get("name");  die;
        //Cache::put('key1','wagnwu',30);
        //print_r(Cache::get('key1'));die;  
        //print_r($arr);die;
        //http://www.laravel.com/public/commonquestion_add
        //轮播图
        $url="http://www.laravel.com/public/interface";
        $method="GET";
        $arr=$this->responses($url,$method);
        //print_r($arr);die;
        //校园简介
        $url1="http://localhost/shixun/laravel/public/brief";
        $json1=file_get_contents($url1);
        //print_r($json);die;
        //echo $json;die;
        $arr1=json_decode($json1,true);
        //print_r($arr1);die;
        //校园咨询
        $url2="http://localhost/shixun/laravel/public/information";
        $json2=file_get_contents($url2);
        //print_r($json);die;
        //echo $json;die;
        $arr2=json_decode($json2,true);
        //print_r($arr1);die;
        return view('index.index',['arr'=>$arr['data'],'arr1'=>$arr1['data'],'arr2'=>$arr2['data']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function self()
    {
        return view('index.self-report');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function green()
    {
        return view('index.green');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arrive()
    {
        return view('index.arrive');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function must()
    {
        return view('index.must-know');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delay()
    {
        return view('index.delay');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notice()
    {
        return view('index.notice');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        return view('index.data');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ask()
    {
        return view('index.ask');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function entrance()
    {
        return view('index.entrance');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
        return view('index.user-center');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function route()
    {
        return view('index.route');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_info()
    {
        return view('index.user-info');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changepsw()
    {
        return view('index.changepsw');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dorm(Request $request)
    {
        // $data=$request->input();
        // print_r($data);die;
        return view('index.dorm-book');
    }

    /**
     * Display a listing of the resource.
     *报到单
     * @return \Illuminate\Http\Response
     */
    public function reportCard()
    {
        $url="http://www.laravel.com/public/reportCard_add";
        $method="GET";
        $arr=$this->responses($url,$method);
        //print_r($arr);die;
        return view('index.reportCard',['arr'=>$arr['data']]);
    }

    /**
     * Display a listing of the resource.
     *常见问题
     * @return 
     */
    public function commonquestion()
    {
         $url="http://www.laravel.com/public/commonquestion_add";
        $method="GET";
        $arr=$this->responses($url,$method);
        //print_r($arr);die;
        return view('index.commonquestion',['arr'=>$arr['data']]);
        //require app_path().'/app/libs/Response/json.php';
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function answer()
    {
        return view('index.answer');
    }
    /**
     * Display a listing of the resource.
     *我的提问
     * @return 
     */
    public function myanswer()
    {   

        $url="http://www.laravel.com/public/myanswer_add";
        $method="GET";
        $arr=$this->responses($url,$method);
        //print_r($arr);die;
        return view('index.myanswer',['arr'=>$arr['data']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tiwen()
    {
        return view('index.tiwen');
    }

    /*
    
     */
    public function user_add(Request $request)
    {
        $data=$request->post();
        print_r($data);die;
        //return $data;
    }

     public function files(Request $request)
    {
        //echo 121212;die;
        $arr = $request->input();
        //print_r($arr);die;
      $file = Input::file('filename');
       print_r($file);die;
        //return $data;
    }

    public function noticeDetail()
    {
        return view('index.noticeDetail');
    }

    public function uploaDate()
    {
        return view('index.uploaDate');
    }
}
