<?php namespace ChicoRei\Packages\Restify\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * Class Controller
 *
 * @package ChicoRei\Packages\Restify\Http\Controllers
 */
abstract class Controller extends BaseController {

    use DispatchesJobs, ValidatesRequests;

}
