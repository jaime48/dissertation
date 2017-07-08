<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
//use App\Repositories\UserRepository;

class TestComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    public $users = 2;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
//    public function __construct(UserRepository $users)
//    {
//        // Dependencies automatically resolved by service container...
//        $this->users = $users;
//    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->users = $this->users + 1;
        $view->with('count123', $this->users);
    }
}