<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<BusinessUnitReference>
 * @method BusinessUnitReference current()
 * @method BusinessUnitReference end()
 * @method BusinessUnitReference at($offset)
 */
class BusinessUnitReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert BusinessUnitReference $value
     * @psalm-param BusinessUnitReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitReference
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitReference $data */
                $data = BusinessUnitReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
