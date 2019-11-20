<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldTimeType>
 */
final class CustomFieldTimeTypeBuilder implements Builder
{
    public function build(): CustomFieldTimeType
    {
        return new CustomFieldTimeTypeModel(
        );
    }

    public static function of(): CustomFieldTimeTypeBuilder
    {
        return new self();
    }
}
