<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\ProductSelection\ProductSelectionTypeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSelectionTypeCollection<IndividualExclusionProductSelectionType>
 * @method IndividualExclusionProductSelectionType current()
 * @method IndividualExclusionProductSelectionType end()
 * @method IndividualExclusionProductSelectionType at($offset)
 */
class IndividualExclusionProductSelectionTypeCollection extends ProductSelectionTypeCollection
{
    /**
     * @psalm-assert IndividualExclusionProductSelectionType $value
     * @psalm-param IndividualExclusionProductSelectionType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return IndividualExclusionProductSelectionTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof IndividualExclusionProductSelectionType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?IndividualExclusionProductSelectionType
     */
    protected function mapper()
    {
        return function (?int $index): ?IndividualExclusionProductSelectionType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var IndividualExclusionProductSelectionType $data */
                $data = IndividualExclusionProductSelectionTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
