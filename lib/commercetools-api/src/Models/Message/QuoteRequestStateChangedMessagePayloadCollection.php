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
 * @extends MessagePayloadCollection<QuoteRequestStateChangedMessagePayload>
 * @method QuoteRequestStateChangedMessagePayload current()
 * @method QuoteRequestStateChangedMessagePayload end()
 * @method QuoteRequestStateChangedMessagePayload at($offset)
 */
class QuoteRequestStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteRequestStateChangedMessagePayload $value
     * @psalm-param QuoteRequestStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestStateChangedMessagePayload $data */
                $data = QuoteRequestStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
