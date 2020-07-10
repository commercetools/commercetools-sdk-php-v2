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
 * @implements Builder<AttributeTextType>
 */
final class AttributeTextTypeBuilder implements Builder
{




    public function build(): AttributeTextType
    {
        return new AttributeTextTypeModel(
        );
    }

    public static function of(): AttributeTextTypeBuilder
    {
        return new self();
    }
}
