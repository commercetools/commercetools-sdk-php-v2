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
 * @extends ChangeCollection<SetNameChange>
 * @method SetNameChange current()
 * @method SetNameChange at($offset)
 */
class SetNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetNameChange $value
     * @psalm-param SetNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetNameChange $data */
                $data = SetNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
