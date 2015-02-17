<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Collections;
use App\Art;
use Request;


class CollectionsController extends Controller {

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
		$collections = Collections::all();
		return view('collections.index', compact('collections'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('collections.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
		Collections::create($input);
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
		$collection = Collections::findOrFail($id);
		$pieces = Art::all()->where('collection', $id);

		return view('collections.show', compact('collection', 'pieces'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$collection = Collections::findOrFail($id);
		return view('collections.edit', compact('collection'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$collection = Collections::findOrFail($id);
		$collection->fill(Request::all());
		$collection->save();
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
		$collection = Collections::findOrFail($id);
		$collection->delete();
		return $this->index();
	}

}