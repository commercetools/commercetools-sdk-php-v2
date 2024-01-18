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
final class ProductSearchExactExpressionModel extends JsonObjectModel implements ProductSearchExactExpression
{
    /**
     *
     * @var ?ProductSearchAnyValue
     */
    protected $exact;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchAnyValue $exact = null
    ) {
        $this->exact = $exact;
    }

    /**
     *
     * @return null|ProductSearchAnyValue
     */
    public function getExact()
    {
        if (is_null($this->exact)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXACT);
            if (is_null($data)) {
                return null;
            }

            $this->exact = ProductSearchAnyValueModel::of($data);
        }

        return $this->exact;
    }


    /**
     * @param ?ProductSearchAnyValue $exact
     */
    public function setExact(?ProductSearchAnyValue $exact): void
    {
        $this->exact = $exact;
    }
}
