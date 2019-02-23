<?php 
// $url='http://www.kuaidi100.com/query?type=zhongtong&postid=75121384132040';
// // 1. 初始化
//  $ch = curl_init();
//  // 2. 设置选项，包括URL
//  curl_setopt($ch,CURLOPT_URL,$url);
//  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//  curl_setopt($ch,CURLOPT_HEADER,0);
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器  
//  // 3. 执行并获取HTML文档内容
//  $output = curl_exec($ch);
//  echo $output;
//  if($output === FALSE ){
//  echo "CURL Error:".curl_error($ch);
//  }
//  // 4. 释放curl句柄
//  curl_close($ch);


$url='https://www.qt86.com/';
// 1. 初始化
 $ch = curl_init();
 // 2. 设置选项，包括URL
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_HEADER,0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //设置post方式提交
   curl_setopt($ch, CURLOPT_POST, 1);
    //设置post数据
   $post_data = array(
   	'text'=>'你好吗',
'ziti'=>'12',
'sizes'=>'32',
'fontcolor'=>'#000000',
'colors'=>'背景透明',
'if_demo'=>'show'
      );
   curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($post_data) );
//curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器  
 // 3. 执行并获取HTML文档内容
 $output = curl_exec($ch);


$pattern = '/src="\.(.+?)" id="SaveImg"/is';
preg_match_all($pattern,$output, $results);
$str=$results[1][0];
$varstr="https://www.qt86.com".$str;
var_dump($varstr);die;

 if($output === FALSE ){
 echo "CURL Error:".curl_error($ch);
 }
 // 4. 释放curl句柄
 curl_close($ch);

