<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\Quote\QuoteUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends QuoteUpdateActionCollection<QuoteChangeQuoteStateAction>
 * @method QuoteChangeQuoteStateAction current()
 * @method QuoteChangeQuoteStateAction end()
 * @method QuoteChangeQuoteStateAction at($offset)
 */
class QuoteChangeQuoteStateActionCollection extends QuoteUpdateActionCollection
{
    /**
     * @psalm-assert QuoteChangeQuoteStateAction $value
     * @psalm-param QuoteChangeQuoteStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteChangeQuoteStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteChangeQuoteStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteChangeQuoteStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteChangeQuoteStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteChangeQuoteStateAction $data */
                $data = QuoteChangeQuoteStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
