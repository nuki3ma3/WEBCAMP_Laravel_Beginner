@extends('user.layout')

{{-- メインコンテンツ --}}
@section('contets')
        name：{{ $datum['name'] }}<br>
        email：{{ $datum['email'] }}<br>
        パスワード：{{ $datum['password'] }}<br>
@endsection
/**
     * 入力を受け取る
     * 
     * @return \Illuminate\View\View
     */
    public function input(UserRegisterRequest $request)
    {
        // validate済

        // データの取得
        $validatedData = $request->validated();

        //
        //var_dump($validatedData); exit;
        
        return view('user.input', ['datum' => $validatedData]);
    }