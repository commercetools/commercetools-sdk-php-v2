<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SearchKeyword extends JsonObject
{

    public const FIELD_TEXT = 'text';
    public const FIELD_SUGGEST_TOKENIZER = 'suggestTokenizer';

    /**
     * @return null|string
     */
    public function getText();

    /**
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
