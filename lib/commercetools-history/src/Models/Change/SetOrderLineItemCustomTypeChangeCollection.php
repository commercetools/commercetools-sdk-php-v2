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
 * @extends ChangeCollection<SetOrderLineItemCustomTypeChange>
 * @method SetOrderLineItemCustomTypeChange current()
 * @method SetOrderLineItemCustomTypeChange end()
 * @method SetOrderLineItemCustomTypeChange at($offset)
 */
class SetOrderLineItemCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetOrderLineItemCustomTypeChange $value
     * @psalm-param SetOrderLineItemCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderLineItemCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderLineItemCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderLineItemCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetOrderLineItemCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetOrderLineItemCustomTypeChange $data */
                $data = SetOrderLineItemCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
