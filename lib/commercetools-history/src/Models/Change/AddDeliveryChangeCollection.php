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
 * @extends ChangeCollection<AddDeliveryChange>
 * @method AddDeliveryChange current()
 * @method AddDeliveryChange at($offset)
 */
class AddDeliveryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddDeliveryChange $value
     * @psalm-param AddDeliveryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddDeliveryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddDeliveryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddDeliveryChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddDeliveryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddDeliveryChange $data */
                $data = AddDeliveryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
