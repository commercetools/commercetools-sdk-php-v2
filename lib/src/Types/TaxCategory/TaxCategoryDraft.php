<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonObject;

interface TaxCategoryDraft extends JsonObject {
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
     * @return TaxRateDraftCollection
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
     * @param TaxRateDraftCollection $rates
     * @return $this
     */
    public function setRates(TaxRateDraftCollection $rates);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

}
