<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @extends KeyReferenceCollection<BusinessUnitKeyReference>
 * @method BusinessUnitKeyReference current()
 * @method BusinessUnitKeyReference end()
 * @method BusinessUnitKeyReference at($offset)
 */
class BusinessUnitKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert BusinessUnitKeyReference $value
     * @psalm-param BusinessUnitKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitKeyReference $data */
                $data = BusinessUnitKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
