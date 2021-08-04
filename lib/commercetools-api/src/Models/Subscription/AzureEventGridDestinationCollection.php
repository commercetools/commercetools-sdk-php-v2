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
 * @extends DestinationCollection<AzureEventGridDestination>
 * @method AzureEventGridDestination current()
 * @method AzureEventGridDestination end()
 * @method AzureEventGridDestination at($offset)
 */
class AzureEventGridDestinationCollection extends DestinationCollection
{
    /**
     * @psalm-assert AzureEventGridDestination $value
     * @psalm-param AzureEventGridDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AzureEventGridDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof AzureEventGridDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AzureEventGridDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?AzureEventGridDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AzureEventGridDestination $data */
                $data = AzureEventGridDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
