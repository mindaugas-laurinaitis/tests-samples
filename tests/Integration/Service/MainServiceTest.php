<?php

declare(strict_types=1);

namespace App\Tests\Integration\Service;

use App\Model\CalculatorModel;
use App\Service\MainService;
use App\Service\Service1;
use App\Tests\Fixtures\CalculatorModelFactory;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MainServiceTest extends KernelTestCase
{
    private static MainService $mainService;
    private static Service1 $service1Mock;

    public function setUp(): void
    {
        self::bootKernel();
        self::$service1Mock = $this->mockService(Service1::class);
        self::$mainService = self::getContainer()->get(MainService::class);
    }

    public function testAdd()
    {
        $model = CalculatorModelFactory::create(['a' => 2]);

        self::assertSame(4, self::$mainService->add($model));
    }

    protected function mockService(string $className): object
    {
        $testClassName = 'test.'.$className;
        if (!self::getContainer()->initialized($testClassName)) {
            self::getContainer()->set($testClassName, $this->createMock($className));
        }

        return self::getContainer()->get($className);
    }
}
