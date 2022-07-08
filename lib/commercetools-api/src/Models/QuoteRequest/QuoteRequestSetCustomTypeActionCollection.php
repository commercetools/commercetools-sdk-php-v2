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
 * @extends QuoteRequestUpdateActionCollection<QuoteRequestSetCustomTypeAction>
 * @method QuoteRequestSetCustomTypeAction current()
 * @method QuoteRequestSetCustomTypeAction end()
 * @method QuoteRequestSetCustomTypeAction at($offset)
 */
class QuoteRequestSetCustomTypeActionCollection extends QuoteRequestUpdateActionCollection
{
    /**
     * @psalm-assert QuoteRequestSetCustomTypeAction $value
     * @psalm-param QuoteRequestSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestSetCustomTypeAction $data */
                $data = QuoteRequestSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
