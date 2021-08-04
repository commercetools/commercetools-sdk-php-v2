<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DeliveryAddressDraft>
 * @method DeliveryAddressDraft current()
 * @method DeliveryAddressDraft at($offset)
 */
class DeliveryAddressDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryAddressDraft $value
     * @psalm-param DeliveryAddressDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryAddressDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryAddressDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryAddressDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryAddressDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryAddressDraft $data */
                $data = DeliveryAddressDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
