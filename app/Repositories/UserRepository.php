<?php

namespace ApiBase\Repositories;

use ApiBase\Models\User;
use InfyOm\Generator\Common\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'role',
        'email_verified',
        'active',
        'firstname',
        'surname',
        'dob',
        'country',
        'website',
        'avatar',
        'twitter_username',
        'facebook'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
