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
 * @extends ErrorObjectCollection<ExpiredCustomerEmailTokenError>
 * @method ExpiredCustomerEmailTokenError current()
 * @method ExpiredCustomerEmailTokenError end()
 * @method ExpiredCustomerEmailTokenError at($offset)
 */
class ExpiredCustomerEmailTokenErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExpiredCustomerEmailTokenError $value
     * @psalm-param ExpiredCustomerEmailTokenError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExpiredCustomerEmailTokenErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExpiredCustomerEmailTokenError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExpiredCustomerEmailTokenError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExpiredCustomerEmailTokenError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExpiredCustomerEmailTokenError $data */
                $data = ExpiredCustomerEmailTokenErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
