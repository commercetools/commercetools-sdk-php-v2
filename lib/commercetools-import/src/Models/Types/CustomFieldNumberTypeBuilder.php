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
 * @implements Builder<CustomFieldNumberType>
 */
final class CustomFieldNumberTypeBuilder implements Builder
{
    public function build(): CustomFieldNumberType
    {
        return new CustomFieldNumberTypeModel(
        );
    }

    public static function of(): CustomFieldNumberTypeBuilder
    {
        return new self();
    }
}
