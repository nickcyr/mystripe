<?php
Class UserController extends BaseController{
    public function showProfile($id){
        $user = User::find($id);
        return View::make('user.profile', array('user' => $user));
    }    
}