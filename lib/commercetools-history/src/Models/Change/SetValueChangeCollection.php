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
 * @extends ChangeCollection<SetValueChange>
 * @method SetValueChange current()
 * @method SetValueChange end()
 * @method SetValueChange at($offset)
 */
class SetValueChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetValueChange $value
     * @psalm-param SetValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValueChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetValueChange $data */
                $data = SetValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
