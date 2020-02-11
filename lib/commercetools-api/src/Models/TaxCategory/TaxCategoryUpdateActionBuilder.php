<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxCategoryUpdateAction>
 */
final class TaxCategoryUpdateActionBuilder implements Builder
{




    public function build(): TaxCategoryUpdateAction
    {
        return new TaxCategoryUpdateActionModel(
        );
    }

    public static function of(): TaxCategoryUpdateActionBuilder
    {
        return new self();
    }
}
