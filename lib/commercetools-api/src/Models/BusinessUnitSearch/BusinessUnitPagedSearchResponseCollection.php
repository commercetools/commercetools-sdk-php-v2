<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnitSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<BusinessUnitPagedSearchResponse>
 * @method BusinessUnitPagedSearchResponse current()
 * @method BusinessUnitPagedSearchResponse end()
 * @method BusinessUnitPagedSearchResponse at($offset)
 */
class BusinessUnitPagedSearchResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitPagedSearchResponse $value
     * @psalm-param BusinessUnitPagedSearchResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitPagedSearchResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitPagedSearchResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitPagedSearchResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitPagedSearchResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitPagedSearchResponse $data */
                $data = BusinessUnitPagedSearchResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
