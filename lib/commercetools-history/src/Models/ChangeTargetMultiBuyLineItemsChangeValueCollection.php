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
 * @extends MapperSequence<ChangeTargetMultiBuyLineItemsChangeValue>
 * @method ChangeTargetMultiBuyLineItemsChangeValue current()
 * @method ChangeTargetMultiBuyLineItemsChangeValue at($offset)
 */
class ChangeTargetMultiBuyLineItemsChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetMultiBuyLineItemsChangeValue $value
     * @psalm-param ChangeTargetMultiBuyLineItemsChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetMultiBuyLineItemsChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetMultiBuyLineItemsChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetMultiBuyLineItemsChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetMultiBuyLineItemsChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetMultiBuyLineItemsChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
