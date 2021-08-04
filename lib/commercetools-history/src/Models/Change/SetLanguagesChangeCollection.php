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
 * @extends ChangeCollection<SetLanguagesChange>
 * @method SetLanguagesChange current()
 * @method SetLanguagesChange at($offset)
 */
class SetLanguagesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLanguagesChange $value
     * @psalm-param SetLanguagesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLanguagesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLanguagesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLanguagesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLanguagesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLanguagesChange $data */
                $data = SetLanguagesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
