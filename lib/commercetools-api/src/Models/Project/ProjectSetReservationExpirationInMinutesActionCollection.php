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
 * @extends ProjectUpdateActionCollection<ProjectSetReservationExpirationInMinutesAction>
 * @method ProjectSetReservationExpirationInMinutesAction current()
 * @method ProjectSetReservationExpirationInMinutesAction end()
 * @method ProjectSetReservationExpirationInMinutesAction at($offset)
 */
class ProjectSetReservationExpirationInMinutesActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectSetReservationExpirationInMinutesAction $value
     * @psalm-param ProjectSetReservationExpirationInMinutesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectSetReservationExpirationInMinutesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectSetReservationExpirationInMinutesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectSetReservationExpirationInMinutesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectSetReservationExpirationInMinutesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectSetReservationExpirationInMinutesAction $data */
                $data = ProjectSetReservationExpirationInMinutesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
