<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartValueType>
 */
final class CartValueTypeBuilder implements Builder
{
    public function build(): CartValueType
    {
        return new CartValueTypeModel(
        );
    }

    public static function of(): CartValueTypeBuilder
    {
        return new self();
    }
}
