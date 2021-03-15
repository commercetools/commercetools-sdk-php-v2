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
 * @extends MapperSequence<ChangeTargetCustomLineItemsActionValue>
 * @method ChangeTargetCustomLineItemsActionValue current()
 * @method ChangeTargetCustomLineItemsActionValue at($offset)
 */
class ChangeTargetCustomLineItemsActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetCustomLineItemsActionValue $value
     * @psalm-param ChangeTargetCustomLineItemsActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetCustomLineItemsActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetCustomLineItemsActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetCustomLineItemsActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetCustomLineItemsActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetCustomLineItemsActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
