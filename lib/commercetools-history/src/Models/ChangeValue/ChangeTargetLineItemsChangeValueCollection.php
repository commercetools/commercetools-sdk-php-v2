<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\History\Models\ChangeValue\ChangeTargetChangeValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeTargetChangeValueCollection<ChangeTargetLineItemsChangeValue>
 * @method ChangeTargetLineItemsChangeValue current()
 * @method ChangeTargetLineItemsChangeValue at($offset)
 */
class ChangeTargetLineItemsChangeValueCollection extends ChangeTargetChangeValueCollection
{
    /**
     * @psalm-assert ChangeTargetLineItemsChangeValue $value
     * @psalm-param ChangeTargetLineItemsChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetLineItemsChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetLineItemsChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetLineItemsChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetLineItemsChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTargetLineItemsChangeValue $data */
                $data = ChangeTargetLineItemsChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
