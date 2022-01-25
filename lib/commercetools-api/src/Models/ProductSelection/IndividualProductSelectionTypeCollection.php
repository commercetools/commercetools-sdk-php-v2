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
 * @extends ProductSelectionTypeCollection<IndividualProductSelectionType>
 * @method IndividualProductSelectionType current()
 * @method IndividualProductSelectionType end()
 * @method IndividualProductSelectionType at($offset)
 */
class IndividualProductSelectionTypeCollection extends ProductSelectionTypeCollection
{
    /**
     * @psalm-assert IndividualProductSelectionType $value
     * @psalm-param IndividualProductSelectionType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return IndividualProductSelectionTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof IndividualProductSelectionType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?IndividualProductSelectionType
     */
    protected function mapper()
    {
        return function (?int $index): ?IndividualProductSelectionType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var IndividualProductSelectionType $data */
                $data = IndividualProductSelectionTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
