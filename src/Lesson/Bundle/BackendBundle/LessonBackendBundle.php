<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 9:21 PM
 */

namespace Lesson\Bundle\BackendBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;

class LessonBackendBundle extends Bundle {

    public function getAlias()
    {
        return "lesson_backendbundle";
    }
}