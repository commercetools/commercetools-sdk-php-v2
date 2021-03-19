<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetLineItemShippingDetailsChange>
 * @method SetLineItemShippingDetailsChange current()
 * @method SetLineItemShippingDetailsChange at($offset)
 */
class SetLineItemShippingDetailsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemShippingDetailsChange $value
     * @psalm-param SetLineItemShippingDetailsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemShippingDetailsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemShippingDetailsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemShippingDetailsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemShippingDetailsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemShippingDetailsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
