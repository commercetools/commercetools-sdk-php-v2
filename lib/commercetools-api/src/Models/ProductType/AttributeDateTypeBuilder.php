<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

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
