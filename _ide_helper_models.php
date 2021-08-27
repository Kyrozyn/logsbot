<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\correction
 *
 * @property int $id
 * @property string|null $request_number
 * @property string|null $title
 * @property string|null $group
 * @property string|null $text
 * @property string|null $detail
 * @property string|null $explanation
 * @property string|null $groupdescription
 * @method static \Illuminate\Database\Eloquent\Builder|correction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|correction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|correction query()
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereGroupdescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereRequestNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|correction whereTitle($value)
 */
	class correction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\log
 *
 * @property int $id
 * @property int $created_at
 * @property string $request_number
 * @property string|null $text_before
 * @property string|null $text_after
 * @method static \Illuminate\Database\Eloquent\Builder|log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|log query()
 * @method static \Illuminate\Database\Eloquent\Builder|log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|log whereRequestNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|log whereTextAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|log whereTextBefore($value)
 */
	class log extends \Eloquent {}
}

