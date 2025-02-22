<?php

namespace Tests\Fixtures;

use Danestves\LaravelPolar\Billable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tests\Fixtures\Factories\UserFactory;

class User extends Authenticatable
{
    use Billable;
    use HasFactory;

    public function getKey()
    {
        return 'user_123';
    }

    public function getMorphClass()
    {
        return 'users';
    }

    protected static function newFactory()
    {
        return new UserFactory;
    }
}
