<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomFieldMoneyType>
 */
final class CustomFieldMoneyTypeBuilder implements Builder
{
    public function build(): CustomFieldMoneyType
    {
        return new CustomFieldMoneyTypeModel(
        );
    }

    public static function of(): CustomFieldMoneyTypeBuilder
    {
        return new self();
    }
}
