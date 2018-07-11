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
        return "<a href='$href'>$anchor</a>";
    }
}