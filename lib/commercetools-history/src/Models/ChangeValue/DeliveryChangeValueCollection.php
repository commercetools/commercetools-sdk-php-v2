<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DeliveryChangeValue>
 * @method DeliveryChangeValue current()
 * @method DeliveryChangeValue at($offset)
 */
class DeliveryChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryChangeValue $value
     * @psalm-param DeliveryChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryChangeValue $data */
                $data = DeliveryChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
