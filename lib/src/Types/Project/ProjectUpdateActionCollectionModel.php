<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectUpdateActionCollectionModel extends UpdateActionCollectionModel implements ProjectUpdateActionCollection
{

    /**
     * @param ProjectUpdateAction $value
     * @return ProjectUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ProjectUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
