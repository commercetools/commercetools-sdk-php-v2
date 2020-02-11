<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SuggestionResult>
 */
final class SuggestionResultBuilder implements Builder
{




    public function build(): SuggestionResult
    {
        return new SuggestionResultModel(
        );
    }

    public static function of(): SuggestionResultBuilder
    {
        return new self();
    }
}
