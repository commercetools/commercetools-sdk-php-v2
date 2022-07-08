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
 * @extends QuoteRequestUpdateActionCollection<QuoteRequestSetCustomFieldAction>
 * @method QuoteRequestSetCustomFieldAction current()
 * @method QuoteRequestSetCustomFieldAction end()
 * @method QuoteRequestSetCustomFieldAction at($offset)
 */
class QuoteRequestSetCustomFieldActionCollection extends QuoteRequestUpdateActionCollection
{
    /**
     * @psalm-assert QuoteRequestSetCustomFieldAction $value
     * @psalm-param QuoteRequestSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestSetCustomFieldAction $data */
                $data = QuoteRequestSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
