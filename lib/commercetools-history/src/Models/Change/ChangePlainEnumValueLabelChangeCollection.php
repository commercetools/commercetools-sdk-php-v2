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
 * @extends ChangeCollection<ChangePlainEnumValueLabelChange>
 * @method ChangePlainEnumValueLabelChange current()
 * @method ChangePlainEnumValueLabelChange at($offset)
 */
class ChangePlainEnumValueLabelChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangePlainEnumValueLabelChange $value
     * @psalm-param ChangePlainEnumValueLabelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePlainEnumValueLabelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePlainEnumValueLabelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePlainEnumValueLabelChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePlainEnumValueLabelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangePlainEnumValueLabelChange $data */
                $data = ChangePlainEnumValueLabelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
