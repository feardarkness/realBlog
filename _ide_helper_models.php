<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Posts
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $entry_date
 * @property string $published_date
 * @property integer $author_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereEntryDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts wherePublishedDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereUpdatedAt($value)
 */
	class Posts extends \Eloquent {}
}

