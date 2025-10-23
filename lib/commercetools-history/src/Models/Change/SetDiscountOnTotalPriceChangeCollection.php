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
 * @extends ChangeCollection<SetDiscountOnTotalPriceChange>
 * @method SetDiscountOnTotalPriceChange current()
 * @method SetDiscountOnTotalPriceChange end()
 * @method SetDiscountOnTotalPriceChange at($offset)
 */
class SetDiscountOnTotalPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDiscountOnTotalPriceChange $value
     * @psalm-param SetDiscountOnTotalPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDiscountOnTotalPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDiscountOnTotalPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDiscountOnTotalPriceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDiscountOnTotalPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDiscountOnTotalPriceChange $data */
                $data = SetDiscountOnTotalPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
