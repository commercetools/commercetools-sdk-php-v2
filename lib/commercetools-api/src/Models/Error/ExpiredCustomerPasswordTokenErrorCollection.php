<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<ExpiredCustomerPasswordTokenError>
 * @method ExpiredCustomerPasswordTokenError current()
 * @method ExpiredCustomerPasswordTokenError end()
 * @method ExpiredCustomerPasswordTokenError at($offset)
 */
class ExpiredCustomerPasswordTokenErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExpiredCustomerPasswordTokenError $value
     * @psalm-param ExpiredCustomerPasswordTokenError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExpiredCustomerPasswordTokenErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExpiredCustomerPasswordTokenError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExpiredCustomerPasswordTokenError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExpiredCustomerPasswordTokenError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExpiredCustomerPasswordTokenError $data */
                $data = ExpiredCustomerPasswordTokenErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
