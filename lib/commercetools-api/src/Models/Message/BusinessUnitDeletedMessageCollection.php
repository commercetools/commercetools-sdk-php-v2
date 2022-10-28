<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<BusinessUnitDeletedMessage>
 * @method BusinessUnitDeletedMessage current()
 * @method BusinessUnitDeletedMessage end()
 * @method BusinessUnitDeletedMessage at($offset)
 */
class BusinessUnitDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitDeletedMessage $value
     * @psalm-param BusinessUnitDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitDeletedMessage $data */
                $data = BusinessUnitDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
