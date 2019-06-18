<?php

/*

    Wrap or not wrap!?

    1. Does it bring clarity
    2. Is there behavior?
    3. Consistency
    4. Important domain concept?
        if i develop GooMaps, then its important concept latitude and longitude

*/

// what does it mean wrap primitive?
function cache($data, $seconds)
{

}
cache([], 50); // sec, min, hours? i dont know!

// it means to
// make from primitive its own type
// refactor...

class Second {
    public function __construct($seconds)
    {
        
    }
}

function cache($data, Second $seconds)
{

}

cache([], new Second(50)); // easy and clarity


// 3. Consistency... about validation

send($email);

class EmailAddress {

    public function __construct($email)
    {
        if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException;
            
        }

        $this->email = $email;
    }
}

class Location {

    public function __construct($latitude, $longitude)
    {
        
    }
}

// more examples

class Weight {

    protected $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    // 'gain' instead of 'set'
    public function gain($pounds)
    {
        // $this->weight += $pounds;

        // let it mutable...
        return new static($this->weight - $pounds);
    }

    public function lose($pounds)
    {
        return new static($this->weight - $pounds);
    }
}

class WorkoutPlaceMember {

    public function __construct($name, Weight $weight)
    {
        
    }

    public function workoutFor($length)
    // hmm... how long?
    // 3 way
    // - write comment
    // - make API - workoutForHours, workoutForDays etc
    // -
    public function workoutFor(TimeLength $length)
    {
        // there we can represent in any time
        $length->inSeconds();
        $length->inHours();
    }
}

class TimeLength {

    protected $seconds;

    private function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    public static function fromMinutes($minutes)
    {
        return new static($minute * 60);
    }

    public static function fromHours($hours)
    {
        return new static($hours * 60 * 60);
    }

    public function inSeconds()
    {
        return $this->seconds;
    }

    public function inHours()
    {
        return $this->seconds / (60 * 60);
    }
}

$john = new WorkoutPlaceMember('John Doe', new Weight(160));

$john->workoutFor(new TimeLength(3)); // min, days?
$john->workoutFor(TimeLength::fromHours(3)); // more readable and flexible
