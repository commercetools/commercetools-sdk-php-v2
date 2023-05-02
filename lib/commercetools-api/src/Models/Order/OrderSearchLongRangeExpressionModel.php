<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSearchLongRangeExpressionModel extends JsonObjectModel implements OrderSearchLongRangeExpression
{
    /**
     *
     * @var ?OrderSearchLongRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchLongRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|OrderSearchLongRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = OrderSearchLongRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?OrderSearchLongRangeValue $range
     */
    public function setRange(?OrderSearchLongRangeValue $range): void
    {
        $this->range = $range;
    }
}
