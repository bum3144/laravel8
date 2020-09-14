<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
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
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();

        // abort_unless(Auth::user(), 403);
        if (! Auth::check()) {
            return "로그인 확인 안됨";
        }

        return __METHOD__ . $id . "은(는) Atticle 컬렉션을 조회한다";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return __METHOD__ . "은(는) Atticle Form 을 담을 view를 반환한다";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return __METHOD__ . "은(는) Atticle Form data를 저장한다";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return __METHOD__ . "은(는) Atticle View 반환" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return __METHOD__ . "은(는) Atticle 컬렉션을 수정하기 위한 Form을 담은 View를 반환한다" . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return __METHOD__ . "은(는) Atticle 컬렉션을 수정 자장한다" . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return __METHOD__ . "은(는) Atticle 컬렉션을 삭제한다" . $id;
    }
}
