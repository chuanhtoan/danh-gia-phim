<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = TheLoai::all();
        $products = User::orderBy('id', 'DESC')->get();
        return view('admin.user.index')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = User::create($request->input());
        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = User::find($product_id);
        return response()->json($product);
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
        $product = User::find($id);
        $product->username = $request->username;
        // $product->password = $request->password;
        $product->email = $request->email;
        $product->hinh = $request->hinh;
        $product->loai = $request->loai;
        $product->save();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = User::destroy($product_id);
        return response()->json($product);
    }

    public function getRegister()
    {
        return view('admin.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|unique:User,username|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3|max:32',
            'passwordAgain' => 'required|same:password'
        ],[
            'username.required' => 'Bạn chưa nhập tên đăng nhập',
            'username.unique' => 'Tên đăng nhập đã tồn tại',
            'username.min' => 'Tên đăng nhập phải có ít nhất 3 ký tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Email sai định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max' => 'Mật khẩu có tối đa 32 ký tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->loai = 'user';
        $user->save();

        return redirect('/');
    }
}
