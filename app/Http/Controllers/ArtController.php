<?php namespace App\Http\Controllers;

use App\Collections;
use App\Http\Controllers\Controller;
use App\Art;
use Request;


class ArtController extends Controller {


	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pieces = Art::all();
		return view('art.index', compact('pieces'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$collections = Collections::lists('name', 'id');

		return view('art.create', compact('collections'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
		Art::create($input);
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
		$art = Art::findOrFail($id);
		$collections = Collections::lists('name', 'id');
		$collection = $collections[$art->collection];
		return view('art.show', compact('art', 'collection'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$art = Art::findOrFail($id);
		$collections = Collections::lists('name', 'id');
		return view('art.edit', compact('art', 'collections'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$art = Art::findOrFail($id);
		$art->fill(Request::all());
		$art->save();
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
		$art = Art::findOrFail($id);
		$art->delete();
		return $this->index();
	}

}
