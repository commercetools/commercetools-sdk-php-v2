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
 * @extends QuoteRequestUpdateActionCollection<QuoteRequestChangeCustomerAction>
 * @method QuoteRequestChangeCustomerAction current()
 * @method QuoteRequestChangeCustomerAction end()
 * @method QuoteRequestChangeCustomerAction at($offset)
 */
class QuoteRequestChangeCustomerActionCollection extends QuoteRequestUpdateActionCollection
{
    /**
     * @psalm-assert QuoteRequestChangeCustomerAction $value
     * @psalm-param QuoteRequestChangeCustomerAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestChangeCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestChangeCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestChangeCustomerAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestChangeCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestChangeCustomerAction $data */
                $data = QuoteRequestChangeCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
