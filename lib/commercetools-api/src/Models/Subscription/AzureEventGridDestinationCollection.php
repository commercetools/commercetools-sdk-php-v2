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
 * @extends MapperSequence<AzureEventGridDestination>
 * @method AzureEventGridDestination current()
 * @method AzureEventGridDestination at($offset)
 */
class AzureEventGridDestinationCollection extends MapperSequence
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
        return function (int $index): ?AzureEventGridDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AzureEventGridDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
