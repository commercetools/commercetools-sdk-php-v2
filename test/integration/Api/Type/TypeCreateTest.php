<?php

namespace Commercetools\IntegrationTest\Api\Type;

use Commercetools\Api\Models\Type\Type;
use Commercetools\Exception\NotFoundException;
use Commercetools\IntegrationTest\ApiTestCase;

class TypeCreateTest extends ApiTestCase
{
    public function testCreate()
    {
        $builder = $this->getApiBuilder();

        TypeFixture::withType(
            $builder,
            function (Type $type) use ($builder) {
                $request = $builder
                    ->with()
                    ->types()
                    ->withId($type->getId())
                    ->get();
                $typeQueryResponse = $request->execute();

                $this->assertSame($type->getKey(), $typeQueryResponse->getKey());
                $this->assertSame(1, $typeQueryResponse->getVersion());
            }
        );
    }

    public function testDeleteByKey()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);

        $builder = $this->getApiBuilder();

        TypeFixture::withType(
            $builder,
            function (Type $type) use ($builder) {
                $request = $builder
                    ->with()
                    ->types()
                    ->withKey($type->getKey())
                    ->delete()
                    ->withVersion($type->getVersion());
                $typeQueryResponse = $request->execute();

                $this->assertSame($type->getId(), $typeQueryResponse->getId());
                $this->assertInstanceOf(Type::class, $typeQueryResponse);

                $request = $builder->with()->types()->withKey($type->getKey())->get();
                $request->execute();
            }
        );
    }
}
