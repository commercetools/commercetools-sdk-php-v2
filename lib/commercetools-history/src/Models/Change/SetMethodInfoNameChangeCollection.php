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
 * @extends ChangeCollection<SetMethodInfoNameChange>
 * @method SetMethodInfoNameChange current()
 * @method SetMethodInfoNameChange end()
 * @method SetMethodInfoNameChange at($offset)
 */
class SetMethodInfoNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMethodInfoNameChange $value
     * @psalm-param SetMethodInfoNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMethodInfoNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMethodInfoNameChange $data */
                $data = SetMethodInfoNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
