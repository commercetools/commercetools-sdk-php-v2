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
 * @extends MessageCollection<CustomerExternalIdSetMessage>
 * @method CustomerExternalIdSetMessage current()
 * @method CustomerExternalIdSetMessage end()
 * @method CustomerExternalIdSetMessage at($offset)
 */
class CustomerExternalIdSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerExternalIdSetMessage $value
     * @psalm-param CustomerExternalIdSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerExternalIdSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerExternalIdSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerExternalIdSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerExternalIdSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerExternalIdSetMessage $data */
                $data = CustomerExternalIdSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
