<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\Builder;

/**
 * @implements Builder<WhitespaceTokenizer>
 */
final class WhitespaceTokenizerBuilder implements Builder
{
    public function build(): WhitespaceTokenizer
    {
        return new WhitespaceTokenizerModel(
        );
    }

    public static function of(): WhitespaceTokenizerBuilder
    {
        return new self();
    }
}
