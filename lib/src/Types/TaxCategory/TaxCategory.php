<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Builder\TaxCategoryUpdateBuilder;
use Commercetools\Types\Common\Resource;

interface TaxCategory extends Resource {
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_RATES = 'rates';
    const FIELD_KEY = 'key';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return TaxRateCollection
     */
    public function getRates();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description);

    /**
     * @param TaxRateCollection $rates
     * @return $this
     */
    public function setRates(TaxRateCollection $rates);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @return TaxCategoryUpdateBuilder
     */
    public function update();
}
