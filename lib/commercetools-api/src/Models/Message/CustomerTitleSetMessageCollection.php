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
 * @extends MessageCollection<CustomerTitleSetMessage>
 * @method CustomerTitleSetMessage current()
 * @method CustomerTitleSetMessage end()
 * @method CustomerTitleSetMessage at($offset)
 */
class CustomerTitleSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerTitleSetMessage $value
     * @psalm-param CustomerTitleSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerTitleSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerTitleSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerTitleSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerTitleSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerTitleSetMessage $data */
                $data = CustomerTitleSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
