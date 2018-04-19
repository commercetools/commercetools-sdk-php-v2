<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

interface SearchKeyword extends JsonObject
{
    const FIELD_TEXT = 'text';
    const FIELD_SUGGEST_TOKENIZER = 'suggestTokenizer';

    /**
     * @return string
     */
    public function getText();

    /**
     * @return mixed
     */
    public function getSuggestTokenizer();

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text);

    /**
     * @param mixed $suggestTokenizer
     * @return $this
     */
    public function setSuggestTokenizer($suggestTokenizer);

    /**
     * @return SuggestTokenizer
     */
    public function getSuggestTokenizerAsSuggestTokenizer();

    /**
     * @return WhitespaceTokenizer
     */
    public function getSuggestTokenizerAsWhitespaceTokenizer();

    /**
     * @return CustomTokenizer
     */
    public function getSuggestTokenizerAsCustomTokenizer();

}
