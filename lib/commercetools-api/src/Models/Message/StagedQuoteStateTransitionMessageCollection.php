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
 * @extends MessageCollection<StagedQuoteStateTransitionMessage>
 * @method StagedQuoteStateTransitionMessage current()
 * @method StagedQuoteStateTransitionMessage end()
 * @method StagedQuoteStateTransitionMessage at($offset)
 */
class StagedQuoteStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StagedQuoteStateTransitionMessage $value
     * @psalm-param StagedQuoteStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteStateTransitionMessage $data */
                $data = StagedQuoteStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
