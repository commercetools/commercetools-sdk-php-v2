<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeLocalizableTextType>
 */
final class AttributeLocalizableTextTypeBuilder implements Builder
{
    public function build(): AttributeLocalizableTextType
    {
        return new AttributeLocalizableTextTypeModel(
        );
    }

    public static function of(): AttributeLocalizableTextTypeBuilder
    {
        return new self();
    }
}
