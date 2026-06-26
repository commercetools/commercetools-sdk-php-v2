<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantUpdateAction>
 */
final class VariantUpdateActionBuilder implements Builder
{
    public function build(): VariantUpdateAction
    {
        return new VariantUpdateActionModel(
        );
    }

    public static function of(): VariantUpdateActionBuilder
    {
        return new self();
    }
}
