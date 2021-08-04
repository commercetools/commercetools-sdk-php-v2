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
 * @extends ChangeCollection<SetLastNameChange>
 * @method SetLastNameChange current()
 * @method SetLastNameChange at($offset)
 */
class SetLastNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLastNameChange $value
     * @psalm-param SetLastNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLastNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLastNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLastNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLastNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLastNameChange $data */
                $data = SetLastNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
