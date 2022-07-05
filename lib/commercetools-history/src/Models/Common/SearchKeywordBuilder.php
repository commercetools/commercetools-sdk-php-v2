<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SearchKeyword>
 */
final class SearchKeywordBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $text;

    /**

     * @var null|SuggestTokenizer|SuggestTokenizerBuilder
     */
    private $suggestTokenizer;

    /**

     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**

     * @return null|SuggestTokenizer
     */
    public function getSuggestTokenizer()
    {
        return $this->suggestTokenizer instanceof SuggestTokenizerBuilder ? $this->suggestTokenizer->build() : $this->suggestTokenizer;
    }

    /**
     * @param ?string $text
     * @return $this
     */
    public function withText(?string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @param ?SuggestTokenizer $suggestTokenizer
     * @return $this
     */
    public function withSuggestTokenizer(?SuggestTokenizer $suggestTokenizer)
    {
        $this->suggestTokenizer = $suggestTokenizer;

        return $this;
    }

    /**
     * @deprecated use withSuggestTokenizer() instead
     * @return $this
     */
    public function withSuggestTokenizerBuilder(?SuggestTokenizerBuilder $suggestTokenizer)
    {
        $this->suggestTokenizer = $suggestTokenizer;

        return $this;
    }

    public function build(): SearchKeyword
    {
        return new SearchKeywordModel(
            $this->text,
            $this->suggestTokenizer instanceof SuggestTokenizerBuilder ? $this->suggestTokenizer->build() : $this->suggestTokenizer
        );
    }

    public static function of(): SearchKeywordBuilder
    {
        return new self();
    }
}
