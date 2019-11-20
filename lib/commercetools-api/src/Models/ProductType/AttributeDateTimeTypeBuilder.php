<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

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
