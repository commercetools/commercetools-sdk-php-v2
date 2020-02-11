<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class TextLineItemDraftModel extends JsonObjectModel implements TextLineItemDraft
{

    /**
     * @var ?DateTimeImmutable
     */
    protected $addedAt;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?int
     */
    protected $quantity;


    public function __construct(
        DateTimeImmutable $addedAt = null,
        CustomFieldsDraft $custom = null,
        LocalizedString $description = null,
        LocalizedString $name = null,
        int $quantity = null
    ) {
        $this->addedAt = $addedAt;
        $this->custom = $custom;
        $this->description = $description;
        $this->name = $name;
        $this->quantity = $quantity;

    }

    /**
     * <p>Defaults to the current date and time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TextLineItemDraft::FIELD_ADDED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->addedAt = $data;
        }

        return $this->addedAt;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TextLineItemDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TextLineItemDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TextLineItemDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Defaults to <code>1</code>.</p>
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TextLineItemDraft::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[TextLineItemDraft::FIELD_ADDED_AT]) && $data[TextLineItemDraft::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[TextLineItemDraft::FIELD_ADDED_AT] = $data[TextLineItemDraft::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
