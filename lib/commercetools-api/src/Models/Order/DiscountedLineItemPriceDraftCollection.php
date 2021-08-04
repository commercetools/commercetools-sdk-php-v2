<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountedLineItemPriceDraft>
 * @method DiscountedLineItemPriceDraft current()
 * @method DiscountedLineItemPriceDraft at($offset)
 */
class DiscountedLineItemPriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedLineItemPriceDraft $value
     * @psalm-param DiscountedLineItemPriceDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedLineItemPriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedLineItemPriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedLineItemPriceDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountedLineItemPriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountedLineItemPriceDraft $data */
                $data = DiscountedLineItemPriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
