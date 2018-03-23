<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetTitleActionModel extends CustomerUpdateActionModel implements CustomerSetTitleAction {
    const DISCRIMINATOR_VALUE = 'setTitle';

    /**
     * @var string
     */
    protected $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            $value = $this->raw(CustomerSetTitleAction::FIELD_TITLE);
            $value = (string)$value;
            $this->title = $value;
        }
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = (string)$title;

        return $this;
    }

}
