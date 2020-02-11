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
 * @implements Builder<SuggestTokenizer>
 */
final class SuggestTokenizerBuilder implements Builder
{




    public function build(): SuggestTokenizer
    {
        return new SuggestTokenizerModel(
        );
    }

    public static function of(): SuggestTokenizerBuilder
    {
        return new self();
    }
}
