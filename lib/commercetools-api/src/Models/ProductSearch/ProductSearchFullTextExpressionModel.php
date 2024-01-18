<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFullTextExpressionModel extends JsonObjectModel implements ProductSearchFullTextExpression
{
    /**
     *
     * @var ?ProductSearchFullTextValue
     */
    protected $fullText;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchFullTextValue $fullText = null
    ) {
        $this->fullText = $fullText;
    }

    /**
     *
     * @return null|ProductSearchFullTextValue
     */
    public function getFullText()
    {
        if (is_null($this->fullText)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FULL_TEXT);
            if (is_null($data)) {
                return null;
            }

            $this->fullText = ProductSearchFullTextValueModel::of($data);
        }

        return $this->fullText;
    }


    /**
     * @param ?ProductSearchFullTextValue $fullText
     */
    public function setFullText(?ProductSearchFullTextValue $fullText): void
    {
        $this->fullText = $fullText;
    }
}
