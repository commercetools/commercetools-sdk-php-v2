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
 * @extends ChangeCollection<SetShippingInfoDiscountedPriceChange>
 * @method SetShippingInfoDiscountedPriceChange current()
 * @method SetShippingInfoDiscountedPriceChange end()
 * @method SetShippingInfoDiscountedPriceChange at($offset)
 */
class SetShippingInfoDiscountedPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingInfoDiscountedPriceChange $value
     * @psalm-param SetShippingInfoDiscountedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingInfoDiscountedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingInfoDiscountedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingInfoDiscountedPriceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingInfoDiscountedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingInfoDiscountedPriceChange $data */
                $data = SetShippingInfoDiscountedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
