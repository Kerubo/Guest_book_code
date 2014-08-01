<?php

class EntriesController extends BaseController {

       
        public function getIndex()
        {
        	return View::make('home')->with('users', Entry::all());//retrieves all the records from the database
        }

       
        public function postIndex()
        {

// get form input data
    $entry = array(
        'username' => Input::get('frmName'),
        'email'    => Input::get('frmEmail'),
        'comment'  => Input::get('frmComment'),
    );

    // save the guestbook entry to the database
    Entry::create($entry);

    return Redirect::to('/');
        }

}