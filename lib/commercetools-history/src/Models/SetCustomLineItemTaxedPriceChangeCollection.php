<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetCustomLineItemTaxedPriceChange>
 * @method SetCustomLineItemTaxedPriceChange current()
 * @method SetCustomLineItemTaxedPriceChange at($offset)
 */
class SetCustomLineItemTaxedPriceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemTaxedPriceChange $value
     * @psalm-param SetCustomLineItemTaxedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTaxedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTaxedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTaxedPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemTaxedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemTaxedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
