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
 * @extends ChangeCollection<SetReturnItemCustomLineItemCustomTypeChange>
 * @method SetReturnItemCustomLineItemCustomTypeChange current()
 * @method SetReturnItemCustomLineItemCustomTypeChange end()
 * @method SetReturnItemCustomLineItemCustomTypeChange at($offset)
 */
class SetReturnItemCustomLineItemCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetReturnItemCustomLineItemCustomTypeChange $value
     * @psalm-param SetReturnItemCustomLineItemCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnItemCustomLineItemCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnItemCustomLineItemCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnItemCustomLineItemCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetReturnItemCustomLineItemCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetReturnItemCustomLineItemCustomTypeChange $data */
                $data = SetReturnItemCustomLineItemCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
