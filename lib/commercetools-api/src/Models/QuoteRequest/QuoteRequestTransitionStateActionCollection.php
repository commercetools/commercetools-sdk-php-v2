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
 * @extends QuoteRequestUpdateActionCollection<QuoteRequestTransitionStateAction>
 * @method QuoteRequestTransitionStateAction current()
 * @method QuoteRequestTransitionStateAction end()
 * @method QuoteRequestTransitionStateAction at($offset)
 */
class QuoteRequestTransitionStateActionCollection extends QuoteRequestUpdateActionCollection
{
    /**
     * @psalm-assert QuoteRequestTransitionStateAction $value
     * @psalm-param QuoteRequestTransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestTransitionStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestTransitionStateAction $data */
                $data = QuoteRequestTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
