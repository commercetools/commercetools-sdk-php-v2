<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\StagedQuote\StagedQuoteUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StagedQuoteUpdateActionCollection<StagedQuoteSetSellerCommentAction>
 * @method StagedQuoteSetSellerCommentAction current()
 * @method StagedQuoteSetSellerCommentAction end()
 * @method StagedQuoteSetSellerCommentAction at($offset)
 */
class StagedQuoteSetSellerCommentActionCollection extends StagedQuoteUpdateActionCollection
{
    /**
     * @psalm-assert StagedQuoteSetSellerCommentAction $value
     * @psalm-param StagedQuoteSetSellerCommentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteSetSellerCommentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteSetSellerCommentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteSetSellerCommentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteSetSellerCommentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteSetSellerCommentAction $data */
                $data = StagedQuoteSetSellerCommentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
