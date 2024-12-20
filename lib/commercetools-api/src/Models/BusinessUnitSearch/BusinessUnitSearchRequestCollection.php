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
 * @extends MapperSequence<BusinessUnitSearchRequest>
 * @method BusinessUnitSearchRequest current()
 * @method BusinessUnitSearchRequest end()
 * @method BusinessUnitSearchRequest at($offset)
 */
class BusinessUnitSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitSearchRequest $value
     * @psalm-param BusinessUnitSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSearchRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSearchRequest $data */
                $data = BusinessUnitSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
