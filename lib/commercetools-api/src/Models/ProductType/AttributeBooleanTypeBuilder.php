<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeBooleanType>
 */
final class AttributeBooleanTypeBuilder implements Builder
{
    public function build(): AttributeBooleanType
    {
        return new AttributeBooleanTypeModel(
        );
    }

    public static function of(): AttributeBooleanTypeBuilder
    {
        return new self();
    }
}
