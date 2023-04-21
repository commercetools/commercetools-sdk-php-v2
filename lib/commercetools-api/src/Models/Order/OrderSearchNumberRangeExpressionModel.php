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
final class OrderSearchNumberRangeExpressionModel extends JsonObjectModel implements OrderSearchNumberRangeExpression
{
    /**
     *
     * @var ?OrderSearchNumberRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchNumberRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|OrderSearchNumberRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = OrderSearchNumberRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?OrderSearchNumberRangeValue $range
     */
    public function setRange(?OrderSearchNumberRangeValue $range): void
    {
        $this->range = $range;
    }
}
