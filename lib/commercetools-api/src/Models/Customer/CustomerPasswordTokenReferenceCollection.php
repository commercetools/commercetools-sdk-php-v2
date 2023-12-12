<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<CustomerPasswordTokenReference>
 * @method CustomerPasswordTokenReference current()
 * @method CustomerPasswordTokenReference end()
 * @method CustomerPasswordTokenReference at($offset)
 */
class CustomerPasswordTokenReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert CustomerPasswordTokenReference $value
     * @psalm-param CustomerPasswordTokenReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerPasswordTokenReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerPasswordTokenReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerPasswordTokenReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerPasswordTokenReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerPasswordTokenReference $data */
                $data = CustomerPasswordTokenReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
