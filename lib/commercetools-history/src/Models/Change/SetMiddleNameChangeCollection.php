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
 * @extends ChangeCollection<SetMiddleNameChange>
 * @method SetMiddleNameChange current()
 * @method SetMiddleNameChange at($offset)
 */
class SetMiddleNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMiddleNameChange $value
     * @psalm-param SetMiddleNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMiddleNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMiddleNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMiddleNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMiddleNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMiddleNameChange $data */
                $data = SetMiddleNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
