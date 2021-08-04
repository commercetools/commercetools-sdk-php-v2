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
 * @extends ChangeCollection<SetCustomLineItemCustomTypeChange>
 * @method SetCustomLineItemCustomTypeChange current()
 * @method SetCustomLineItemCustomTypeChange end()
 * @method SetCustomLineItemCustomTypeChange at($offset)
 */
class SetCustomLineItemCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemCustomTypeChange $value
     * @psalm-param SetCustomLineItemCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomLineItemCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemCustomTypeChange $data */
                $data = SetCustomLineItemCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
