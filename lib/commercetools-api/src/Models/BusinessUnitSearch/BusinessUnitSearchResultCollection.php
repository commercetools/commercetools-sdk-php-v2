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
 * @extends MapperSequence<BusinessUnitSearchResult>
 * @method BusinessUnitSearchResult current()
 * @method BusinessUnitSearchResult end()
 * @method BusinessUnitSearchResult at($offset)
 */
class BusinessUnitSearchResultCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitSearchResult $value
     * @psalm-param BusinessUnitSearchResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSearchResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSearchResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSearchResult
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSearchResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSearchResult $data */
                $data = BusinessUnitSearchResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
