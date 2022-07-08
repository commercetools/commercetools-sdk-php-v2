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
 * @extends MessageCollection<StagedQuoteSellerCommentSetMessage>
 * @method StagedQuoteSellerCommentSetMessage current()
 * @method StagedQuoteSellerCommentSetMessage end()
 * @method StagedQuoteSellerCommentSetMessage at($offset)
 */
class StagedQuoteSellerCommentSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StagedQuoteSellerCommentSetMessage $value
     * @psalm-param StagedQuoteSellerCommentSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteSellerCommentSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteSellerCommentSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteSellerCommentSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteSellerCommentSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteSellerCommentSetMessage $data */
                $data = StagedQuoteSellerCommentSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
