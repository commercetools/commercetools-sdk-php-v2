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
 * @extends MapperSequence<DeliveryPlatformFormat>
 * @method DeliveryPlatformFormat current()
 * @method DeliveryPlatformFormat at($offset)
 */
class DeliveryPlatformFormatCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryPlatformFormat $value
     * @psalm-param DeliveryPlatformFormat|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryPlatformFormatCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryPlatformFormat) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryPlatformFormat
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryPlatformFormat {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryPlatformFormatModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
