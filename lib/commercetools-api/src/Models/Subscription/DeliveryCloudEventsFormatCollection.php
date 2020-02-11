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
 * @extends MapperSequence<DeliveryCloudEventsFormat>
 * @method DeliveryCloudEventsFormat current()
 * @method DeliveryCloudEventsFormat at($offset)
 */
class DeliveryCloudEventsFormatCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryCloudEventsFormat $value
     * @psalm-param DeliveryCloudEventsFormat|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCloudEventsFormatCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryCloudEventsFormat) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryCloudEventsFormat
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryCloudEventsFormat {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryCloudEventsFormatModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
