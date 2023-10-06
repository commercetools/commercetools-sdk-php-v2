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
 * @extends MessageCollection<CustomerEmailTokenCreatedMessage>
 * @method CustomerEmailTokenCreatedMessage current()
 * @method CustomerEmailTokenCreatedMessage end()
 * @method CustomerEmailTokenCreatedMessage at($offset)
 */
class CustomerEmailTokenCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerEmailTokenCreatedMessage $value
     * @psalm-param CustomerEmailTokenCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailTokenCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailTokenCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailTokenCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerEmailTokenCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailTokenCreatedMessage $data */
                $data = CustomerEmailTokenCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
