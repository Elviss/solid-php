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
        $img = $html->img('img/photo.png');
        
        $this->assertEquals("<img src='img/photo.png'>", $img);
        
    }

    public function testCriarTagAComImgAncora()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $a = $html->a('www.exemplo.com.br', $img);
        
        $this->assertEquals("<a href='www.exemplo.com.br'><img src='img/photo.png'></a>", (string)$a);

    }

    public function testCriarTagAComClassEId()
    {
        $html = new Html;

        $a = $html->a('www.exemplo.com.br', 'Meu Site');
        $a->attribute(array(
            'class' => 'btn btn-default'    
        ));
        
        $this->assertEquals("<a href='www.exemplo.com.br' class='btn btn-default'>Meu Site</a>", $a);

    }
}