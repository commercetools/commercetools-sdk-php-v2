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
 * @extends StagedQuoteUpdateActionCollection<StagedQuoteSetCustomFieldAction>
 * @method StagedQuoteSetCustomFieldAction current()
 * @method StagedQuoteSetCustomFieldAction end()
 * @method StagedQuoteSetCustomFieldAction at($offset)
 */
class StagedQuoteSetCustomFieldActionCollection extends StagedQuoteUpdateActionCollection
{
    /**
     * @psalm-assert StagedQuoteSetCustomFieldAction $value
     * @psalm-param StagedQuoteSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteSetCustomFieldAction $data */
                $data = StagedQuoteSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
