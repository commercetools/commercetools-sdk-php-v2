<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\DiscountTypeCombinationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DiscountTypeCombinationCollection<BestDeal>
 * @method BestDeal current()
 * @method BestDeal end()
 * @method BestDeal at($offset)
 */
class BestDealCollection extends DiscountTypeCombinationCollection
{
    /**
     * @psalm-assert BestDeal $value
     * @psalm-param BestDeal|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BestDealCollection
     */
    public function add($value)
    {
        if (!$value instanceof BestDeal) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BestDeal
     */
    protected function mapper()
    {
        return function (?int $index): ?BestDeal {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BestDeal $data */
                $data = BestDealModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
