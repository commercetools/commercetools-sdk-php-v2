<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectChangeNameActionCollectionModel extends ProjectUpdateActionCollectionModel implements ProjectChangeNameActionCollection {

    /**
     * @param ProjectChangeNameAction $value
     * @return ProjectChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectChangeNameAction) {
            $data = $this->mapData(ProjectChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
