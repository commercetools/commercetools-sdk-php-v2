<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectChangeCurrenciesActionCollectionModel extends ProjectUpdateActionCollectionModel implements ProjectChangeCurrenciesActionCollection
{

    /**
     * @param ProjectChangeCurrenciesAction $value
     * @return ProjectChangeCurrenciesActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectChangeCurrenciesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectChangeCurrenciesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectChangeCurrenciesAction) {
            $data = $this->mapData(ProjectChangeCurrenciesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
