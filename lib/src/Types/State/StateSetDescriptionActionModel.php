<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\State\StateUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class StateSetDescriptionActionModel extends StateUpdateActionModel implements StateSetDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setDescription';

    /**
     * @var LocalizedString
     */
    protected $description;

    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(StateSetDescriptionAction::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

}
