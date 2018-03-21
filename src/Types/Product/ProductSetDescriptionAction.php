<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\LocalizedString;

interface ProductSetDescriptionAction extends ProductUpdateAction {
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STAGED = 'staged';

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
