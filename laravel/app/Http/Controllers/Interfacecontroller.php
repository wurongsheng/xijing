<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Memcache;


class Interfacecontroller extends Controller
{
     public function select()
    {
          $mem=new Memcache;
          //print_r($mem);die;
          $memca= $mem->connect("localhost",11211);
          print_r($memca);die;
          if (!$mem->get($data)) {
             echo 1;
            // $arr = DB::table("$tablename")->get();
            // //print_r($arr);die;
            // require_once('../app/libs/Response/json.php');
            // $image_arr=Response::json(200,'数据返回成功',$arr);
            // //print_r($image_arr);die;
            // $mem->set($data,$image_arr);
            // return $image_arr = $mem->get($data);
          }else{
            echo 2;
            //return $mem->get($data);
          }
    }

    public function responses($arr)
    {
        //引用第三方类文件
        require_once('../app/libs/Response/json.php');
        echo Response::json(200,'数据返回成功',$arr);
    }

    /**
     * Display a listing of the resource.
     *首页轮播图查询
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // // //引用第三方类文件
      //   // echo 121212;die;
      //    $tablename = 'image';
      //   //查询数据的名称
      //   $data = "image_arr";
      //   return $arr = $this->select($tablename,$data);
      
      $arr=DB::table('image')->get();
        $json=$this->responses($arr);
        return $json;
    }

    /**
     * Display a listing of the resource.
     *首页校园简介查询
     * @return \Illuminate\Http\Response
     */
    public function brief()
    {
        $arr=DB::table('brief')->get();
        $json=$this->responses($arr);
        return $json;

    }

    /**
     * Display a listing of the resource.
     *首页校园资讯查询
     * @return \Illuminate\Http\Response
     */
    public function information()
    {
        $arr=DB::table('information')->get();
        $json=$this->responses($arr);
        return $json;

    }

    /*
    申请推迟报道
     */
    public function delay(Request $request)
    {
         
        //接值
        $data=$request->input();
        // print_r($data);die;
        //去空
        foreach ($data as $key => $value) {
            if($value=='')
            {
                unset($data[$key]);
            }
        }

        unset($data['callback']);
        unset($data['_']);
          // print_r($data);die;
        $arr=DB::table("delay")->insert($data);
        //Cache::put($arr)
        // echo $res;die; 
        $json=$this->responses($arr);
        //print_r($json);die;
        return $json;
    }

    /*
    个人信息
     */
    public function green(Request $request)
    {
        //接值
        $data=$request->input();
        //print_r($data);die;
        //去空 
        foreach ($data as $key => $value) {
            if($value=='')
            {
                unset($data[$key]);
            }
        }
        
        unset($data['callback']);
        unset($data['_']);
          // print_r($data);die;
        $arr=DB::table("green")->insert($data);
        // echo $res;die; 
        $json=$this->responses($arr);
        //print_r($json);
        return $json;
    }

    /*
    个人信息
     */
    public function user(Request $request)
    {
        //接值
        $data=$request->input();
        //print_r($data);die;
        //去空 
        foreach ($data as $key => $value) {
            if($value=='')
            {
                unset($data[$key]);
            }
        }
        
        unset($data['callback']);
        unset($data['_']);
          // print_r($data);die;
        $arr=DB::table("user_info")->insert($data);
        $json=$this->responses($arr);
        print_r($json);
        return $json;
    }

    /*
    宿舍预定
     */
    public function dorm(Request $request)
    {
        //接值
        $data=$request->input();
        //print_r($data);die;
        //去空 
        foreach ($data as $key => $value) {
            if($value=='')
            {
                unset($data[$key]);
            }
        }
        
        unset($data['callback']);
        unset($data['_']);
          // print_r($data);die;
        $arr=DB::table("dorm")->insert($data);
        $json=$this->responses($arr);
        return $json;
    }
    /*
    抵校登记
     */
    public function arrive(Request $request)
    {
        //接值
        $data=$request->input();
        //print_r($data);die;
        //去空 
        foreach ($data as $key => $value) {
            if($value=='')
            {
                unset($data[$key]);
            }
        }
        
        unset($data['callback']);
        unset($data['_']);
          // print_r($data);die;
        $arr=DB::table("arrive")->insert($data);
        $json=$this->responses($arr);
        return $json;
    }

    /*
    报到单
     */
    public function reportCard()
    {
        

       $arr = DB::table('user_info')
            ->join('dorm', 'user_info.user_id', '=', 'dorm.dorm_id')
            ->join('arrive', 'user_info.user_id', '=', 'arrive.arrive_id')
            ->join('delay', 'user_info.user_id', '=', 'delay.delay_id')
            ->join('green', 'user_info.user_id', '=', 'green.green_id')
            ->get();
       $json=$this->responses($arr);
        return $json;
    }

    /*
    常见问题
     */
    public function commonquestion()
    {
         $arr=DB::table('commonquestion')->get();
        $json=$this->responses($arr);
        return $json;
    }

    /*
    我要提问
     */
    public function tiwen(Request $request)
    {

        //接值
        $data=$request->input();
        //print_r($data);die;
        //去空 
        foreach ($data as $key => $value) {
            if($value=='')
            {
                unset($data[$key]);
            }
        }
        
        unset($data['callback']);
        unset($data['_']);
          // print_r($data);die;
        $arr=DB::table("wenti")->insert($data);
        $json=$this->responses($arr);
        //print_r($json);die;
        return $json;
    }

    /*
    我的提问
     */
    public function myanswer()
    {
        $arr=DB::table('wenti')->get();
        $json=$this->responses($arr);
        return $json;
    }
}
