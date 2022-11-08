<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeGroupUpdateAction>
 */
final class AttributeGroupUpdateActionBuilder implements Builder
{
    public function build(): AttributeGroupUpdateAction
    {
        return new AttributeGroupUpdateActionModel(
        );
    }

    public static function of(): AttributeGroupUpdateActionBuilder
    {
        return new self();
    }
}
