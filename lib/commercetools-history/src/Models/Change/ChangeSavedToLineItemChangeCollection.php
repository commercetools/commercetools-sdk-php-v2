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
 * @extends ChangeCollection<ChangeSavedToLineItemChange>
 * @method ChangeSavedToLineItemChange current()
 * @method ChangeSavedToLineItemChange end()
 * @method ChangeSavedToLineItemChange at($offset)
 */
class ChangeSavedToLineItemChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeSavedToLineItemChange $value
     * @psalm-param ChangeSavedToLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeSavedToLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeSavedToLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeSavedToLineItemChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeSavedToLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeSavedToLineItemChange $data */
                $data = ChangeSavedToLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
