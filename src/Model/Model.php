<?php

namespace Blogpress\Model;

class BaseModel 
{
        protected $primaryKey;
        protected $f3;
    
        public function __construct(array $data=[])
        {
            $this->f3 = \Base::instance();
            foreach ($data as $property => $value) {
                //answer_id
                //answer id
                //Answer Id
                //AnswerId
                $method = "set" . str_replace(" ", "", ucwords(str_replace("_", " ", $property)));
                if (is_callable([$this, $method])) {
                    $this->$method($value);
                }
    
            }
        }
    
        public function toArray(): array 
        {
            $ret = [];
            foreach (get_object_vars($this) as $property => $value) {
                if ($value === null) {
                    continue;
                }
                $method = "get" . str_replace(" ", "", ucwords(str_replace("_", " ", $property)));
                if (is_callable([$this, $method])) {
                    $ret[$property] = $this->$method();
                }
    
            }
    
    
    
            return $ret;
        }
    
        public function getId() 
        {
            $method = "get" . str_replace(" ", "", ucwords(str_replace("_", " ", $this->primaryKey)));
    
            return $this->$method();
        }
    }

