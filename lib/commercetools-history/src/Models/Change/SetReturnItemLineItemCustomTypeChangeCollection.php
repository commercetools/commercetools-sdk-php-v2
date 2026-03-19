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
 * @extends ChangeCollection<SetReturnItemLineItemCustomTypeChange>
 * @method SetReturnItemLineItemCustomTypeChange current()
 * @method SetReturnItemLineItemCustomTypeChange end()
 * @method SetReturnItemLineItemCustomTypeChange at($offset)
 */
class SetReturnItemLineItemCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetReturnItemLineItemCustomTypeChange $value
     * @psalm-param SetReturnItemLineItemCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnItemLineItemCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnItemLineItemCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnItemLineItemCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetReturnItemLineItemCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetReturnItemLineItemCustomTypeChange $data */
                $data = SetReturnItemLineItemCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
