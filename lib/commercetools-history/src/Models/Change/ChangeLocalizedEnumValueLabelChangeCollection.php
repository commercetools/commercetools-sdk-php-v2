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
 * @extends ChangeCollection<ChangeLocalizedEnumValueLabelChange>
 * @method ChangeLocalizedEnumValueLabelChange current()
 * @method ChangeLocalizedEnumValueLabelChange at($offset)
 */
class ChangeLocalizedEnumValueLabelChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeLocalizedEnumValueLabelChange $value
     * @psalm-param ChangeLocalizedEnumValueLabelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedEnumValueLabelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedEnumValueLabelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedEnumValueLabelChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeLocalizedEnumValueLabelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeLocalizedEnumValueLabelChange $data */
                $data = ChangeLocalizedEnumValueLabelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
