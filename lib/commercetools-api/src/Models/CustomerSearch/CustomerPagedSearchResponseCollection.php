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
 * @extends MapperSequence<CustomerPagedSearchResponse>
 * @method CustomerPagedSearchResponse current()
 * @method CustomerPagedSearchResponse end()
 * @method CustomerPagedSearchResponse at($offset)
 */
class CustomerPagedSearchResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerPagedSearchResponse $value
     * @psalm-param CustomerPagedSearchResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerPagedSearchResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerPagedSearchResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerPagedSearchResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerPagedSearchResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerPagedSearchResponse $data */
                $data = CustomerPagedSearchResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
