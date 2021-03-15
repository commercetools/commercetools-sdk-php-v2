<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeTargetLineItemsActionValue>
 * @method ChangeTargetLineItemsActionValue current()
 * @method ChangeTargetLineItemsActionValue at($offset)
 */
class ChangeTargetLineItemsActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetLineItemsActionValue $value
     * @psalm-param ChangeTargetLineItemsActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetLineItemsActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetLineItemsActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetLineItemsActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetLineItemsActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetLineItemsActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
