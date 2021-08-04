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
 * @extends MapperSequence<CustomerPagedQueryResponse>
 * @method CustomerPagedQueryResponse current()
 * @method CustomerPagedQueryResponse end()
 * @method CustomerPagedQueryResponse at($offset)
 */
class CustomerPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerPagedQueryResponse $value
     * @psalm-param CustomerPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerPagedQueryResponse $data */
                $data = CustomerPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
