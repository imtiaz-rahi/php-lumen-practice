<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

/**
 * Class Author, model for database.
 *
 * @package App\Models
 * @author Imtiaz Rahi
 * @since 2022-11-08
 */
class Author extends Model
{
    use HasFactory;

    public $name;
    public $email;
    public $github;
    public $twitter;
    public $location;
    public $mobile;

    // TODO use annotation to transate DB field
    // @Column(name="latest_article_published")
    // https://laravelcollective.com/docs/5.8/annotations
    public $latestArticlePublished;

    /** The attributes that are mass assignable. */
    protected $fillable = [
        'name', 'email', "github", "twitter", "location", "latest_article_published", "mobile"
    ];

    /** The attributes excluded from the model's JSON form. */
    protected $hidden = [];
}
