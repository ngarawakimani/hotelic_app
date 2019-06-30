<?php

namespace App\Http\Controllers\API;

use App\Hotel;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Hotel as HotelResource;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HotelResource::collection(Hotel::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $hotel = new Hotel();

        return $this->storePUTData($request,$hotel);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $hotel = Hotel::findOrfail($id);

        return new HotelResource($hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
        return $this->storePUTData($request,$hotel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //

        if ($hotel->delete()) {

            return new HotelResource($hotel);

        } else {

            $response = [
                'success' => false,
                'data' => $hotel,
                'message' => 'Book delete Unsuccessful.'
            ];

            return response()->json($response, 200);
        }
    }

    private function storePUTData($request, $hotel){

        $hotel_image_name = "";

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
            'email' => ['required', 'string', 'email', 'unique:hotels'],
            'hotel_image' => 'required|mimes:jpg,jpeg,png,gif',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 404);
        }

        if($request->hasfile('hotel_image')){
           $file = $request->file('hotel_image');
           $hotel_image_name = time().$file->getClientOriginalName();
           $file->move(storage_path().'/app/public/images/', $hotel_image_name);
        }

        $hotel->name = $request->input('name');
        $hotel->address = $request->input('address');
        $hotel->city = $request->input('city');
        $hotel->state = $request->input('state');
        $hotel->country = $request->input('country');
        $hotel->zip_code = $request->input('zip_code');
        $hotel->phone_number = $request->input('phone_number');
        $hotel->email = $request->input('email');
        $hotel->hotel_image = 'images/' . $hotel_image_name;

        if ($hotel->save()) {
            return new HotelResource($hotel);
        } else {
            $response = [
                'success' => false,
                'data' => 'Database Error.',
                'message' => 'Unnable to save data'
            ];
            return response()->json($response, 404);
        }
    }
}
