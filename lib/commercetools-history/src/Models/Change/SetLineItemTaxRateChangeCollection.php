<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetLineItemTaxRateChange>
 * @method SetLineItemTaxRateChange current()
 * @method SetLineItemTaxRateChange at($offset)
 */
class SetLineItemTaxRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemTaxRateChange $value
     * @psalm-param SetLineItemTaxRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTaxRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTaxRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTaxRateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLineItemTaxRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemTaxRateChange $data */
                $data = SetLineItemTaxRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
