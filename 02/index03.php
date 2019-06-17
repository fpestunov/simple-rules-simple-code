<?php

class SomeClass {

    public function store()
    {
        $input = Request::all();

        $this->validator->validate($input);

        Post::create($input);

        return Redirect::home();
    }
}
