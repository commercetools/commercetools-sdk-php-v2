<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerGroupPagedQueryResponse>
 * @method CustomerGroupPagedQueryResponse current()
 * @method CustomerGroupPagedQueryResponse at($offset)
 */
class CustomerGroupPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupPagedQueryResponse $value
     * @psalm-param CustomerGroupPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupPagedQueryResponse $data */
                $data = CustomerGroupPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
