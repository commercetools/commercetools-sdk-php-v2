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
final class ProductSearchLongRangeExpressionModel extends JsonObjectModel implements ProductSearchLongRangeExpression
{
    /**
     *
     * @var ?ProductSearchLongRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchLongRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|ProductSearchLongRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = ProductSearchLongRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?ProductSearchLongRangeValue $range
     */
    public function setRange(?ProductSearchLongRangeValue $range): void
    {
        $this->range = $range;
    }
}
