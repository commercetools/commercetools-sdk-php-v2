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
 * @extends StagedQuoteUpdateActionCollection<StagedQuoteSetValidToAction>
 * @method StagedQuoteSetValidToAction current()
 * @method StagedQuoteSetValidToAction end()
 * @method StagedQuoteSetValidToAction at($offset)
 */
class StagedQuoteSetValidToActionCollection extends StagedQuoteUpdateActionCollection
{
    /**
     * @psalm-assert StagedQuoteSetValidToAction $value
     * @psalm-param StagedQuoteSetValidToAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteSetValidToActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteSetValidToAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteSetValidToAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteSetValidToAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteSetValidToAction $data */
                $data = StagedQuoteSetValidToActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
