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
 * @extends ChangeCollection<SetCustomLineItemTaxCategoryChange>
 * @method SetCustomLineItemTaxCategoryChange current()
 * @method SetCustomLineItemTaxCategoryChange at($offset)
 */
class SetCustomLineItemTaxCategoryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemTaxCategoryChange $value
     * @psalm-param SetCustomLineItemTaxCategoryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTaxCategoryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTaxCategoryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTaxCategoryChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomLineItemTaxCategoryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemTaxCategoryChange $data */
                $data = SetCustomLineItemTaxCategoryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
