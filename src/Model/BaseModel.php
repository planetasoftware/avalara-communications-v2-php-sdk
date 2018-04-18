<?php

namespace PlanetaSoftware\Avalara\Communications\Model;

/**
 * Description of AbstractModel
 *
 * @author oa
 */
abstract class BaseModel {
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [];

    private $rawJson;

    public function toJson() {
        return json_encode($this);
    }

    public function toArray() {
        return json_decode($this->toJson());
    }

    public static function createFromArray($array, $class = null) {
        //if no class, take the caller class
        if(is_null($class)){
            $class = static::class;
        }
        
        //create object
        $obj = new $class();

	//save json version of object
	$obj->setRawJson(json_encode($array));

        //foreach $key => $value pair on the array
        foreach ($array as $key => $value) {
            //check if there is an attribute mapping for $key
            if (array_key_exists($key, $class::ATTRIBUTE_MAPPING)) {
                //if array, generate an array of objects
                if (is_array($value) || array() === $array) {
                    $result = [];
                    foreach ($value AS $singleValue) {
                        $result[] = self::createFromArray((array) $singleValue, $class::ATTRIBUTE_MAPPING[$key]);
                    }
                    $obj->$key = $result;
                } else {
                    //else, generate a single object
                    $obj->$key = self::createFromArray($value, $class::ATTRIBUTE_MAPPING[$key]);
                }
            } else {
                //no attribute mapping. It should be a primitive type
                $obj->$key = $value;
            }
        }
        return $obj;
    }

    public function setRawJson($json){
	$this->rawJson = $json;
	return $this;
    }
    public function getRawJson(){
	return $this->rawJson;
    }

}
