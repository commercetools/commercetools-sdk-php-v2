<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectChangeMessagesEnabledActionCollectionModel extends ProjectUpdateActionCollectionModel implements ProjectChangeMessagesEnabledActionCollection
{

    /**
     * @param ProjectChangeMessagesEnabledAction $value
     * @return ProjectChangeMessagesEnabledActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectChangeMessagesEnabledAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectChangeMessagesEnabledAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectChangeMessagesEnabledAction) {
            $data = $this->mapData(ProjectChangeMessagesEnabledAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
