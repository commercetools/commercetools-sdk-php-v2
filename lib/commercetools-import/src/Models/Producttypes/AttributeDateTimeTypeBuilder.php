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
 * @implements Builder<AttributeDateTimeType>
 */
final class AttributeDateTimeTypeBuilder implements Builder
{




    public function build(): AttributeDateTimeType
    {
        return new AttributeDateTimeTypeModel(
        );
    }

    public static function of(): AttributeDateTimeTypeBuilder
    {
        return new self();
    }
}
