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
 * @extends ChangeCollection<SetLineItemDiscountedPricePerQuantityChange>
 * @method SetLineItemDiscountedPricePerQuantityChange current()
 * @method SetLineItemDiscountedPricePerQuantityChange at($offset)
 */
class SetLineItemDiscountedPricePerQuantityChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemDiscountedPricePerQuantityChange $value
     * @psalm-param SetLineItemDiscountedPricePerQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemDiscountedPricePerQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemDiscountedPricePerQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemDiscountedPricePerQuantityChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemDiscountedPricePerQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemDiscountedPricePerQuantityChange $data */
                $data = SetLineItemDiscountedPricePerQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
