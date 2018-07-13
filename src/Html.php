<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 11/07/18
 * Time: 00:04
 */

namespace Solid\Html;

class Html
{

    public function img(string $src)
    {
        return "<img src='$src'>";
    }

    public function a(string $href, string $anchor)
    {
        $tag = new class {

            private $attributes;
            
            public function attribute(array $attributes)
            {
                $result = array();

                foreach ($attributes as $key => $value) {
                    $result[] = $key . "='" . $value . "'"; 
                }
                
                $this->attributes = ' '.implode(' ', $result);
            }
            
            public function __toString()
            {
                return "<a href='$this->href'$this->attributes>$this->anchor</a>"; 
            }    
        };
        
        $tag->href = $href;
        $tag->anchor = $anchor;
        
        return $tag;
    }
}