<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewDraftModel extends JsonObjectModel implements ReviewDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $uniquenessValue;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $authorName;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?string
     */
    protected $text;

    /**
     * @var ?mixed
     */
    protected $target;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     * @var ?int
     */
    protected $rating;

    /**
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $uniquenessValue = null,
        ?string $locale = null,
        ?string $authorName = null,
        ?string $title = null,
        ?string $text = null,
        ?JsonObject $target = null,
        ?StateResourceIdentifier $state = null,
        ?int $rating = null,
        ?CustomerResourceIdentifier $customer = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->uniquenessValue = $uniquenessValue;
        $this->locale = $locale;
        $this->authorName = $authorName;
        $this->title = $title;
        $this->text = $text;
        $this->target = $target;
        $this->state = $state;
        $this->rating = $rating;
        $this->customer = $customer;
        $this->custom = $custom;
    }

    /**
     * <p>User-specific unique identifier for the review.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>If set, this value must be unique among reviews.
     * For example, if you want to have only one review per customer and per product, you can set the value to <code>customer's id</code> and <code>product's id</code>.</p>
     *
     * @return null|string
     */
    public function getUniquenessValue()
    {
        if (is_null($this->uniquenessValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_UNIQUENESS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->uniquenessValue = (string) $data;
        }

        return $this->uniquenessValue;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * @return null|string
     */
    public function getAuthorName()
    {
        if (is_null($this->authorName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_AUTHOR_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->authorName = (string) $data;
        }

        return $this->authorName;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }

    /**
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel</p>
     *
     * @return ?mixed
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var ?mixed $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $this->target = $data;
        }

        return $this->target;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>Number between -100 and 100 included.
     * Rating of the targeted object, like a product.
     * This rating can represent the number of stars, or a percentage, or a like (+1)/dislike (-1)
     * A rating is used in the ratings statistics of the targeted object, unless the review is in a state that does not have the role <code>ReviewIncludedInStatistics</code>.</p>
     *
     * @return null|int
     */
    public function getRating()
    {
        if (is_null($this->rating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->rating = (int) $data;
        }

        return $this->rating;
    }

    /**
     * <p>The customer who created the review.</p>
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel</p>
     *
     * @return null|ProductResourceIdentifier
     */
    public function getTargetAsProductResourceIdentifier()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_TARGET);
        if (is_null($data)) {
            return null;
        }

        return ProductResourceIdentifierModel::of($data);
    }

    /**
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getTargetAsChannelResourceIdentifier()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_TARGET);
        if (is_null($data)) {
            return null;
        }

        return ChannelResourceIdentifierModel::of($data);
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $uniquenessValue
     */
    public function setUniquenessValue(?string $uniquenessValue): void
    {
        $this->uniquenessValue = $uniquenessValue;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?string $authorName
     */
    public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param ?string $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * @param ?JsonObject $target
     */
    public function setTarget(?JsonObject $target): void
    {
        $this->target = $target;
    }

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?int $rating
     */
    public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
