<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchKeyword extends JsonObject
{
    public const FIELD_TEXT = 'text';
    public const FIELD_SUGGEST_TOKENIZER = 'suggestTokenizer';

    /**
     * <p>Text to return in the <a href="ctp:api:type:SuggestionResult">SuggestionResult</a>.</p>
     *

     * @return null|string
     */
    public function getText();

    /**
     * <p>If no tokenizer is defined, the <code>text</code> is used as a single token.</p>
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
