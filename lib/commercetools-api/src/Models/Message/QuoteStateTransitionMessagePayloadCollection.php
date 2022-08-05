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
 * @extends MessagePayloadCollection<QuoteStateTransitionMessagePayload>
 * @method QuoteStateTransitionMessagePayload current()
 * @method QuoteStateTransitionMessagePayload end()
 * @method QuoteStateTransitionMessagePayload at($offset)
 */
class QuoteStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteStateTransitionMessagePayload $value
     * @psalm-param QuoteStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteStateTransitionMessagePayload $data */
                $data = QuoteStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
