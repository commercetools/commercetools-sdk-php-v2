<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchKeywordModel extends JsonObjectModel implements SearchKeyword
{
    /**
     * @var ?string
     */
    protected $text;

    /**
     * @var ?mixed
     */
    protected $suggestTokenizer;


    public function __construct(
        string $text = null,
        JsonObject $suggestTokenizer = null
    ) {
        $this->text = $text;
        $this->suggestTokenizer = $suggestTokenizer;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }

    /**
     * @return ?mixed
     */
    public function getSuggestTokenizer()
    {
        if (is_null($this->suggestTokenizer)) {
            /** @psalm-var ?mixed $data */
            $data = $this->raw(self::FIELD_SUGGEST_TOKENIZER);
            if (is_null($data)) {
                return null;
            }
            $this->suggestTokenizer = $data;
        }

        return $this->suggestTokenizer;
    }

    /**
     * @return null|SuggestTokenizer
     */
    public function getSuggestTokenizerAsSuggestTokenizer()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_SUGGEST_TOKENIZER);
        if (is_null($data)) {
            return null;
        }
        $className = SuggestTokenizerModel::resolveDiscriminatorClass($data);
        return $className::of($data);
    }

    /**
     * @return null|WhitespaceTokenizer
     */
    public function getSuggestTokenizerAsWhitespaceTokenizer()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_SUGGEST_TOKENIZER);
        if (is_null($data)) {
            return null;
        }

        return WhitespaceTokenizerModel::of($data);
    }

    /**
     * @return null|CustomTokenizer
     */
    public function getSuggestTokenizerAsCustomTokenizer()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_SUGGEST_TOKENIZER);
        if (is_null($data)) {
            return null;
        }

        return CustomTokenizerModel::of($data);
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function setSuggestTokenizer(?JsonObject $suggestTokenizer): void
    {
        $this->suggestTokenizer = $suggestTokenizer;
    }
}
