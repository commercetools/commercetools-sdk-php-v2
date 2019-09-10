<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerUpdate>
 *
 * @method CustomerUpdate current()
 * @method CustomerUpdate at($offset)
 */
class CustomerUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerUpdate $value
     * @psalm-param CustomerUpdate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
