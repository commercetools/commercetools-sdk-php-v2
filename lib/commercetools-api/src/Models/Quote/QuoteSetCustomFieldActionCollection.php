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
 * @extends QuoteUpdateActionCollection<QuoteSetCustomFieldAction>
 * @method QuoteSetCustomFieldAction current()
 * @method QuoteSetCustomFieldAction end()
 * @method QuoteSetCustomFieldAction at($offset)
 */
class QuoteSetCustomFieldActionCollection extends QuoteUpdateActionCollection
{
    /**
     * @psalm-assert QuoteSetCustomFieldAction $value
     * @psalm-param QuoteSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteSetCustomFieldAction $data */
                $data = QuoteSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
