<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

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
