<?php
/*
 �������� PHP������ܹ��� Xend [רҵ��](Build 5.05.55) ����
 ����ʱ�� 2020-06-12 11:02:20
 ����֧�� QQ:30370740 Mail:support@phpXend.com
 �Ͻ������롢������κ���ʽ����Ȩ��Ϊ��Υ�߽�׷����������
*/

namespace App;if(!defined("AA______AA_AAA"))define("AA______AA_AAA","AA______AAA___");$GLOBALS[AA______AA_AAA]=explode("|>|(|%", "AA______AA____");if(!defined("AA______AA__AA"))define("AA______AA__AA","AA______AA_A__");$GLOBALS[AA______AA__AA]=explode("|B|V|i", "user_id");if(!defined($GLOBALS[AA______AA_AAA]{0}))define($GLOBALS[AA______AA_AAA]{0}, ord(78));use Illuminate\Database\Eloquent\Model;class UserProfile extends Model{public function user(){return $this->belongsTo(Users::class,$GLOBALS[AA______AA__AA][00]);}}
?>