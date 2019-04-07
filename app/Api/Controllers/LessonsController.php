<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/6
 * Time: 4:46 PM
 */

namespace App\Api\Controllers;

use App\Api\Transformers\LessonTransformer;
use App\Lessons;

class LessonsController extends BaseController
{
    public function index()
    {
		$lessons = Lessons::all();
        return $this->response->collection($lessons, new LessonTransformer());
    }
}
