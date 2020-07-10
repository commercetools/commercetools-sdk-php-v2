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
