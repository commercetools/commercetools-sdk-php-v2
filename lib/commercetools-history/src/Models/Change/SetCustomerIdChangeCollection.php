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
 * @extends MapperSequence<SetCustomerIdChange>
 * @method SetCustomerIdChange current()
 * @method SetCustomerIdChange at($offset)
 */
class SetCustomerIdChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomerIdChange $value
     * @psalm-param SetCustomerIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerIdChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomerIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
