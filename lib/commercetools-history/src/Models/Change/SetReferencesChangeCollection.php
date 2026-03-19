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
 * @extends ChangeCollection<SetReferencesChange>
 * @method SetReferencesChange current()
 * @method SetReferencesChange end()
 * @method SetReferencesChange at($offset)
 */
class SetReferencesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetReferencesChange $value
     * @psalm-param SetReferencesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReferencesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReferencesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReferencesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetReferencesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetReferencesChange $data */
                $data = SetReferencesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
