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
 * @extends MapperSequence<AssignedProductSelection>
 * @method AssignedProductSelection current()
 * @method AssignedProductSelection end()
 * @method AssignedProductSelection at($offset)
 */
class AssignedProductSelectionCollection extends MapperSequence
{
    /**
     * @psalm-assert AssignedProductSelection $value
     * @psalm-param AssignedProductSelection|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssignedProductSelectionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssignedProductSelection) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssignedProductSelection
     */
    protected function mapper()
    {
        return function (?int $index): ?AssignedProductSelection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssignedProductSelection $data */
                $data = AssignedProductSelectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
