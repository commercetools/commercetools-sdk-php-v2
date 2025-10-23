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
 * @extends ChangeCollection<SetCustomLineItemDiscountedPriceChange>
 * @method SetCustomLineItemDiscountedPriceChange current()
 * @method SetCustomLineItemDiscountedPriceChange end()
 * @method SetCustomLineItemDiscountedPriceChange at($offset)
 */
class SetCustomLineItemDiscountedPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemDiscountedPriceChange $value
     * @psalm-param SetCustomLineItemDiscountedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemDiscountedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemDiscountedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemDiscountedPriceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomLineItemDiscountedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemDiscountedPriceChange $data */
                $data = SetCustomLineItemDiscountedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
