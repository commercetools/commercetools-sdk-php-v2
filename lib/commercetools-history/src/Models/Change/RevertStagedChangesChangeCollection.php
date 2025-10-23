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
 * @extends ChangeCollection<RevertStagedChangesChange>
 * @method RevertStagedChangesChange current()
 * @method RevertStagedChangesChange end()
 * @method RevertStagedChangesChange at($offset)
 */
class RevertStagedChangesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RevertStagedChangesChange $value
     * @psalm-param RevertStagedChangesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RevertStagedChangesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RevertStagedChangesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RevertStagedChangesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RevertStagedChangesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RevertStagedChangesChange $data */
                $data = RevertStagedChangesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
