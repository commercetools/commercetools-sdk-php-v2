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
 * @extends MessagePayloadCollection<QuoteCreatedMessagePayload>
 * @method QuoteCreatedMessagePayload current()
 * @method QuoteCreatedMessagePayload end()
 * @method QuoteCreatedMessagePayload at($offset)
 */
class QuoteCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteCreatedMessagePayload $value
     * @psalm-param QuoteCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteCreatedMessagePayload $data */
                $data = QuoteCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
