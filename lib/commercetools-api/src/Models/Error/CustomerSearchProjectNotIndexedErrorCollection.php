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
 * @extends ErrorObjectCollection<CustomerSearchProjectNotIndexedError>
 * @method CustomerSearchProjectNotIndexedError current()
 * @method CustomerSearchProjectNotIndexedError end()
 * @method CustomerSearchProjectNotIndexedError at($offset)
 */
class CustomerSearchProjectNotIndexedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert CustomerSearchProjectNotIndexedError $value
     * @psalm-param CustomerSearchProjectNotIndexedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSearchProjectNotIndexedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSearchProjectNotIndexedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSearchProjectNotIndexedError
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSearchProjectNotIndexedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSearchProjectNotIndexedError $data */
                $data = CustomerSearchProjectNotIndexedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
