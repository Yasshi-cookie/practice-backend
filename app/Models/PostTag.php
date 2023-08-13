<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class PostTag
 *
 * @property int $id
 * @property int $post_id
 * @property int $tag_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Post $post
 * @property Tag $tag
 * @package App\Models
 * @method static \Database\Factories\PostTagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostTag extends Model
{
    use HasFactory;
    protected $table = 'post_tags';

    protected $casts = [
        'post_id' => 'int',
        'tag_id' => 'int'
    ];

    protected $fillable = [
        'post_id',
        'tag_id'
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
