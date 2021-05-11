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
 * @extends MapperSequence<CustomerCreatePasswordResetToken>
 * @method CustomerCreatePasswordResetToken current()
 * @method CustomerCreatePasswordResetToken at($offset)
 */
class CustomerCreatePasswordResetTokenCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerCreatePasswordResetToken $value
     * @psalm-param CustomerCreatePasswordResetToken|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCreatePasswordResetTokenCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCreatePasswordResetToken) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCreatePasswordResetToken
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerCreatePasswordResetToken {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCreatePasswordResetToken $data */
                $data = CustomerCreatePasswordResetTokenModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
