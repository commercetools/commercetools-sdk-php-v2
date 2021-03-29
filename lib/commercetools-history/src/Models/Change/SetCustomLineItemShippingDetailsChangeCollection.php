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
 * @extends MapperSequence<SetCustomLineItemShippingDetailsChange>
 * @method SetCustomLineItemShippingDetailsChange current()
 * @method SetCustomLineItemShippingDetailsChange at($offset)
 */
class SetCustomLineItemShippingDetailsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemShippingDetailsChange $value
     * @psalm-param SetCustomLineItemShippingDetailsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemShippingDetailsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemShippingDetailsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemShippingDetailsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemShippingDetailsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemShippingDetailsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
