<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<QuoteRequestStateTransitionMessage>
 * @method QuoteRequestStateTransitionMessage current()
 * @method QuoteRequestStateTransitionMessage end()
 * @method QuoteRequestStateTransitionMessage at($offset)
 */
class QuoteRequestStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteRequestStateTransitionMessage $value
     * @psalm-param QuoteRequestStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestStateTransitionMessage $data */
                $data = QuoteRequestStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
