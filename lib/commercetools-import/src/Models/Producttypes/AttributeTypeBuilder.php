<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;

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
