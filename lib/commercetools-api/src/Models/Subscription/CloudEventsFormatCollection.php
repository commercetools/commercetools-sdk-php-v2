<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\DeliveryFormatCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DeliveryFormatCollection<CloudEventsFormat>
 * @method CloudEventsFormat current()
 * @method CloudEventsFormat end()
 * @method CloudEventsFormat at($offset)
 */
class CloudEventsFormatCollection extends DeliveryFormatCollection
{
    /**
     * @psalm-assert CloudEventsFormat $value
     * @psalm-param CloudEventsFormat|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CloudEventsFormatCollection
     */
    public function add($value)
    {
        if (!$value instanceof CloudEventsFormat) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CloudEventsFormat
     */
    protected function mapper()
    {
        return function (?int $index): ?CloudEventsFormat {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CloudEventsFormat $data */
                $data = CloudEventsFormatModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
