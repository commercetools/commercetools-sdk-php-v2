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
 * @implements Builder<CustomFieldStringType>
 */
final class CustomFieldStringTypeBuilder implements Builder
{
    public function build(): CustomFieldStringType
    {
        return new CustomFieldStringTypeModel(
        );
    }

    public static function of(): CustomFieldStringTypeBuilder
    {
        return new self();
    }
}
