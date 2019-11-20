<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeNumberType>
 */
final class AttributeNumberTypeBuilder implements Builder
{
    public function build(): AttributeNumberType
    {
        return new AttributeNumberTypeModel(
        );
    }

    public static function of(): AttributeNumberTypeBuilder
    {
        return new self();
    }
}
