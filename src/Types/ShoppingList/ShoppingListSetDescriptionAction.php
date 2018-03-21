<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\LocalizedString;

interface ShoppingListSetDescriptionAction extends ShoppingListUpdateAction {
    const FIELD_DESCRIPTION = 'description';

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

}
