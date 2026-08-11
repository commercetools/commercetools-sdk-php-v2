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
 * @implements Builder<VariantPublishAction>
 */
final class VariantPublishActionBuilder implements Builder
{
    public function build(): VariantPublishAction
    {
        return new VariantPublishActionModel(
        );
    }

    public static function of(): VariantPublishActionBuilder
    {
        return new self();
    }
}
