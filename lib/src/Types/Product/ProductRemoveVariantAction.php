<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductRemoveVariantAction extends ProductUpdateAction {
    const FIELD_ID = 'id';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
