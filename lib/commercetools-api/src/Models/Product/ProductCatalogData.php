<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductCatalogData extends JsonObject
{
    
    const FIELD_PUBLISHED = 'published';
    const FIELD_CURRENT = 'current';
    const FIELD_STAGED = 'staged';
    const FIELD_HAS_STAGED_CHANGES = 'hasStagedChanges';

    /**
     *
     * @return bool|null
     */
    public function getPublished();
    
    /**
     *
     * @return ProductData|null
     */
    public function getCurrent();
    
    /**
     *
     * @return ProductData|null
     */
    public function getStaged();
    
    /**
     *
     * @return bool|null
     */
    public function getHasStagedChanges();
    public function setPublished(?bool $published): void;
    
    public function setCurrent(?ProductData $current): void;
    
    public function setStaged(?ProductData $staged): void;
    
    public function setHasStagedChanges(?bool $hasStagedChanges): void;
}