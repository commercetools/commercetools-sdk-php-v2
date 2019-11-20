<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeTimeType>
 */
final class AttributeTimeTypeBuilder implements Builder
{
    public function build(): AttributeTimeType
    {
        return new AttributeTimeTypeModel(
        );
    }

    public static function of(): AttributeTimeTypeBuilder
    {
        return new self();
    }
}
