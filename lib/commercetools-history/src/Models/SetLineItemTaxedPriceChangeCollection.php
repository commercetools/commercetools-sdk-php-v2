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
 * @extends MapperSequence<SetLineItemTaxedPriceChange>
 * @method SetLineItemTaxedPriceChange current()
 * @method SetLineItemTaxedPriceChange at($offset)
 */
class SetLineItemTaxedPriceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemTaxedPriceChange $value
     * @psalm-param SetLineItemTaxedPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTaxedPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTaxedPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTaxedPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemTaxedPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemTaxedPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
