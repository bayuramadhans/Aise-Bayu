<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



class ImageUploadController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
     public function profile()
     {
         return view('peserta/profile');
     }

    public function profileAdd()
    {
        return view('peserta/addProfile');
    }

    public function profileEdit()

    {
        return view('peserta/editProfile');
    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function profileAddPost(Request $request)

    {
        $profile = $this->validate(request(), [
          'ketua' => 'required',
          'nisketua' => 'required|numeric'
          'anggota1' => 'required',
          'nisanggota1' => 'required|numeric'
          'anggota2' => 'required',
          'nisanggota2' => 'required|numeric'
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'file' => 'required|file|max:2000'
        ]);
        Product::create($profile);
        return view('peserta/profile')
            ->with('success','You have successfully update your profile.');

    }

}
