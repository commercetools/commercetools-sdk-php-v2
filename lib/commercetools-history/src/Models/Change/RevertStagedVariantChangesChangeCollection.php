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
 * @extends ChangeCollection<RevertStagedVariantChangesChange>
 * @method RevertStagedVariantChangesChange current()
 * @method RevertStagedVariantChangesChange end()
 * @method RevertStagedVariantChangesChange at($offset)
 */
class RevertStagedVariantChangesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RevertStagedVariantChangesChange $value
     * @psalm-param RevertStagedVariantChangesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RevertStagedVariantChangesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RevertStagedVariantChangesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RevertStagedVariantChangesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RevertStagedVariantChangesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RevertStagedVariantChangesChange $data */
                $data = RevertStagedVariantChangesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
