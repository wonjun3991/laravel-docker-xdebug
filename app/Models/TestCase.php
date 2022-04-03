<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TestCase
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TestCaseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase query()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCase whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TestCase extends Model
{
    use HasFactory;
}
