<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Store\ProductSelectionSettingCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreCreatedMessagePayloadModel extends JsonObjectModel implements StoreCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreCreated';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?array
     */
    protected $languages;

    /**
     * @var ?ChannelReferenceCollection
     */
    protected $distributionChannels;

    /**
     * @var ?ChannelReferenceCollection
     */
    protected $supplyChannels;

    /**
     * @var ?ProductSelectionSettingCollection
     */
    protected $productSelections;

    /**
     * @var ?CustomFields
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?array $languages = null,
        ?ChannelReferenceCollection $distributionChannels = null,
        ?ChannelReferenceCollection $supplyChannels = null,
        ?ProductSelectionSettingCollection $productSelections = null,
        ?CustomFields $custom = null
    ) {
        $this->name = $name;
        $this->languages = $languages;
        $this->distributionChannels = $distributionChannels;
        $this->supplyChannels = $supplyChannels;
        $this->productSelections = $productSelections;
        $this->custom = $custom;
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
     * <p>JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values are the corresponding strings used for that language.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|array
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_LANGUAGES);
            if (is_null($data)) {
                return null;
            }
            $this->languages = $data;
        }

        return $this->languages;
    }

    /**
     * @return null|ChannelReferenceCollection
     */
    public function getDistributionChannels()
    {
        if (is_null($this->distributionChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->distributionChannels = ChannelReferenceCollection::fromArray($data);
        }

        return $this->distributionChannels;
    }

    /**
     * @return null|ChannelReferenceCollection
     */
    public function getSupplyChannels()
    {
        if (is_null($this->supplyChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->supplyChannels = ChannelReferenceCollection::fromArray($data);
        }

        return $this->supplyChannels;
    }

    /**
     * @return null|ProductSelectionSettingCollection
     */
    public function getProductSelections()
    {
        if (is_null($this->productSelections)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->productSelections = ProductSelectionSettingCollection::fromArray($data);
        }

        return $this->productSelections;
    }

    /**
     * <p>Serves as value of the <code>custom</code> field on a resource or data type customized with a <a href="ctp:api:type:Type">Type</a>.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @param ?ChannelReferenceCollection $distributionChannels
     */
    public function setDistributionChannels(?ChannelReferenceCollection $distributionChannels): void
    {
        $this->distributionChannels = $distributionChannels;
    }

    /**
     * @param ?ChannelReferenceCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelReferenceCollection $supplyChannels): void
    {
        $this->supplyChannels = $supplyChannels;
    }

    /**
     * @param ?ProductSelectionSettingCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingCollection $productSelections): void
    {
        $this->productSelections = $productSelections;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
}
