<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

interface ProductCatalogData extends JsonObject
{
    const FIELD_PUBLISHED = 'published';
    const FIELD_CURRENT = 'current';
    const FIELD_STAGED = 'staged';
    const FIELD_HAS_STAGED_CHANGES = 'hasStagedChanges';

    /**
     * @return mixed
     */
    public function getPublished();

    /**
     * @return ProductData
     */
    public function getCurrent();

    /**
     * @return ProductData
     */
    public function getStaged();

    /**
     * @return mixed
     */
    public function getHasStagedChanges();

    /**
     * @param mixed $published
     * @return $this
     */
    public function setPublished($published);

    /**
     * @param ProductData $current
     * @return $this
     */
    public function setCurrent(ProductData $current);

    /**
     * @param ProductData $staged
     * @return $this
     */
    public function setStaged(ProductData $staged);

    /**
     * @param mixed $hasStagedChanges
     * @return $this
     */
    public function setHasStagedChanges($hasStagedChanges);

}
