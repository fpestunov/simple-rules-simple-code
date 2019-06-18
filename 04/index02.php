<?php
class UserController {
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

 }

class AuthController {

    protected $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    public function register()
    {
        
    }
}

class UserService {

    protected $userRepository;
    protected $userEventRepository;

    public function __construct(UserRepository $userRepository, UserEventRepository $userEventRepository)
    {
        $this->userRepository = $userRepository;
        $this->userEventRepository = $userEventRepository;
    }

    
}
