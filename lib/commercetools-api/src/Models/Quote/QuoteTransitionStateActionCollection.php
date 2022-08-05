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
 * @extends QuoteUpdateActionCollection<QuoteTransitionStateAction>
 * @method QuoteTransitionStateAction current()
 * @method QuoteTransitionStateAction end()
 * @method QuoteTransitionStateAction at($offset)
 */
class QuoteTransitionStateActionCollection extends QuoteUpdateActionCollection
{
    /**
     * @psalm-assert QuoteTransitionStateAction $value
     * @psalm-param QuoteTransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteTransitionStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteTransitionStateAction $data */
                $data = QuoteTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
