<?php
/*
 �������� PHP������ܹ��� Xend [רҵ��](Build 5.05.55) ����
 ����ʱ�� 2020-06-12 11:37:23
 ����֧�� QQ:30370740 Mail:support@phpXend.com
 �Ͻ������롢������κ���ʽ����Ȩ��Ϊ��Υ�߽�׷����������
*/

namespace App\Jobs;if(!defined("A__A_AAAAA"))define("A__A_AAAAA","A__AA_____");$GLOBALS[A__A_AAAAA]=explode("|W|}|%", "A__A_A_A_A");if(!defined($GLOBALS[A__A_AAAAA][0]))define($GLOBALS[A__A_AAAAA][0], ord(15));use Illuminate\Bus\Queueable;use Illuminate\Queue\SerializesModels;use Illuminate\Queue\InteractsWithQueue;use Illuminate\Contracts\Queue\ShouldQueue;use Illuminate\Foundation\Bus\Dispatchable;use App\DAO\BlockChain;class UpdateBalance implements ShouldQueue{use Dispatchable,InteractsWithQueue,Queueable,SerializesModels;protected $wallet;protected $noBalanceContinue=false;public function __construct($wallet,$no_balance_continue=false){unset($A__A_AA___);unset($V36tI8N);$this->wallet=$wallet;unset($A__A_AA___);unset($V36tI8N);$this->noBalanceContinue=$no_balance_continue;}public function handle(){BlockChain::updateWalletBalance($this->wallet,$this->noBalanceContinue);}}
?>