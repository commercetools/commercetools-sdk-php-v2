<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectUpdateCollectionModel extends UpdateCollectionModel implements ProjectUpdateCollection {

    /**
     * @param ProjectUpdate $value
     * @return ProjectUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectUpdate) {
            $data = $this->mapData(ProjectUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
