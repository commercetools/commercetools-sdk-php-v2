<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\StandalonePrice\StandalonePriceUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetDiscountedPriceAction>
 * @method StandalonePriceSetDiscountedPriceAction current()
 * @method StandalonePriceSetDiscountedPriceAction end()
 * @method StandalonePriceSetDiscountedPriceAction at($offset)
 */
class StandalonePriceSetDiscountedPriceActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetDiscountedPriceAction $value
     * @psalm-param StandalonePriceSetDiscountedPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetDiscountedPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetDiscountedPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetDiscountedPriceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetDiscountedPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetDiscountedPriceAction $data */
                $data = StandalonePriceSetDiscountedPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
