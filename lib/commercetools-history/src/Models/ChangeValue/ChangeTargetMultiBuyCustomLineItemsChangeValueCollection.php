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
 * @extends ChangeTargetChangeValueCollection<ChangeTargetMultiBuyCustomLineItemsChangeValue>
 * @method ChangeTargetMultiBuyCustomLineItemsChangeValue current()
 * @method ChangeTargetMultiBuyCustomLineItemsChangeValue end()
 * @method ChangeTargetMultiBuyCustomLineItemsChangeValue at($offset)
 */
class ChangeTargetMultiBuyCustomLineItemsChangeValueCollection extends ChangeTargetChangeValueCollection
{
    /**
     * @psalm-assert ChangeTargetMultiBuyCustomLineItemsChangeValue $value
     * @psalm-param ChangeTargetMultiBuyCustomLineItemsChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetMultiBuyCustomLineItemsChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetMultiBuyCustomLineItemsChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetMultiBuyCustomLineItemsChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeTargetMultiBuyCustomLineItemsChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTargetMultiBuyCustomLineItemsChangeValue $data */
                $data = ChangeTargetMultiBuyCustomLineItemsChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
