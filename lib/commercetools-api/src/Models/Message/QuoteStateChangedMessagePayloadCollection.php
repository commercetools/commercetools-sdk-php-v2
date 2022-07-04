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
 * @extends MessagePayloadCollection<QuoteStateChangedMessagePayload>
 * @method QuoteStateChangedMessagePayload current()
 * @method QuoteStateChangedMessagePayload end()
 * @method QuoteStateChangedMessagePayload at($offset)
 */
class QuoteStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteStateChangedMessagePayload $value
     * @psalm-param QuoteStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteStateChangedMessagePayload $data */
                $data = QuoteStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
