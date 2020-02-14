<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomField>
 */
final class CustomFieldBuilder implements Builder
{
    public function build(): CustomField
    {
        return new CustomFieldModel(
        );
    }

    public static function of(): CustomFieldBuilder
    {
        return new self();
    }
}
