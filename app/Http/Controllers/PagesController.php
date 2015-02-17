<?php namespace App\Http\Controllers;

use App\Art;
use App\Circle;
use App\Collections;
use App\Carousel;
use App\Http\Requests;
use Ivory\GoogleMap\Map,
	Ivory\GoogleMap\Helper\MapHelper,
	Ivory\GoogleMap\Overlays\Marker;



class PagesController extends Controller {

	public function index() {

		$collections = Collections::all();
		$carousel = Carousel::all();
		$circles = Circle::all();

		$mapJs = $this->getMapCode();
		/*$captcha = app('captcha')->display();*/
		//return $captcha;
		return view('pages.index')->with(compact('collections', 'carousel', 'circles', 'mapDiv', 'mapJs'));
	}
	public function collection($id) {
		$collection = Collections::findOrFail($id);
		$pieces = Art::all()->where('collection', $id);
		return view('pages.collection', compact('collection', 'pieces'));
	}

	public function store() {
		/*$validate = Validator::make(Input::all(), [
			'g-recaptcha-response' => 'required|captcha'
		]);
		return $validate;*/
	}

	private function getMapCode() {
		$map = new Map();
		$map->setCenter(51.228793, 51.4102534, true);
		$map->setMapOption('zoom', 12);

		$marker = new Marker();
		$marker->setPrefixJavascriptVariable('marker_');
		$marker->setPosition(51.228793, 51.4102534, true);

		$map->addMarker($marker);

		$mapHelper = new MapHelper();
		return $mapHelper->renderJavascripts($map);
	}

}