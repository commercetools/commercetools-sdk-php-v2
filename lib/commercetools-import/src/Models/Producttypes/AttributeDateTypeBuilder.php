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
 * @implements Builder<AttributeDateType>
 */
final class AttributeDateTypeBuilder implements Builder
{




    public function build(): AttributeDateType
    {
        return new AttributeDateTypeModel(
        );
    }

    public static function of(): AttributeDateTypeBuilder
    {
        return new self();
    }
}
