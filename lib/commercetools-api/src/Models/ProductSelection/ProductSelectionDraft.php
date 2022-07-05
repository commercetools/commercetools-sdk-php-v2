<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier for the ProductSelection.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the ProductSelection. Not checked for uniqueness, but distinct names are recommended.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Custom Fields of this ProductSelection.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
