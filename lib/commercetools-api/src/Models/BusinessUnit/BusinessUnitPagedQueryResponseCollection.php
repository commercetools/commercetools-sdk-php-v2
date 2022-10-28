<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<BusinessUnitPagedQueryResponse>
 * @method BusinessUnitPagedQueryResponse current()
 * @method BusinessUnitPagedQueryResponse end()
 * @method BusinessUnitPagedQueryResponse at($offset)
 */
class BusinessUnitPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitPagedQueryResponse $value
     * @psalm-param BusinessUnitPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitPagedQueryResponse $data */
                $data = BusinessUnitPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
