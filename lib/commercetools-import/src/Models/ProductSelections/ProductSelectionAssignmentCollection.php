<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSelectionAssignment>
 * @method ProductSelectionAssignment current()
 * @method ProductSelectionAssignment end()
 * @method ProductSelectionAssignment at($offset)
 */
class ProductSelectionAssignmentCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSelectionAssignment $value
     * @psalm-param ProductSelectionAssignment|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionAssignmentCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionAssignment) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionAssignment
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionAssignment {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionAssignment $data */
                $data = ProductSelectionAssignmentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
