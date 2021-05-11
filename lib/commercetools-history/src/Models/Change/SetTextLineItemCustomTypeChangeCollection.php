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
 * @extends ChangeCollection<SetTextLineItemCustomTypeChange>
 * @method SetTextLineItemCustomTypeChange current()
 * @method SetTextLineItemCustomTypeChange at($offset)
 */
class SetTextLineItemCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTextLineItemCustomTypeChange $value
     * @psalm-param SetTextLineItemCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemCustomTypeChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextLineItemCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTextLineItemCustomTypeChange $data */
                $data = SetTextLineItemCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
