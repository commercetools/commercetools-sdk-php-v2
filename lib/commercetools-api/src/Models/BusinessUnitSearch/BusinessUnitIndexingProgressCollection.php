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
 * @extends MapperSequence<BusinessUnitIndexingProgress>
 * @method BusinessUnitIndexingProgress current()
 * @method BusinessUnitIndexingProgress end()
 * @method BusinessUnitIndexingProgress at($offset)
 */
class BusinessUnitIndexingProgressCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitIndexingProgress $value
     * @psalm-param BusinessUnitIndexingProgress|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitIndexingProgressCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitIndexingProgress) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitIndexingProgress
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitIndexingProgress {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitIndexingProgress $data */
                $data = BusinessUnitIndexingProgressModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
