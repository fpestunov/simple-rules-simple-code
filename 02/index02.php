<?php

class SomeClass {

    public function store()
    {
        $input = Request::all();

        $validation = Validator::make($input, ['username' => 'required']);

        if (date('l') === 'Friday')
        {
            throw new Exception("We don't work on Fridays!");
        }

        if (! $validation->passes())
        {
            return Redirect::back()->withInput()->withErrors($validation);
        }

        Post::create($input);

        return Redirect::home();
    }
}
