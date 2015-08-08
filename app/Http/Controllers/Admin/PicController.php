<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Landingpic;
use Redirect, Input, Auth;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.landing.pic')->withPics(Landingpic::orderBy('updated_at', 'desc')->paginate(12));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.landing.picedit')->withPic(Landingpic::find($id));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.landing.picadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'caption' => 'required|max:255',
            'PicFile'  => 'required',
        ]);
        $file = $request->file('PicFile');
        $clientName = $file -> getClientOriginalName();
        $split = explode(".", $clientName);
        $addtime = $split[0].date('ymd',time());
        $extension = $file->getClientOriginalExtension();
        $newName = $addtime.".".$extension;
        $path = $file->move(base_path().'/public/img/uploads/',$newName);
        if ($path) {
            $landp = new Landingpic;
            $landp->caption = Input::get('caption');
            $landp->url = '/img/uploads/'.$newName;
            $landp->user_id = Auth::user()->id;

            if ($landp->save()) {
                return Redirect::to('admin/headpic');
            }else{
                return Redirect::back()->withInput()->withErrors('信息保存失败！');
            }
        }else{
            return Redirect::back()->withInput()->withErrors('上传失败！');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'caption' => 'required|max:255'
        ]);

        $landp = Landingpic::find($id);
        $landp->caption = Input::get('caption');
        $landp->user_id = Auth::user()->id;

        if ($landp->save()) {
            return Redirect::to('admin/headpic');
        }else{
            return Redirect::back()->withInput()->withErrors('信息保存失败！');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pic = Landingpic::find($id);
        $pic->delete();
        return Redirect::to('admin/headpic');
    }
}
