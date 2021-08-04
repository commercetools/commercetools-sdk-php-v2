<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderField>
 * @method OrderField current()
 * @method OrderField at($offset)
 */
class OrderFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderField $value
     * @psalm-param OrderField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderField
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderField $data */
                $data = OrderFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
