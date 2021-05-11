<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Customer>
 * @method Customer current()
 * @method Customer at($offset)
 */
class CustomerCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Customer $value
     * @psalm-param Customer|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCollection
     */
    public function add($value)
    {
        if (!$value instanceof Customer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Customer
     */
    protected function mapper()
    {
        return function (int $index): ?Customer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Customer $data */
                $data = CustomerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
