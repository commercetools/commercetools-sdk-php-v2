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
 * @extends MapperSequence<BusinessUnitSearchIndexingStatusResponse>
 * @method BusinessUnitSearchIndexingStatusResponse current()
 * @method BusinessUnitSearchIndexingStatusResponse end()
 * @method BusinessUnitSearchIndexingStatusResponse at($offset)
 */
class BusinessUnitSearchIndexingStatusResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitSearchIndexingStatusResponse $value
     * @psalm-param BusinessUnitSearchIndexingStatusResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSearchIndexingStatusResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSearchIndexingStatusResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSearchIndexingStatusResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSearchIndexingStatusResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSearchIndexingStatusResponse $data */
                $data = BusinessUnitSearchIndexingStatusResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
