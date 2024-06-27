<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerSearchRequest>
 * @method CustomerSearchRequest current()
 * @method CustomerSearchRequest end()
 * @method CustomerSearchRequest at($offset)
 */
class CustomerSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSearchRequest $value
     * @psalm-param CustomerSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSearchRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSearchRequest $data */
                $data = CustomerSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
