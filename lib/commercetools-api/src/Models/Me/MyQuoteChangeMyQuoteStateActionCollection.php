<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyQuoteUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyQuoteUpdateActionCollection<MyQuoteChangeMyQuoteStateAction>
 * @method MyQuoteChangeMyQuoteStateAction current()
 * @method MyQuoteChangeMyQuoteStateAction end()
 * @method MyQuoteChangeMyQuoteStateAction at($offset)
 */
class MyQuoteChangeMyQuoteStateActionCollection extends MyQuoteUpdateActionCollection
{
    /**
     * @psalm-assert MyQuoteChangeMyQuoteStateAction $value
     * @psalm-param MyQuoteChangeMyQuoteStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyQuoteChangeMyQuoteStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyQuoteChangeMyQuoteStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyQuoteChangeMyQuoteStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyQuoteChangeMyQuoteStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyQuoteChangeMyQuoteStateAction $data */
                $data = MyQuoteChangeMyQuoteStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
