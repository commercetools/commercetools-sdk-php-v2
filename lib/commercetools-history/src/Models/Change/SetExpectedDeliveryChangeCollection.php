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
 * @extends ChangeCollection<SetExpectedDeliveryChange>
 * @method SetExpectedDeliveryChange current()
 * @method SetExpectedDeliveryChange at($offset)
 */
class SetExpectedDeliveryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetExpectedDeliveryChange $value
     * @psalm-param SetExpectedDeliveryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetExpectedDeliveryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetExpectedDeliveryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetExpectedDeliveryChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetExpectedDeliveryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetExpectedDeliveryChange $data */
                $data = SetExpectedDeliveryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
