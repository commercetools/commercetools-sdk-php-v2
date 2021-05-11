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
 * @extends ChangeCollection<SetLineItemDiscountedPriceChange>
 * @method SetLineItemDiscountedPriceChange current()
 * @method SetLineItemDiscountedPriceChange at($offset)
 */
class SetLineItemDiscountedPriceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemDiscountedPriceChange $value
     * @psalm-param SetLineItemDiscountedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemDiscountedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemDiscountedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemDiscountedPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemDiscountedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemDiscountedPriceChange $data */
                $data = SetLineItemDiscountedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
