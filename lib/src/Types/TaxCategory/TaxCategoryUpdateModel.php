<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class TaxCategoryUpdateModel extends UpdateModel implements TaxCategoryUpdate
{
    /**
     * @var TaxCategoryUpdateActionCollection
     */
    protected $actions;

    /**
     * @return TaxCategoryUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(TaxCategoryUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryUpdateActionCollection::class, null);
            }
            $value = $this->mapData(TaxCategoryUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param TaxCategoryUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof TaxCategoryUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
