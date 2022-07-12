<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\ProductSelectionSettingCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreProductSelectionsChangedMessagePayloadModel extends JsonObjectModel implements StoreProductSelectionsChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreProductSelectionsChanged';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    protected $addedProductSelections;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    protected $removedProductSelections;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    protected $updatedProductSelections;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionSettingCollection $addedProductSelections = null,
        ?ProductSelectionSettingCollection $removedProductSelections = null,
        ?ProductSelectionSettingCollection $updatedProductSelections = null
    ) {
        $this->addedProductSelections = $addedProductSelections;
        $this->removedProductSelections = $removedProductSelections;
        $this->updatedProductSelections = $updatedProductSelections;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getAddedProductSelections()
    {
        if (is_null($this->addedProductSelections)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDED_PRODUCT_SELECTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->addedProductSelections = ProductSelectionSettingCollection::fromArray($data);
        }

        return $this->addedProductSelections;
    }

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getRemovedProductSelections()
    {
        if (is_null($this->removedProductSelections)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REMOVED_PRODUCT_SELECTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->removedProductSelections = ProductSelectionSettingCollection::fromArray($data);
        }

        return $this->removedProductSelections;
    }

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getUpdatedProductSelections()
    {
        if (is_null($this->updatedProductSelections)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_UPDATED_PRODUCT_SELECTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->updatedProductSelections = ProductSelectionSettingCollection::fromArray($data);
        }

        return $this->updatedProductSelections;
    }


    /**
     * @param ?ProductSelectionSettingCollection $addedProductSelections
     */
    public function setAddedProductSelections(?ProductSelectionSettingCollection $addedProductSelections): void
    {
        $this->addedProductSelections = $addedProductSelections;
    }

    /**
     * @param ?ProductSelectionSettingCollection $removedProductSelections
     */
    public function setRemovedProductSelections(?ProductSelectionSettingCollection $removedProductSelections): void
    {
        $this->removedProductSelections = $removedProductSelections;
    }

    /**
     * @param ?ProductSelectionSettingCollection $updatedProductSelections
     */
    public function setUpdatedProductSelections(?ProductSelectionSettingCollection $updatedProductSelections): void
    {
        $this->updatedProductSelections = $updatedProductSelections;
    }
}
