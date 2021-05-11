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
 * @extends MapperSequence<CustomerCreateEmailToken>
 * @method CustomerCreateEmailToken current()
 * @method CustomerCreateEmailToken at($offset)
 */
class CustomerCreateEmailTokenCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerCreateEmailToken $value
     * @psalm-param CustomerCreateEmailToken|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCreateEmailTokenCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCreateEmailToken) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCreateEmailToken
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerCreateEmailToken {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCreateEmailToken $data */
                $data = CustomerCreateEmailTokenModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
