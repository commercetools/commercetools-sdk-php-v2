<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeTimeType>
 */
final class AttributeTimeTypeBuilder implements Builder
{




    public function build(): AttributeTimeType
    {
        return new AttributeTimeTypeModel(
        );
    }

    public static function of(): AttributeTimeTypeBuilder
    {
        return new self();
    }
}
