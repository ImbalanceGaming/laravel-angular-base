<?php

use Faker\Factory as Faker;
use ApiBase\Models\User;
use ApiBase\Repositories\UserRepository;

trait MakeUserTrait
{
    /**
     * Create fake instance of User and save it in database
     *
     * @param array $userFields
     * @return User
     */
    public function makeUser($userFields = [])
    {
        /** @var UserRepository $userRepo */
        $userRepo = App::make(UserRepository::class);
        $theme = $this->fakeUserData($userFields);
        return $userRepo->create($theme);
    }

    /**
     * Get fake instance of User
     *
     * @param array $userFields
     * @return User
     */
    public function fakeUser($userFields = [])
    {
        return new User($this->fakeUserData($userFields));
    }

    /**
     * Get fake data of User
     *
     * @param array $postFields
     * @return array
     */
    public function fakeUserData($userFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'username' => $fake->word,
            'password' => $fake->word,
            'email' => $fake->word,
            'role' => $fake->word,
            'email_verified' => $fake->word,
            'email_verified_code' => $fake->word,
            'active' => $fake->word,
            'last_login' => $fake->word,
            'forename' => $fake->word,
            'surname' => $fake->word,
            'dob' => $fake->word,
            'country' => $fake->word,
            'website' => $fake->word,
            'avatar' => $fake->word,
            'twitter_username' => $fake->word,
            'facebook' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $userFields);
    }
}
