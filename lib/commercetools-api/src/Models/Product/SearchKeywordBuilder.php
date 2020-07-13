<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

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
     * @var ?JsonObject
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
     * @return null|JsonObject
     */
    public function getSuggestTokenizer()
    {
        return $this->suggestTokenizer;
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
     * @param ?JsonObject $suggestTokenizer
     * @return $this
     */
    public function withSuggestTokenizer(?JsonObject $suggestTokenizer)
    {
        $this->suggestTokenizer = $suggestTokenizer;

        return $this;
    }


    public function build(): SearchKeyword
    {
        return new SearchKeywordModel(
            $this->text,
            $this->suggestTokenizer
        );
    }

    public static function of(): SearchKeywordBuilder
    {
        return new self();
    }
}
