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
 * @extends ChangeTargetChangeValueCollection<ChangeTargetMultiBuyLineItemsChangeValue>
 * @method ChangeTargetMultiBuyLineItemsChangeValue current()
 * @method ChangeTargetMultiBuyLineItemsChangeValue at($offset)
 */
class ChangeTargetMultiBuyLineItemsChangeValueCollection extends ChangeTargetChangeValueCollection
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
        return function (?int $index): ?ChangeTargetMultiBuyLineItemsChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTargetMultiBuyLineItemsChangeValue $data */
                $data = ChangeTargetMultiBuyLineItemsChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
