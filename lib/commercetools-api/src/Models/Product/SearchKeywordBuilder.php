<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<SearchKeyword>
 */
final class SearchKeywordBuilder implements Builder
{
    /**
     * @var ?JsonObject
     */
    private $suggestTokenizer;

    /**
     * @var ?string
     */
    private $text;

    /**
     * @return null|JsonObject
     */
    public function getSuggestTokenizer()
    {
        return $this->suggestTokenizer;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     */
    public function withSuggestTokenizer(?JsonObject $suggestTokenizer)
    {
        $this->suggestTokenizer = $suggestTokenizer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withText(?string $text)
    {
        $this->text = $text;

        return $this;
    }

    public function build(): SearchKeyword
    {
        return new SearchKeywordModel(
            $this->suggestTokenizer,
            $this->text
        );
    }

    public static function of(): SearchKeywordBuilder
    {
        return new self();
    }
}
