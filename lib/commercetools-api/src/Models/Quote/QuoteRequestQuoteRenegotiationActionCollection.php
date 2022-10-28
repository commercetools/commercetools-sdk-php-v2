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
 * @extends QuoteUpdateActionCollection<QuoteRequestQuoteRenegotiationAction>
 * @method QuoteRequestQuoteRenegotiationAction current()
 * @method QuoteRequestQuoteRenegotiationAction end()
 * @method QuoteRequestQuoteRenegotiationAction at($offset)
 */
class QuoteRequestQuoteRenegotiationActionCollection extends QuoteUpdateActionCollection
{
    /**
     * @psalm-assert QuoteRequestQuoteRenegotiationAction $value
     * @psalm-param QuoteRequestQuoteRenegotiationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestQuoteRenegotiationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestQuoteRenegotiationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestQuoteRenegotiationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestQuoteRenegotiationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestQuoteRenegotiationAction $data */
                $data = QuoteRequestQuoteRenegotiationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
