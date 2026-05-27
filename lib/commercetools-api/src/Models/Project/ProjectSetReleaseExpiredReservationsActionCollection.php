<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Project\ProjectUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProjectUpdateActionCollection<ProjectSetReleaseExpiredReservationsAction>
 * @method ProjectSetReleaseExpiredReservationsAction current()
 * @method ProjectSetReleaseExpiredReservationsAction end()
 * @method ProjectSetReleaseExpiredReservationsAction at($offset)
 */
class ProjectSetReleaseExpiredReservationsActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectSetReleaseExpiredReservationsAction $value
     * @psalm-param ProjectSetReleaseExpiredReservationsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectSetReleaseExpiredReservationsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectSetReleaseExpiredReservationsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectSetReleaseExpiredReservationsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectSetReleaseExpiredReservationsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectSetReleaseExpiredReservationsAction $data */
                $data = ProjectSetReleaseExpiredReservationsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
