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
 * @extends MessagePayloadCollection<QuoteRenegotiationRequestedMessagePayload>
 * @method QuoteRenegotiationRequestedMessagePayload current()
 * @method QuoteRenegotiationRequestedMessagePayload end()
 * @method QuoteRenegotiationRequestedMessagePayload at($offset)
 */
class QuoteRenegotiationRequestedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteRenegotiationRequestedMessagePayload $value
     * @psalm-param QuoteRenegotiationRequestedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRenegotiationRequestedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRenegotiationRequestedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRenegotiationRequestedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRenegotiationRequestedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRenegotiationRequestedMessagePayload $data */
                $data = QuoteRenegotiationRequestedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
