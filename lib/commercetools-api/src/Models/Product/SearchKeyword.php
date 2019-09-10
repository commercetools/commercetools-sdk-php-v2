<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface SearchKeyword extends JsonObject
{
    const FIELD_TEXT = 'text';
    const FIELD_SUGGEST_TOKENIZER = 'suggestTokenizer';

    /**
     * @return null|string
     */
    public function getText();

    /**
     * @return null|JsonObject
     */
    public function getSuggestTokenizer();

    public function setText(?string $text): void;

    public function setSuggestTokenizer(?JsonObject $suggestTokenizer): void;
}
