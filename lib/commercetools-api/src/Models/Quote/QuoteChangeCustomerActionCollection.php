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
 * @extends QuoteUpdateActionCollection<QuoteChangeCustomerAction>
 * @method QuoteChangeCustomerAction current()
 * @method QuoteChangeCustomerAction end()
 * @method QuoteChangeCustomerAction at($offset)
 */
class QuoteChangeCustomerActionCollection extends QuoteUpdateActionCollection
{
    /**
     * @psalm-assert QuoteChangeCustomerAction $value
     * @psalm-param QuoteChangeCustomerAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteChangeCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteChangeCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteChangeCustomerAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteChangeCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteChangeCustomerAction $data */
                $data = QuoteChangeCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
