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
 * @extends QuoteUpdateActionCollection<QuoteSetCustomTypeAction>
 * @method QuoteSetCustomTypeAction current()
 * @method QuoteSetCustomTypeAction end()
 * @method QuoteSetCustomTypeAction at($offset)
 */
class QuoteSetCustomTypeActionCollection extends QuoteUpdateActionCollection
{
    /**
     * @psalm-assert QuoteSetCustomTypeAction $value
     * @psalm-param QuoteSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteSetCustomTypeAction $data */
                $data = QuoteSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
