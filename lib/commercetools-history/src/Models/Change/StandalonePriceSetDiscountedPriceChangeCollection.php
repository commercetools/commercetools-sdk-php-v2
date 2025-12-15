<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<StandalonePriceSetDiscountedPriceChange>
 * @method StandalonePriceSetDiscountedPriceChange current()
 * @method StandalonePriceSetDiscountedPriceChange end()
 * @method StandalonePriceSetDiscountedPriceChange at($offset)
 */
class StandalonePriceSetDiscountedPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetDiscountedPriceChange $value
     * @psalm-param StandalonePriceSetDiscountedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetDiscountedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetDiscountedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetDiscountedPriceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetDiscountedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetDiscountedPriceChange $data */
                $data = StandalonePriceSetDiscountedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
