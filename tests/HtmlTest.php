<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 10/07/18
 * Time: 23:39
 */

namespace Solid\Html;

class HtmlTest extends \PHPUnit\Framework\TestCase
{

    public function testCriarTagImgComSrc()
    {
        $html = new Html;
        $img = new $html->img('img/photo.png');
        
        $this->assertEquals('<img src="img/photo.png">', $img);
        
    }
}