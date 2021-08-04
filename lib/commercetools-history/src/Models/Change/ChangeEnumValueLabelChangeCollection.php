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
 * @extends ChangeCollection<ChangeEnumValueLabelChange>
 * @method ChangeEnumValueLabelChange current()
 * @method ChangeEnumValueLabelChange end()
 * @method ChangeEnumValueLabelChange at($offset)
 */
class ChangeEnumValueLabelChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeEnumValueLabelChange $value
     * @psalm-param ChangeEnumValueLabelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEnumValueLabelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEnumValueLabelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEnumValueLabelChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeEnumValueLabelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeEnumValueLabelChange $data */
                $data = ChangeEnumValueLabelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
