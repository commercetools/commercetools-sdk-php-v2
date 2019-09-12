<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class SearchKeywordModel extends JsonObjectModel implements SearchKeyword
{
    /**
     * @var ?SuggestTokenizer
     */
    protected $suggestTokenizer;

    /**
     * @var ?string
     */
    protected $text;

    public function __construct(
        SuggestTokenizer $suggestTokenizer = null,
        string $text = null
    ) {
        $this->suggestTokenizer = $suggestTokenizer;
        $this->text = $text;
    }

    /**
     * @return null|SuggestTokenizer
     */
    public function getSuggestTokenizer()
    {
        if (is_null($this->suggestTokenizer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(SearchKeyword::FIELD_SUGGEST_TOKENIZER);
            if (is_null($data)) {
                return null;
            }
            $className = SuggestTokenizerModel::resolveDiscriminatorClass($data);
            $this->suggestTokenizer = $className::of($data);
        }

        return $this->suggestTokenizer;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SearchKeyword::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }

    public function setSuggestTokenizer(?SuggestTokenizer $suggestTokenizer): void
    {
        $this->suggestTokenizer = $suggestTokenizer;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}
