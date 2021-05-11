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
 * @extends ChangeCollection<AddParcelToDeliveryChange>
 * @method AddParcelToDeliveryChange current()
 * @method AddParcelToDeliveryChange at($offset)
 */
class AddParcelToDeliveryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddParcelToDeliveryChange $value
     * @psalm-param AddParcelToDeliveryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddParcelToDeliveryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddParcelToDeliveryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddParcelToDeliveryChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddParcelToDeliveryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddParcelToDeliveryChange $data */
                $data = AddParcelToDeliveryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
