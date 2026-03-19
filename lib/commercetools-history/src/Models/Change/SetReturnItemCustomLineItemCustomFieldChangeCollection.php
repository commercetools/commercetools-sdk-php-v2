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
 * @extends ChangeCollection<SetReturnItemCustomLineItemCustomFieldChange>
 * @method SetReturnItemCustomLineItemCustomFieldChange current()
 * @method SetReturnItemCustomLineItemCustomFieldChange end()
 * @method SetReturnItemCustomLineItemCustomFieldChange at($offset)
 */
class SetReturnItemCustomLineItemCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetReturnItemCustomLineItemCustomFieldChange $value
     * @psalm-param SetReturnItemCustomLineItemCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnItemCustomLineItemCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnItemCustomLineItemCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnItemCustomLineItemCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetReturnItemCustomLineItemCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetReturnItemCustomLineItemCustomFieldChange $data */
                $data = SetReturnItemCustomLineItemCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
