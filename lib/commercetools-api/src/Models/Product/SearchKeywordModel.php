<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class SearchKeywordModel extends JsonObjectModel implements SearchKeyword
{
    /**
     * @var ?JsonObject
     */
    protected $suggestTokenizer;

    /**
     * @var ?string
     */
    protected $text;

    public function __construct(
        JsonObject $suggestTokenizer = null,
        string $text = null
    ) {
        $this->suggestTokenizer = $suggestTokenizer;
        $this->text = $text;
    }

    /**
     * @return null|JsonObject
     */
    public function getSuggestTokenizer()
    {
        if (is_null($this->suggestTokenizer)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(SearchKeyword::FIELD_SUGGEST_TOKENIZER);
            if (is_null($data)) {
                return null;
            }
            $this->suggestTokenizer = JsonObjectModel::of($data);
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

    public function setSuggestTokenizer(?JsonObject $suggestTokenizer): void
    {
        $this->suggestTokenizer = $suggestTokenizer;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}
