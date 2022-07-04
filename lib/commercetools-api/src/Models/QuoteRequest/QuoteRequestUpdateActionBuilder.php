<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestUpdateAction>
 */
final class QuoteRequestUpdateActionBuilder implements Builder
{
    public function build(): QuoteRequestUpdateAction
    {
        return new QuoteRequestUpdateActionModel(
        );
    }

    public static function of(): QuoteRequestUpdateActionBuilder
    {
        return new self();
    }
}
