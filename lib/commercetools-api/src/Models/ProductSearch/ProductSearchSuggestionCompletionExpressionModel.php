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
final class ProductSearchSuggestionCompletionExpressionModel extends JsonObjectModel implements ProductSearchSuggestionCompletionExpression
{
    /**
     *
     * @var ?ProductSearchSuggestionCompletionExpressionValue
     */
    protected $completion;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchSuggestionCompletionExpressionValue $completion = null
    ) {
        $this->completion = $completion;
    }

    /**
     *
     * @return null|ProductSearchSuggestionCompletionExpressionValue
     */
    public function getCompletion()
    {
        if (is_null($this->completion)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_COMPLETION);
            if (is_null($data)) {
                return null;
            }

            $this->completion = ProductSearchSuggestionCompletionExpressionValueModel::of($data);
        }

        return $this->completion;
    }


    /**
     * @param ?ProductSearchSuggestionCompletionExpressionValue $completion
     */
    public function setCompletion(?ProductSearchSuggestionCompletionExpressionValue $completion): void
    {
        $this->completion = $completion;
    }
}
