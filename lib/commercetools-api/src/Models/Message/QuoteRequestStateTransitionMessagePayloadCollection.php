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
 * @extends MessagePayloadCollection<QuoteRequestStateTransitionMessagePayload>
 * @method QuoteRequestStateTransitionMessagePayload current()
 * @method QuoteRequestStateTransitionMessagePayload end()
 * @method QuoteRequestStateTransitionMessagePayload at($offset)
 */
class QuoteRequestStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteRequestStateTransitionMessagePayload $value
     * @psalm-param QuoteRequestStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestStateTransitionMessagePayload $data */
                $data = QuoteRequestStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
