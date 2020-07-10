<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Products;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
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
