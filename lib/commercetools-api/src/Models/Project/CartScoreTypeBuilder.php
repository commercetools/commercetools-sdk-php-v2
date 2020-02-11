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
 * @implements Builder<CartScoreType>
 */
final class CartScoreTypeBuilder implements Builder
{
    public function build(): CartScoreType
    {
        return new CartScoreTypeModel(
        );
    }

    public static function of(): CartScoreTypeBuilder
    {
        return new self();
    }
}
