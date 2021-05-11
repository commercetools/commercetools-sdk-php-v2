<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InventoryQuantityValue>
 * @method InventoryQuantityValue current()
 * @method InventoryQuantityValue at($offset)
 */
class InventoryQuantityValueCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryQuantityValue $value
     * @psalm-param InventoryQuantityValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryQuantityValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryQuantityValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryQuantityValue
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryQuantityValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryQuantityValue $data */
                $data = InventoryQuantityValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
