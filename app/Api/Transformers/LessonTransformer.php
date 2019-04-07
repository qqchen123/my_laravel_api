<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/6
 * Time: 8:05 PM
 */

namespace App\Api\Transformers;

use App\Lessons;
use League\Fractal\TransformerAbstract;

class LessonTransformer extends TransformerAbstract
{
    public function transform(Lessons $lessons)
    {
        return [
            'title'   => $lessons['title'],
            'content' => $lessons['body'],
            'is_free' => (boolean)$lessons['free'],
        ];
    }
}
