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
 * @extends ChangeCollection<SetLocaleChange>
 * @method SetLocaleChange current()
 * @method SetLocaleChange end()
 * @method SetLocaleChange at($offset)
 */
class SetLocaleChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLocaleChange $value
     * @psalm-param SetLocaleChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLocaleChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLocaleChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLocaleChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLocaleChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLocaleChange $data */
                $data = SetLocaleChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
