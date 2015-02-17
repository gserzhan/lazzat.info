<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Carousel;
use Request;


class CarouselController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	public function index()
	{
		$carousel = Carousel::all(['id', 'name', 'description']);
		return view('carousel.index', compact('carousel'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$active = ['0'=>'false', '1'=>'true'];
		return view('carousel.create', compact('active'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
		Carousel::create($input);
		return $this->index();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$carousel = Carousel::findOrFail($id);

		return view('carousel.show', compact('carousel'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$carousel = Carousel::findOrFail($id);
		$active = ['0'=>'false', '1'=>'true'];
		return view('carousel.edit', compact('carousel', 'active'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$carousel = Carousel::findOrFail($id);
		$carousel->fill(Request::all());
		$carousel->save();
		return $this->index();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$carousel = Carousel::findOrFail($id);
		$carousel->delete();
		return $this->index();
	}

}