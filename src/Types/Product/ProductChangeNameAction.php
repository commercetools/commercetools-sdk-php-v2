<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\LocalizedString;

interface ProductChangeNameAction extends ProductUpdateAction {
    const FIELD_NAME = 'name';
    const FIELD_STAGED = 'staged';

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
