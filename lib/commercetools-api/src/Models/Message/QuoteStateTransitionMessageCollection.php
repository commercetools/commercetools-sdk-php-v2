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
 * @extends MessageCollection<QuoteStateTransitionMessage>
 * @method QuoteStateTransitionMessage current()
 * @method QuoteStateTransitionMessage end()
 * @method QuoteStateTransitionMessage at($offset)
 */
class QuoteStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteStateTransitionMessage $value
     * @psalm-param QuoteStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteStateTransitionMessage $data */
                $data = QuoteStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
