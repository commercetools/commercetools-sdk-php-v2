<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\StagedQuote\StagedQuoteUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StagedQuoteUpdateActionCollection<StagedQuoteSetCustomTypeAction>
 * @method StagedQuoteSetCustomTypeAction current()
 * @method StagedQuoteSetCustomTypeAction end()
 * @method StagedQuoteSetCustomTypeAction at($offset)
 */
class StagedQuoteSetCustomTypeActionCollection extends StagedQuoteUpdateActionCollection
{
    /**
     * @psalm-assert StagedQuoteSetCustomTypeAction $value
     * @psalm-param StagedQuoteSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteSetCustomTypeAction $data */
                $data = StagedQuoteSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
