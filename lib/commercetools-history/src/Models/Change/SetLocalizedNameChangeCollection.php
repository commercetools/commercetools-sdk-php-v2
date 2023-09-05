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
 * @extends ChangeCollection<SetLocalizedNameChange>
 * @method SetLocalizedNameChange current()
 * @method SetLocalizedNameChange end()
 * @method SetLocalizedNameChange at($offset)
 */
class SetLocalizedNameChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLocalizedNameChange $value
     * @psalm-param SetLocalizedNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLocalizedNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLocalizedNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLocalizedNameChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLocalizedNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLocalizedNameChange $data */
                $data = SetLocalizedNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
