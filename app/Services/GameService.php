<?php

namespace App\Services;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Mockery\Generator\Method;

class GameService{
    // 帶玩家遊戲進度資訊
    
    
    public function getUserLevel(Request $req, User $user_id){
        if ($req.method() == 'get'){
            // 存取遊戲進度
            $userLevel = auth()->user()->level()->id;

            if ($userLevel == 0){
                // 宣告變數並賦值給遊戲畫面的進度參數
                
            }
            
        }
        else{
            return response('http status error');                                                                             
        }
    }
    






}