<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of DeliveryFormat
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method DeliveryFormat current()
 * @method DeliveryFormat at($offset)
 */
class DeliveryFormatCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryFormatCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryFormat) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryFormat {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = DeliveryFormatModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
