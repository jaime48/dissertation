<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generateRandomPassword extends Model
{
    private $alpha = "abcdefghijklmnopqrstuvwxyz";
    private $has_alpha= true;
    private $alpha_upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    private $has_alpha_upper= true;
    private $numeric = "0123456789";
    private $has_numeric= true;
    private $special = ".-+=_,!@$#*%<>[]{}";
    private $has_special= false;
    private $length = 8;
    private $string ;
    private $password;

    /**
     * @param bool $alpha
     * @param bool $alpha_upper
     * @param bool $numeric
     * @param bool $special
     * @param int $length
     * constructor:decide which kinds of string types should be used
     */
    public function generateRandomPassword($alpha=true,$alpha_upper=true,$numeric=true,$special=false,$length=8){
        $alpha==true?$this->has_alpha=true:$this->has_alpha=false;
        $alpha_upper==true?$this->has_alpha_upper=true:$this->has_alpha_upper=false;
        $numeric==true?$this->has_numeric=true:$this->has_numeric=false;
        $special==true?$this->has_special=true:$this->has_special=false;
        $this->length = $length;
    }

    /**
     * @return string
     * generate random password
     */
    public function generate(){
        $this->has_alpha==true?$this->string.=$this->alpha:null;
        $this->has_alpha_upper==true?$this->string.=$this->alpha_upper:null;
        $this->numeric==true?$this->string.=$this->numeric:null;
        $this->has_special==true?$this->string.=$this->special:null;
        do{
            $this->password = $this->randomString($this->string,$this->length);
        }while(!$this->verify($this->password));

        return $this->password;
    }

    /**
     * @param $string
     * @param $length
     * @return string
     * random char from given string
     */
    public function randomString($string,$length){
        $randomString ='';
        $len = strlen($string);
        for($i=0;$i<$length;$i++){
            $randomString .= substr($string, rand(0, $len-1), 1);
        }
        return $randomString;
    }

    /**
     * @param $string
     * @return bool
     * verify generated password by each rule
     */
    public function verify($string){
        if( $this->verifyEach('has_alpha','alpha',$string) &&
            $this->verifyEach('has_alpha_upper','alpha_upper',$string) &&
            $this->verifyEach('has_numeric','numeric',$string) &&
            $this->verifyEach('has_special','special',$string)
        ){
            return true;
        }
        return false;
    }

    /**
     * @param $type
     * @param $string
     * @param $verifyString
     * @return bool
     * verify whether generated password has required string
     */
    public function verifyEach($type,$string,$verifyString){
        if($this->$type==true){
            $arr = str_split($verifyString);
            foreach($arr as $value){
                if(!(strpos($this->$string, $value)===false)){
                    return  true;
                }
            }
            return false;
        }else{
            return true;
        }
    }


}
