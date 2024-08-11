<?php
function storageurl(){
    return 'http://localhost/paymentapp/storage/app/public/';
}
function adminid($uid){
    $arr = [];
    $data = DB::table('allusers')->where('id',$uid)->first();
    if($data){
        $scholl_id = $data->schoolid;
        if($scholl_id){
            $arr = DB::table('allusers')->where('schoolid',$scholl_id)->where('role','client')->pluck('id')->all();
        }
    }
}
function teacherid($uid){
    $arr = [];
    $data = DB::table('allusers')->where('id',$uid)->first();
    if($data){
        $scholl_id = $data->schoolid;
        if($scholl_id){
            $arr = DB::table('allusers')->where('schoolid',$scholl_id)->where('role','Teacher')->pluck('id');
        }
    }
}
function insert_function($array,$tname){
    $data  =array();
    $data = $array;
    $data['mindate'] = date('Ymd');
    $data['date'] = date('d-m-Y');
    $data['time'] = date('h:i:s a');
    $data['mintime'] = time();
    $lastid = DB::table($tname)->insertGetId($data);
    return $lastid;
}
function update_function($array,$where,$tname){
    $data  = array();
    $data = $array;
    $data['mindate'] = date('Ymd');
    DB::table($tname)->where($where)->update($data);
}
function pickfirstcolumndbwc($db,$where,$column){
    $check =  DB::table($db)->where('id',$where)->first();
    if(!empty($check)){
        return $check->$column;
    }else{
        return 'No data';
    }
}
function getfeeduration($feeid){
    $data = DB::table('feevalue')->where('feeid',$feeid)->first();
    return $data->feetype;
}
function getudata($uid){
    $data = DB::table('adminlogin')->where('id',$uid)->first();
    return $data;
}
function getuserdata($uid){
    $data = DB::table('allusers')->where('id',$uid)->first();
    return $data;
}
function getschooldata($uid){
    $data = DB::table('allschool')->where('id',$uid)->first();
    return $data;
}
function tclassids($tid){
    $data = DB::table('teacher_class')->where('userid',$tid)->pluck('data_id');
    return $data;
}
function tsectionids($tid){
    $data = DB::table('teacher_sec')->where('userid',$tid)->pluck('data_id');
    return $data;
}
function tsubjectids($tid){
    $data = DB::table('teacher_subject')->where('userid',$tid)->pluck('data_id');
    return $data;
}
function getpaymewntkey($uid){
    $data = DB::table('allusers')->where('id',$uid)->first();
    $keys = DB::table('paymentkey')->where('schoolid',$data->schoolid)->first();
    return $keys;
}
function getcandidateid($studentid){
    $data = DB::table('details')->where('student_id',$studentid)->first();
    return $data->id;
}
function getcourseid($coursename){
    $data = DB::table('allcourse')->where('name',$coursename)->first();
    return $data->id;
}
function getdatausingcurl($link){
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $link);       
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    $finaldata = json_decode($output);
    return $finaldata;
}
function getnumberfromstring($string){
    $number = preg_replace('/[^0-9.]/', '', $string);
    $number = floatval($number);
    return $number;
}
function getdmy($date){
    $orderdate = explode('-', $date);
    $month = $orderdate[0];
    $day   = $orderdate[1];
    $year  = $orderdate[2];
    $mindate = $orderdate[2].'-'.$orderdate[1].'-'.$orderdate[0];
    return $mindate;
}
function getmindate($date){
    $orderdate = explode('/', $date);
    $month = $orderdate[0];
    $day   = $orderdate[1];
    $year  = $orderdate[2];
    $mindate = $orderdate[2].$orderdate[1].$orderdate[0];
    return $mindate;
}
function getmindatewithsep($date,$separator){
    $orderdate = explode($separator, $date);
    $month = $orderdate[0];
    $day   = $orderdate[1];
    $year  = $orderdate[2];
    $mindate = $orderdate[2].$orderdate[1].$orderdate[0];
    return $mindate;
}
function getminYmd($date){
    $orderdate = explode('-', $date);
    $mindate = $orderdate[2].$orderdate[1].$orderdate[0];
    return $mindate;
}
function getmonthinnumber($month){
    if($month == 'Jan'){
        $datenumber = '01';
    }
    if($month == 'Feb'){
        $datenumber = '02';
    }
    if($month == 'Mar'){
        $datenumber = '03';
    }
    if($month == 'Apr'){
        $datenumber = '04';
    }
    if($month == 'May'){
        $datenumber = '05';
    }
    if($month == 'Jun'){
        $datenumber = '06';
    }
    if($month == 'Jul'){
        $datenumber = '07';
    }
    if($month == 'Aug'){
        $datenumber = '08';
    }
    if($month == 'Sep'){
        $datenumber = '09';
    }
    if($month == 'Oct'){
        $datenumber = '10';
    }
    if($month == 'Nov'){
        $datenumber = '11';
    }
    if($month == 'Dec'){
        $datenumber = '12';
    }
    return $datenumber;
}
function getmymindate($date){
    $orderdate = explode('-', $date);
    $month = $orderdate[1];
    $day   = $orderdate[0];
    $year  = $orderdate[2];
    $mindate = $year.getmonthinnumber($month).$day;
    return $mindate;
    }
?>