<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\Builder;

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
