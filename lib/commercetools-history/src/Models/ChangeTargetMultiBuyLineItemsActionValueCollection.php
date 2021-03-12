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
 * @extends MapperSequence<ChangeTargetMultiBuyLineItemsActionValue>
 * @method ChangeTargetMultiBuyLineItemsActionValue current()
 * @method ChangeTargetMultiBuyLineItemsActionValue at($offset)
 */
class ChangeTargetMultiBuyLineItemsActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetMultiBuyLineItemsActionValue $value
     * @psalm-param ChangeTargetMultiBuyLineItemsActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetMultiBuyLineItemsActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetMultiBuyLineItemsActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetMultiBuyLineItemsActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetMultiBuyLineItemsActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetMultiBuyLineItemsActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
