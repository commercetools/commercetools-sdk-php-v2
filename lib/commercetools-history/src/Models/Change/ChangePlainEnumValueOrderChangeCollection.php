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
 * @extends ChangeCollection<ChangePlainEnumValueOrderChange>
 * @method ChangePlainEnumValueOrderChange current()
 * @method ChangePlainEnumValueOrderChange end()
 * @method ChangePlainEnumValueOrderChange at($offset)
 */
class ChangePlainEnumValueOrderChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangePlainEnumValueOrderChange $value
     * @psalm-param ChangePlainEnumValueOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePlainEnumValueOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePlainEnumValueOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePlainEnumValueOrderChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangePlainEnumValueOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangePlainEnumValueOrderChange $data */
                $data = ChangePlainEnumValueOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
