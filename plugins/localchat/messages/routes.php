<?php

use Localchat\Messages\Models\Message;
use Localchat\Messages\Models\Group;
use Localchat\Messages\Models\User;

//Get requesty

Route::get('/messages',function() {
    return Message::all();
});

Route::get('/groups', function() {
    return Group::all();
});

Route::get('/messages/{group_id}', function($group_id) {
    return Message::where(['group_id' => $group_id])->get();
});

Route::get('/users', function() {
    return User::all();
});

Route::get('/user/{id}', function($id) {
    return User::where(['id' => $id])->first();
});

Route::get('/messagecount', function() {
    return Group::with('messages')->get();
});
//Post requesty

Route::post('/user', function() {
    $user = new User;

    $user->name = Input::get('name');

    $user->save();

    return $user->id;
});


Route::post('/message', function() {
    $message = new Message;

    $message->user_id  = Input::get('user_id');
    $message->group_id = Input::get('group_id');
    $message->message  = Input::get('message');

    $message->save();
});

Route::post('/group', function() {
    $group = new Group;

    $group->name = Input::get('name');
    $group->user_id = Input::get('user_id');
    $group->code = Input::get('code');

    $group->save();
});

//Delete requesty

Route::delete('/group/{id}/{code}',function($id, $code){
    $groupCode = Group::where(['id' => $id])->get(['code']);

    if($code == $groupCode[0]->code)
    {
        Group::where(['id' => $id])->delete();
        Message::where(['group_id' => $id])->delete();
    }
    else{
        return "Invalid code!";
    }
});