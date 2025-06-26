<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchKeyword extends JsonObject
{
    public const FIELD_TEXT = 'text';
    public const FIELD_SUGGEST_TOKENIZER = 'suggestTokenizer';

    /**

     * @return null|string
     */
    public function getText();

    /**
     * <p>The tokenizer defines the tokens that are used for <a href="/projects/search-term-suggestions">search term suggestions</a>.</p>
     *

     * @return null|SuggestTokenizer
     */
    public function getSuggestTokenizer();

    /**
     * @param ?string $text
     */
    public function setText(?string $text): void;

    /**
     * @param ?SuggestTokenizer $suggestTokenizer
     */
    public function setSuggestTokenizer(?SuggestTokenizer $suggestTokenizer): void;
}
