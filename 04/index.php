<?php
// Управление пользователями требует разных фич - логгер, почта, регистрация и т.д. Добавление этих фич делает из класса Пользователя - объект Монстр (бог)
class UserController {
    protected $userService;
    protected $userRepository;
    protected $stripe;
    protected $mailer;
    protected $userEventRepository;
    protected $logger;

    // эта процедура называется - Dependency Enjection
    public function __construct(
        UserService $userService;
        UserRepository $userRepository;
        Stripe $stripe;
        Mailer $mailer;
        UserEventRepository $userEventRepository;
        Logger $logger;
    )
    {
        protected $userService;
        protected $userRepository;
        protected $stripe;
        protected $mailer;
        protected $userEventRepository;
        protected $logger;
    }

    public function register()
    {
        
    }

    public function cancel()
    {
        
    }

}
