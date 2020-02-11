<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeType>
 */
final class AttributeTypeBuilder implements Builder
{
    public function build(): AttributeType
    {
        return new AttributeTypeModel(
        );
    }

    public static function of(): AttributeTypeBuilder
    {
        return new self();
    }
}
