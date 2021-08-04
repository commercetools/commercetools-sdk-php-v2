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
 * @extends DestinationCollection<AzureServiceBusDestination>
 * @method AzureServiceBusDestination current()
 * @method AzureServiceBusDestination at($offset)
 */
class AzureServiceBusDestinationCollection extends DestinationCollection
{
    /**
     * @psalm-assert AzureServiceBusDestination $value
     * @psalm-param AzureServiceBusDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AzureServiceBusDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof AzureServiceBusDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AzureServiceBusDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?AzureServiceBusDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AzureServiceBusDestination $data */
                $data = AzureServiceBusDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
