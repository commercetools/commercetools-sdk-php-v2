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
 * @extends MapperSequence<CustomerEmailVerify>
 * @method CustomerEmailVerify current()
 * @method CustomerEmailVerify end()
 * @method CustomerEmailVerify at($offset)
 */
class CustomerEmailVerifyCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerEmailVerify $value
     * @psalm-param CustomerEmailVerify|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailVerifyCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailVerify) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailVerify
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerEmailVerify {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailVerify $data */
                $data = CustomerEmailVerifyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
