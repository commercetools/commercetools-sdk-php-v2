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
final class ProductSearchTimeRangeExpressionModel extends JsonObjectModel implements ProductSearchTimeRangeExpression
{
    /**
     *
     * @var ?ProductSearchTimeRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchTimeRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|ProductSearchTimeRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = ProductSearchTimeRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?ProductSearchTimeRangeValue $range
     */
    public function setRange(?ProductSearchTimeRangeValue $range): void
    {
        $this->range = $range;
    }
}
