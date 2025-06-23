<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountGroupDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_KEY = 'key';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SORT_ORDER = 'sortOrder';

    /**
     * <p>Name of the DiscountGroup.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined unique identifier for the DiscountGroup.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Description for the DiscountGroup.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Value between <code>0</code> and <code>1</code> that determines the order in which the CartDiscount from the DiscountGroup will be applied; a CartDiscount with a higher value will be prioritized.</p>
     * <p>The sort order must be unique among all DiscountGroups and CartDiscounts.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void;
}
