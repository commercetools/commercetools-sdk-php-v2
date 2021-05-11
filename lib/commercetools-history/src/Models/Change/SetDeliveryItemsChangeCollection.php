<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetDeliveryItemsChange>
 * @method SetDeliveryItemsChange current()
 * @method SetDeliveryItemsChange at($offset)
 */
class SetDeliveryItemsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDeliveryItemsChange $value
     * @psalm-param SetDeliveryItemsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryItemsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryItemsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryItemsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDeliveryItemsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDeliveryItemsChange $data */
                $data = SetDeliveryItemsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
