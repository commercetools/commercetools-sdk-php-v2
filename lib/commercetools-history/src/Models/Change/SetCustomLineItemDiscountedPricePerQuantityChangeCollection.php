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
 * @extends ChangeCollection<SetCustomLineItemDiscountedPricePerQuantityChange>
 * @method SetCustomLineItemDiscountedPricePerQuantityChange current()
 * @method SetCustomLineItemDiscountedPricePerQuantityChange end()
 * @method SetCustomLineItemDiscountedPricePerQuantityChange at($offset)
 */
class SetCustomLineItemDiscountedPricePerQuantityChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemDiscountedPricePerQuantityChange $value
     * @psalm-param SetCustomLineItemDiscountedPricePerQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemDiscountedPricePerQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemDiscountedPricePerQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemDiscountedPricePerQuantityChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomLineItemDiscountedPricePerQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemDiscountedPricePerQuantityChange $data */
                $data = SetCustomLineItemDiscountedPricePerQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
