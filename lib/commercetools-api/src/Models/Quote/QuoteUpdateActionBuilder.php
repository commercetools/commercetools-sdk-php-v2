<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteUpdateAction>
 */
final class QuoteUpdateActionBuilder implements Builder
{
    public function build(): QuoteUpdateAction
    {
        return new QuoteUpdateActionModel(
        );
    }

    public static function of(): QuoteUpdateActionBuilder
    {
        return new self();
    }
}
