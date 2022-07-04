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
 * @extends MessageCollection<StagedQuoteDeletedMessage>
 * @method StagedQuoteDeletedMessage current()
 * @method StagedQuoteDeletedMessage end()
 * @method StagedQuoteDeletedMessage at($offset)
 */
class StagedQuoteDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StagedQuoteDeletedMessage $value
     * @psalm-param StagedQuoteDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteDeletedMessage $data */
                $data = StagedQuoteDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
