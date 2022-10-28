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
 * @extends ChangeCollection<SetValidToChange>
 * @method SetValidToChange current()
 * @method SetValidToChange end()
 * @method SetValidToChange at($offset)
 */
class SetValidToChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetValidToChange $value
     * @psalm-param SetValidToChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidToChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidToChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidToChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetValidToChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetValidToChange $data */
                $data = SetValidToChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
