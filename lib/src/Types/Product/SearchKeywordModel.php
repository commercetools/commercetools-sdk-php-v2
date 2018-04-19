<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class SearchKeywordModel extends JsonObjectModel implements SearchKeyword
{
    /**
     * @var string
     */
    protected $text;
    /**
     * @var mixed
     */
    protected $suggestTokenizer;

    /**
     * @return string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            $value = $this->raw(SearchKeyword::FIELD_TEXT);
            $value = (string)$value;
            $this->text = $value;
        }
        return $this->text;
    }
    /**
     * @return mixed
     */
    public function getSuggestTokenizer()
    {
        if (is_null($this->suggestTokenizer)) {
            $value = $this->raw(SearchKeyword::FIELD_SUGGEST_TOKENIZER);
            $this->suggestTokenizer = $value;
        }
        return $this->suggestTokenizer;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text)
    {
        $this->text = (string)$text;

        return $this;
    }
    /**
     * @param $suggestTokenizer
     * @return $this
     */
    public function setSuggestTokenizer($suggestTokenizer)
    {
        $this->suggestTokenizer = $suggestTokenizer;

        return $this;
    }

    /**
     * @return SuggestTokenizer
     */
    public function getSuggestTokenizerAsSuggestTokenizer()
    {
        if (is_null($this->suggestTokenizer)) {
            $value = $this->raw(SearchKeyword::FIELD_SUGGEST_TOKENIZER);
            $resolvedClass = $this->resolveDiscriminator(SuggestTokenizer::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->suggestTokenizer = $value;
        }
        return $this->suggestTokenizer;
    }

    /**
     * @return WhitespaceTokenizer
     */
    public function getSuggestTokenizerAsWhitespaceTokenizer()
    {
        if (is_null($this->suggestTokenizer)) {
            $value = $this->raw(SearchKeyword::FIELD_SUGGEST_TOKENIZER);
            if (is_null($value)) {
                return $this->mapData(WhitespaceTokenizer::class, null);
            }
            $value = $this->mapData(WhitespaceTokenizer::class, $value);

            $this->suggestTokenizer = $value;
        }
        return $this->suggestTokenizer;
    }

    /**
     * @return CustomTokenizer
     */
    public function getSuggestTokenizerAsCustomTokenizer()
    {
        if (is_null($this->suggestTokenizer)) {
            $value = $this->raw(SearchKeyword::FIELD_SUGGEST_TOKENIZER);
            if (is_null($value)) {
                return $this->mapData(CustomTokenizer::class, null);
            }
            $value = $this->mapData(CustomTokenizer::class, $value);

            $this->suggestTokenizer = $value;
        }
        return $this->suggestTokenizer;
    }

}
