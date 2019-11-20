<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldBooleanType>
 */
final class CustomFieldBooleanTypeBuilder implements Builder
{
    public function build(): CustomFieldBooleanType
    {
        return new CustomFieldBooleanTypeModel(
        );
    }

    public static function of(): CustomFieldBooleanTypeBuilder
    {
        return new self();
    }
}
