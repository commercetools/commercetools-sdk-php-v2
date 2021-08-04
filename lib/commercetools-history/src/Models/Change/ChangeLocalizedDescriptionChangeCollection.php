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
 * @extends ChangeCollection<ChangeLocalizedDescriptionChange>
 * @method ChangeLocalizedDescriptionChange current()
 * @method ChangeLocalizedDescriptionChange at($offset)
 */
class ChangeLocalizedDescriptionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeLocalizedDescriptionChange $value
     * @psalm-param ChangeLocalizedDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedDescriptionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeLocalizedDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeLocalizedDescriptionChange $data */
                $data = ChangeLocalizedDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
