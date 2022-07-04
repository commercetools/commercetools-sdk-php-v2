<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyQuoteRequestUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyQuoteRequestUpdateActionCollection<MyQuoteRequestCancelAction>
 * @method MyQuoteRequestCancelAction current()
 * @method MyQuoteRequestCancelAction end()
 * @method MyQuoteRequestCancelAction at($offset)
 */
class MyQuoteRequestCancelActionCollection extends MyQuoteRequestUpdateActionCollection
{
    /**
     * @psalm-assert MyQuoteRequestCancelAction $value
     * @psalm-param MyQuoteRequestCancelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyQuoteRequestCancelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyQuoteRequestCancelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyQuoteRequestCancelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyQuoteRequestCancelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyQuoteRequestCancelAction $data */
                $data = MyQuoteRequestCancelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
