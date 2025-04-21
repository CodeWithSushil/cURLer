<?php
declare(strict_types=1);
namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Curler\Curler;

#[CoversClass(Curler::class)]
class CurlerTest extends TestCase {
    //
    public function setUp(): void
    {
        $curler = new Curler();
        $this->assertSame(true, $curler);
    }
}
