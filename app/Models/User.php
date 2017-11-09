<?php

namespace ApiBase\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="User",
 *      required={"password", "email", "role", "email_verified", "active", "forename", "surname"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="role",
 *          description="role",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email_verified",
 *          description="email_verified",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="active",
 *          description="active",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="firstname",
 *          description="firstname",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="surname",
 *          description="surname",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="dob",
 *          description="dob",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="country",
 *          description="country",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="website",
 *          description="website",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="avatar",
 *          description="avatar",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="twitter_username",
 *          description="twitter_username",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="facebook",
 *          description="facebook",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class User extends Model {

    use SoftDeletes;

    public $table = 'users';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'password',
        'email',
        'role',
        'email_verified',
        'active',
        'forename',
        'surname',
        'dob',
        'country',
        'website',
        'avatar',
        'twitter_username',
        'facebook'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'password' => 'string',
        'email' => 'string',
        'role' => 'string',
        'email_verified' => 'boolean',
        'active' => 'boolean',
        'forename' => 'string',
        'surname' => 'string',
        'dob' => 'string',
        'country' => 'string',
        'website' => 'string',
        'avatar' => 'string',
        'twitter_username' => 'string',
        'facebook' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'password' => 'required',
        'email' => 'required',
        'role' => 'required',
        'email_verified' => 'required',
        'active' => 'required',
        'forename' => 'required',
        'surname' => 'required'
    ];
}
