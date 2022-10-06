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
 * @extends MapperSequence<BusinessUnitUpdate>
 * @method BusinessUnitUpdate current()
 * @method BusinessUnitUpdate end()
 * @method BusinessUnitUpdate at($offset)
 */
class BusinessUnitUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert BusinessUnitUpdate $value
     * @psalm-param BusinessUnitUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitUpdate $data */
                $data = BusinessUnitUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
