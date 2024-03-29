<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    const SEX_UN=10; // 未知
    const SEX_BOY=20; // 男
    const SEX_GRIL=30;  // 女
    protected $table = 'student';

    // 批量赋值
    protected $fillable =['name','age','sex'];
    // 自动维护时间戳
    public $timestamps = true;

    protected function getDateFormat()
    {
        return time();
    }

//    不想时间格式化
    protected function asDateTime($val)
    {
        return $val;
    }

    public function fromDateTime($value)
    {
        return empty($value) ? $value : $this->getDateFormat();
    }

    public function sex($ind=null)
    {
        $arr=[
            self::SEX_UN=>'未知',
            self::SEX_BOY=>'男',
            self::SEX_GRIL=>'女',
        ];

        if ($ind!=null){
            return array_key_exists($ind,$arr) ? $arr[$ind] : $arr[self::SEX_UN];
        }
        return $arr;
    }


}