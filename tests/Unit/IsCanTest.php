<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Bus;

class IsCanTest extends Model
{
    public static function test()
    {
        $data = (new static())->isTrue();
    }

    public function test_with_version(){
        Bus::fake();
    }

    private function isTrue(): bool
    {
        return true;
    }
}
