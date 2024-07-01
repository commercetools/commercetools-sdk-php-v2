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
 * @extends MapperSequence<CustomerSearchResult>
 * @method CustomerSearchResult current()
 * @method CustomerSearchResult end()
 * @method CustomerSearchResult at($offset)
 */
class CustomerSearchResultCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSearchResult $value
     * @psalm-param CustomerSearchResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSearchResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSearchResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSearchResult
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSearchResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSearchResult $data */
                $data = CustomerSearchResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
