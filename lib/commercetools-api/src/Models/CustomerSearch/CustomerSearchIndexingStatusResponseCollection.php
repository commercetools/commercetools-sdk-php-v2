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
 * @extends MapperSequence<CustomerSearchIndexingStatusResponse>
 * @method CustomerSearchIndexingStatusResponse current()
 * @method CustomerSearchIndexingStatusResponse end()
 * @method CustomerSearchIndexingStatusResponse at($offset)
 */
class CustomerSearchIndexingStatusResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSearchIndexingStatusResponse $value
     * @psalm-param CustomerSearchIndexingStatusResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSearchIndexingStatusResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSearchIndexingStatusResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSearchIndexingStatusResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSearchIndexingStatusResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSearchIndexingStatusResponse $data */
                $data = CustomerSearchIndexingStatusResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
