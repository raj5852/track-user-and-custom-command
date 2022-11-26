<?php
namespace Raj5852\Usertracker\Trait;

use Raj5852\Usertracker\Models\LoginAttempt;

trait Track{
    public function wallets(){
        return $this->hasOne(Wallet::class);
    }

    function trackUser($id){
        LoginAttempt::create([
            'user_id'=>$id,
            'ip_address'=> request()->ip()
        ]);
    }

    function allLoginDetails(){
        return $this->hasMany(LoginAttempt::class);
    }

    function currentDetails(){
        return $this->allLoginDetails();
    }
}
