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
 * @extends MapperSequence<SetLineItemTotalPriceChange>
 * @method SetLineItemTotalPriceChange current()
 * @method SetLineItemTotalPriceChange at($offset)
 */
class SetLineItemTotalPriceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemTotalPriceChange $value
     * @psalm-param SetLineItemTotalPriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTotalPriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTotalPriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTotalPriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemTotalPriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemTotalPriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
