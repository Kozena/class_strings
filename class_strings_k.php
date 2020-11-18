<?php

declare (strict_types = 1);

class StringsBarboraKozena{
    
    /**
     * 
     * @param string $retezec
     * @param int $pozice
     * @return type
     */
    public static function substrBarboraKozena(string $retezec,int $pozice) {
        
        return substr($retezec, $pozice);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $subretezec
     * @param int $pocatek
     * @param type $konec
     * @return string
     */
    public static function substr_replaceBarboraKozena(string $retezec,string $subretezec, int $pocatek, $konec = NULL): string {
        
       if (is_null($konec)){
           return substr_replace($retezec, $subretezec, $pocatek);
       }
       else {
          return substr_replace($retezec, $subretezec, $pocatek, $konec);
       }
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $zretezec
     * @param string $naretezec
     * @return string
     */
    public static function strtrBarboraKozena(string $retezec, string $zretezec, string $naretezec): string {
        
        return strtr($retezec, $zretezec, $naretezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function strtoupperBarboraKozena(string $retezec): string {
        
        return strtoupper($retezec); 
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function strtolowerBarboraKozena(string $retezec): string {
        
        return strtolower($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $subretezec
     * @param type $pozice
     * @return int
     */
    public static function strrposBarboraKozena(string $retezec, string $subretezec, $pozice = NULL): int {
        
        if (is_null($pozice)){
            return strrpos($retezec, $subretezec);     
        }
        else {
            return strrpos($retezec, $subretezec, $pozice); 
        }       
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $subretezec
     * @param type $pozice
     * @return int
     */
    public static function strriposBarboraKozena(string $retezec, string $subretezec, $pozice = NULL): int {
        
        if (is_null($pozice)){
            return strripos($retezec, $subretezec);     
        }
        else {
            return strripos($retezec, $subretezec, $pozice); 
        }       
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $subretezec
     * @param type $pozice
     * @return int
     */
    public static function strposBarboraKozena(string $retezec, string $subretezec, $pozice = NULL): int {
        
        if (is_null($pozice)){
            return strpos($retezec, $subretezec);     
        }
        else {
            return strpos($retezec, $subretezec, $pozice); 
        }       
    }
    
    /**
     * 
     * @param string $retezec
     * @return int
     */
    public static function strlenBarboraKozena(string $retezec): int {
        
        return strlen($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $subretezec
     * @param type $zarazka
     * @return string
     */
    public static function strchrBarboraKozena(string $retezec, string $subretezec, $zarazka = FALSE): string {
        
        if ($zarazka){
            return strchr($retezec, $subretezec, $zarazka);
        }
        else{
            return strchr($retezec, $subretezec);
        }
    }
    
    /**
     * 
     * @param string $vyhledat
     * @param string $nahradit
     * @param string $retezec
     * @param type $pocet
     * @return string
     */
    public static function str_replaceBarboraKozena(string $vyhledat, string $nahradit, string $retezec, $pocet = NULL): string {
         
        if (is_null($pocet)){
            return str_replace($vyhledat, $nahradit, $retezec);     
        }
        else {
            return str_replace($vyhledat, $nahradit, $retezec, $pocet); 
        }       
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function md5BarboraKozena(string $retezec): string {
        
        return md5($retezec);
    }
    
    /**
     * 
     * @param string $rozdelovac
     * @param array $pole
     * @return string
     */
    public static function implodeBarboraKozena(string $rozdelovac, array $pole): string {
        
        return implode($rozdelovac, $pole);
    }
    
    /**
     * 
     * @param string $rozdelovac
     * @param string $retezec
     * @return array
     */
    public static function explodeBarboraKozena(string $rozdelovac, string $retezec): array {
        
        return explode($rozdelovac, $retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @param string $charlist
     * @return string
     */
    public static function addcslashesBarboraKozena(string $retezec, string $charlist): string {
        
        return addcslashes($retezec, $charlist);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function addslashesBarboraKozena(string $retezec): string {
        
        return addslashes($retezec);
    }
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function trimBarboraKozena(string $retezec): string {
        
        return trim($retezec);
    } 
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function ucfirstBarboraKozena(string $retezec): string {
        
        return ucfirst($retezec);
    } 
    
    /**
     * 
     * @param string $retezec
     * @return string
     */
    public static function ucwordsBarboraKozena(string $retezec): string {
        
        return ucfirst($retezec); 
    }     
};

?>