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
 * @extends MapperSequence<AddPaymentChange>
 * @method AddPaymentChange current()
 * @method AddPaymentChange at($offset)
 */
class AddPaymentChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddPaymentChange $value
     * @psalm-param AddPaymentChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddPaymentChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddPaymentChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddPaymentChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddPaymentChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddPaymentChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
