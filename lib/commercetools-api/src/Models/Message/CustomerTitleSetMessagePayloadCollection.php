<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<CustomerTitleSetMessagePayload>
 * @method CustomerTitleSetMessagePayload current()
 * @method CustomerTitleSetMessagePayload end()
 * @method CustomerTitleSetMessagePayload at($offset)
 */
class CustomerTitleSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerTitleSetMessagePayload $value
     * @psalm-param CustomerTitleSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerTitleSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerTitleSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerTitleSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerTitleSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerTitleSetMessagePayload $data */
                $data = CustomerTitleSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
