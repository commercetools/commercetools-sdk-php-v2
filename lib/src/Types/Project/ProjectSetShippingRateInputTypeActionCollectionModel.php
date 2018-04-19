<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProjectSetShippingRateInputTypeActionCollectionModel extends ProjectUpdateActionCollectionModel implements ProjectSetShippingRateInputTypeActionCollection
{

    /**
     * @param ProjectSetShippingRateInputTypeAction $value
     * @return ProjectSetShippingRateInputTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProjectSetShippingRateInputTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProjectSetShippingRateInputTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProjectSetShippingRateInputTypeAction) {
            $data = $this->mapData(ProjectSetShippingRateInputTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
