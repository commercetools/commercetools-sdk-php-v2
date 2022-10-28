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
 * @extends StagedQuoteUpdateActionCollection<StagedQuoteTransitionStateAction>
 * @method StagedQuoteTransitionStateAction current()
 * @method StagedQuoteTransitionStateAction end()
 * @method StagedQuoteTransitionStateAction at($offset)
 */
class StagedQuoteTransitionStateActionCollection extends StagedQuoteUpdateActionCollection
{
    /**
     * @psalm-assert StagedQuoteTransitionStateAction $value
     * @psalm-param StagedQuoteTransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteTransitionStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteTransitionStateAction $data */
                $data = StagedQuoteTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
