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
 * @extends MessagePayloadCollection<QuoteRequestCreatedMessagePayload>
 * @method QuoteRequestCreatedMessagePayload current()
 * @method QuoteRequestCreatedMessagePayload end()
 * @method QuoteRequestCreatedMessagePayload at($offset)
 */
class QuoteRequestCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteRequestCreatedMessagePayload $value
     * @psalm-param QuoteRequestCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestCreatedMessagePayload $data */
                $data = QuoteRequestCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
