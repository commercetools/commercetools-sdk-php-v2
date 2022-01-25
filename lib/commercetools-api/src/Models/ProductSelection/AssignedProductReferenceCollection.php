<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssignedProductReference>
 * @method AssignedProductReference current()
 * @method AssignedProductReference end()
 * @method AssignedProductReference at($offset)
 */
class AssignedProductReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert AssignedProductReference $value
     * @psalm-param AssignedProductReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssignedProductReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssignedProductReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssignedProductReference
     */
    protected function mapper()
    {
        return function (?int $index): ?AssignedProductReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssignedProductReference $data */
                $data = AssignedProductReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
