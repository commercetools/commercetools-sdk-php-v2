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
 * @extends MapperSequence<CustomerToken>
 * @method CustomerToken current()
 * @method CustomerToken at($offset)
 */
class CustomerTokenCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerToken $value
     * @psalm-param CustomerToken|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerTokenCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerToken) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerToken
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerToken {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerToken $data */
                $data = CustomerTokenModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
