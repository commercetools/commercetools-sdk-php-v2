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
 * @extends MessagePayloadCollection<QuoteRequestCustomerChangedMessagePayload>
 * @method QuoteRequestCustomerChangedMessagePayload current()
 * @method QuoteRequestCustomerChangedMessagePayload end()
 * @method QuoteRequestCustomerChangedMessagePayload at($offset)
 */
class QuoteRequestCustomerChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteRequestCustomerChangedMessagePayload $value
     * @psalm-param QuoteRequestCustomerChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestCustomerChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestCustomerChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestCustomerChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestCustomerChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestCustomerChangedMessagePayload $data */
                $data = QuoteRequestCustomerChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
