<?php declare(strict_types=1);

namespace SergeyNezbritskiy\PrivatBank\Tests\Request;

/**
 * Class OfficeRequestTest
 * @package SergeyNezbritskiy\PrivatBank\tests\Request
 */
class OfficesRequestTest extends TestCase
{

    public function testOffices()
    {
        $data = $this->client->offices([
            'city' => 'Днепропетровск',
            'address' => 'Титова',
        ]);
        $this->assertGreaterThan(0, count($data));
        foreach ($data as $item) {
            $this->assertArrayHasKey('country', $item);
            $this->assertArrayHasKey('state', $item);
            $this->assertArrayHasKey('city', $item);
            $this->assertArrayHasKey('index', $item);
            $this->assertArrayHasKey('address', $item);
            $this->assertArrayHasKey('phone', $item);
            $this->assertArrayHasKey('email', $item);
            $this->assertArrayHasKey('name', $item);
            break;
        }
    }
}
