<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\QuoteRequest\QuoteRequestUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends QuoteRequestUpdateActionCollection<QuoteRequestChangeQuoteRequestStateAction>
 * @method QuoteRequestChangeQuoteRequestStateAction current()
 * @method QuoteRequestChangeQuoteRequestStateAction end()
 * @method QuoteRequestChangeQuoteRequestStateAction at($offset)
 */
class QuoteRequestChangeQuoteRequestStateActionCollection extends QuoteRequestUpdateActionCollection
{
    /**
     * @psalm-assert QuoteRequestChangeQuoteRequestStateAction $value
     * @psalm-param QuoteRequestChangeQuoteRequestStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestChangeQuoteRequestStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestChangeQuoteRequestStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestChangeQuoteRequestStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestChangeQuoteRequestStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestChangeQuoteRequestStateAction $data */
                $data = QuoteRequestChangeQuoteRequestStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
