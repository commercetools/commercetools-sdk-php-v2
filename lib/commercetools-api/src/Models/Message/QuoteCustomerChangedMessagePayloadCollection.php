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
 * @extends MessagePayloadCollection<QuoteCustomerChangedMessagePayload>
 * @method QuoteCustomerChangedMessagePayload current()
 * @method QuoteCustomerChangedMessagePayload end()
 * @method QuoteCustomerChangedMessagePayload at($offset)
 */
class QuoteCustomerChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteCustomerChangedMessagePayload $value
     * @psalm-param QuoteCustomerChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteCustomerChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteCustomerChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteCustomerChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteCustomerChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteCustomerChangedMessagePayload $data */
                $data = QuoteCustomerChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
