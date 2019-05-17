<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
class UsersApiController extends Controller
{
use VerifiesEmails;
public $successStatus = 200;
/**
* login api
*
* @return \Illuminate\Http\Response
*/
public function login(Request $request){
    $credentials = [
        'email' => $request['email'],
        'password' => $request['password'],
    ];

if(Auth::attempt($credentials)){
    $user=Auth::user();
    if($user->email_verified_at !== NULL){
        $success['message'] = 'Login successfull';
        $token['token'] = $user->createToken('Token Name')->accessToken;
        return response()->json(['success' => $success,'token' => $token], $this-> successStatus);
    }else{
        return response()->json(['error'=>'Please Verify Email'], 401);
    }
}else{
    return response()->json(['error'=>'Unauthorised'], 401);
}

}
/**
* Register api
*
* @return \Illuminate\Http\Response
*/
public function register(Request $request)
{
$validator = Validator::make($request->all(), [
'name' => 'required',
'email' => 'required|email',
'password' => 'required',
'password_confirmation' => 'required|same:password',
]);
if ($validator->fails()) {
return response()->json(['error'=>$validator->errors()], 401);
}
$input = $request->all();
$input['password'] = Hash::make($input['password']);
$user = User::create($input);
$user->sendApiEmailVerificationNotification();
$success['message'] = 'Please confirm yourself by clicking on verify user button sent to you on your email';
return response()->json(['success'=>$success], $this-> successStatus);
}
/**
* details api
*
* @return \Illuminate\Http\Response
*/
public function details(Request $request)
{
    $user = Auth::user();
    //return response()->json(['success' => $user], $this-> successStatus);
    return response()->json(['success' => $user], $this-> successStatus);
}
}