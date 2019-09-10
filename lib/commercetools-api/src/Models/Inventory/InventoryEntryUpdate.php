<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;

interface InventoryEntryUpdate extends JsonObject
{
    
    const FIELD_VERSION = 'version';
    const FIELD_ACTIONS = 'actions';

    /**
     *
     * @return int|null
     */
    public function getVersion();
    
    /**
     *
     * @return InventoryEntryUpdateActionCollection|null
     */
    public function getActions();
    public function setVersion(?int $version): void;
    
    public function setActions(?InventoryEntryUpdateActionCollection $actions): void;
}