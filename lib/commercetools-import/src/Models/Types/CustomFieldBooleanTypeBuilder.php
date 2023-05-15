<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
