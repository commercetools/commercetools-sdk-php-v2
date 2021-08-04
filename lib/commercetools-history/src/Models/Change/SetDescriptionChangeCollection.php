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
 * @extends ChangeCollection<SetDescriptionChange>
 * @method SetDescriptionChange current()
 * @method SetDescriptionChange end()
 * @method SetDescriptionChange at($offset)
 */
class SetDescriptionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDescriptionChange $value
     * @psalm-param SetDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDescriptionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDescriptionChange $data */
                $data = SetDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
