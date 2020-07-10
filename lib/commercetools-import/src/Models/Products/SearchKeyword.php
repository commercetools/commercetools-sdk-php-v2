<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Products;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

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

    public function setText(?string $text): void;

    public function setSuggestTokenizer(?SuggestTokenizer $suggestTokenizer): void;
}
