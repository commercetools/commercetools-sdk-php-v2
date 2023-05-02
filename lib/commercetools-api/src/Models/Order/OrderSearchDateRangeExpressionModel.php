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
final class OrderSearchDateRangeExpressionModel extends JsonObjectModel implements OrderSearchDateRangeExpression
{
    /**
     *
     * @var ?OrderSearchDateRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchDateRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|OrderSearchDateRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = OrderSearchDateRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?OrderSearchDateRangeValue $range
     */
    public function setRange(?OrderSearchDateRangeValue $range): void
    {
        $this->range = $range;
    }
}
