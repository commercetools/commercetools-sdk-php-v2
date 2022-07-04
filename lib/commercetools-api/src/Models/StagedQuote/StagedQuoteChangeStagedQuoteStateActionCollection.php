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
 * @extends StagedQuoteUpdateActionCollection<StagedQuoteChangeStagedQuoteStateAction>
 * @method StagedQuoteChangeStagedQuoteStateAction current()
 * @method StagedQuoteChangeStagedQuoteStateAction end()
 * @method StagedQuoteChangeStagedQuoteStateAction at($offset)
 */
class StagedQuoteChangeStagedQuoteStateActionCollection extends StagedQuoteUpdateActionCollection
{
    /**
     * @psalm-assert StagedQuoteChangeStagedQuoteStateAction $value
     * @psalm-param StagedQuoteChangeStagedQuoteStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteChangeStagedQuoteStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteChangeStagedQuoteStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteChangeStagedQuoteStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteChangeStagedQuoteStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteChangeStagedQuoteStateAction $data */
                $data = StagedQuoteChangeStagedQuoteStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
