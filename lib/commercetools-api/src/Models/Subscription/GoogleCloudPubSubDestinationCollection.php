<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\DestinationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DestinationCollection<GoogleCloudPubSubDestination>
 * @method GoogleCloudPubSubDestination current()
 * @method GoogleCloudPubSubDestination at($offset)
 */
class GoogleCloudPubSubDestinationCollection extends DestinationCollection
{
    /**
     * @psalm-assert GoogleCloudPubSubDestination $value
     * @psalm-param GoogleCloudPubSubDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GoogleCloudPubSubDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof GoogleCloudPubSubDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GoogleCloudPubSubDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?GoogleCloudPubSubDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GoogleCloudPubSubDestination $data */
                $data = GoogleCloudPubSubDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
